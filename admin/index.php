<?php
// PHP Built-in Server Router Fallback
$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_path = rtrim($request_path, '/');

if ($request_path === '/admin/login') {
    require_once __DIR__ . '/login.php';
    exit();
} elseif ($request_path === '/admin/logout') {
    require_once __DIR__ . '/logout.php';
    exit();
} elseif ($request_path === '/admin/tambah') {
    require_once __DIR__ . '/tambah.php';
    exit();
} elseif ($request_path === '/admin/edit') {
    require_once __DIR__ . '/edit.php';
    exit();
} elseif ($request_path === '/admin/hapus') {
    require_once __DIR__ . '/hapus.php';
    exit();
}

require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../db.php';

$conn = db();

// Ambil parameter filter & pencarian
$filterType = $_GET['type'] ?? '';
$search     = trim($_GET['q'] ?? '');
$page       = max(1, (int)($_GET['page'] ?? 1));
$perPage    = 10;
$offset     = ($page - 1) * $perPage;

// Bangun query
$where  = [];
$params = [];
$types  = '';

if (in_array($filterType, ['depression', 'anxiety', 'stress'], true)) {
    $where[] = 'k.nama_kategori = ?';
    $params[] = $filterType;
    $types   .= 's';
}
if ($search !== '') {
    $where[] = 'g.question_text LIKE ?';
    $params[] = '%' . $search . '%';
    $types   .= 's';
}
$whereSql = $where ? ('WHERE ' . implode(' AND ', $where)) : '';

// Hitung total
$countSql = "SELECT COUNT(*) AS total FROM gejala g JOIN kategori_gejala k ON g.kategori_id = k.id {$whereSql}";
$stmt = $conn->prepare($countSql);
if ($params) $stmt->bind_param($types, ...$params);
$stmt->execute();
$total = (int)$stmt->get_result()->fetch_assoc()['total'];
$stmt->close();
$totalPages = max(1, (int)ceil($total / $perPage));

// Ambil data
$dataSql = "SELECT g.id, g.question_text, k.nama_kategori AS question_type, g.sort_order, g.created_at FROM gejala g JOIN kategori_gejala k ON g.kategori_id = k.id {$whereSql} ORDER BY g.sort_order ASC, g.id ASC LIMIT ? OFFSET ?";
$stmt = $conn->prepare($dataSql);
$bindParams = $params;
$bindParams[] = $perPage;
$bindParams[] = $offset;
$bindTypes = $types . 'ii';
$stmt->bind_param($bindTypes, ...$bindParams);
$stmt->execute();
$rows = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Statistik
$stats = ['depression' => 0, 'anxiety' => 0, 'stress' => 0, 'total' => $total];
$resStats = $conn->query("SELECT k.nama_kategori AS question_type, COUNT(*) AS c FROM gejala g JOIN kategori_gejala k ON g.kategori_id = k.id GROUP BY k.nama_kategori");
while ($r = $resStats->fetch_assoc()) {
    $stats[$r['question_type']] = (int)$r['c'];
}

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$typeLabels = [
    'depression' => ['label' => 'Depresi',  'class' => 'bg-violet-100 text-violet-700 border-violet-200',  'icon' => 'nightlight'],
    'anxiety'    => ['label' => 'Kecemasan', 'class' => 'bg-amber-100 text-amber-700 border-amber-200',   'icon' => 'air'],
    'stress'     => ['label' => 'Stres',     'class' => 'bg-sky-100 text-sky-700 border-sky-200',         'icon' => 'waves'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kelola Gejala - Admin MentalHealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="min-h-screen bg-slate-50">

<!-- TOPBAR -->
<header class="sticky top-0 z-40 bg-white/80 backdrop-blur-xl border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
        <a href="/admin/index.php" class="flex items-center gap-2">
            <span class="material-symbols-outlined text-emerald-700" style="font-variation-settings: 'FILL' 1;">spa</span>
            <span class="font-display text-xl font-bold text-slate-800">MentalHealth Admin</span>
        </a>
        <div class="flex items-center gap-3">
            <span class="hidden sm:inline text-sm text-slate-500">
                Halo, <strong class="text-slate-700"><?php echo htmlspecialchars($_SESSION['admin_username']); ?></strong>
            </span>
            <a href="/index.php" target="_blank" class="hidden sm:inline-flex items-center gap-1 text-sm text-slate-600 hover:text-emerald-700">
                <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                Lihat Situs
            </a>
            <a href="/admin/logout.php" class="inline-flex items-center gap-1 text-sm text-rose-600 hover:text-rose-700 font-semibold">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                Keluar
            </a>
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto px-4 md:px-8 py-8">

    <?php if ($flash): ?>
        <div class="mb-6 flex items-start gap-3 rounded-2xl border <?php echo $flash['type'] === 'success' ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : 'border-rose-200 bg-rose-50 text-rose-700'; ?> px-4 py-3 text-sm">
            <span class="material-symbols-outlined mt-0.5"><?php echo $flash['type'] === 'success' ? 'check_circle' : 'error'; ?></span>
            <span><?php echo htmlspecialchars($flash['message']); ?></span>
        </div>
    <?php endif; ?>

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
        <div>
            <h1 class="font-display text-3xl font-bold text-slate-800">Kelola Gejala DASS-21</h1>
            <p class="text-slate-500 mt-1">Tambah, ubah, atau hapus pertanyaan untuk skrining kesehatan mental.</p>
        </div>
        <a href="/admin/tambah.php" class="inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full px-6 py-3 shadow-lg shadow-emerald-200 transition">
            <span class="material-symbols-outlined">add</span>
            Tambah Gejala
        </a>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-2xl border border-slate-200 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold">Total</p>
                    <p class="text-3xl font-bold text-slate-800 mt-1"><?php echo $stats['total']; ?></p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center">
                    <span class="material-symbols-outlined">dataset</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-200 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold">Depresi</p>
                    <p class="text-3xl font-bold text-violet-700 mt-1"><?php echo $stats['depression']; ?></p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-violet-100 text-violet-700 flex items-center justify-center">
                    <span class="material-symbols-outlined">nightlight</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-200 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold">Kecemasan</p>
                    <p class="text-3xl font-bold text-amber-700 mt-1"><?php echo $stats['anxiety']; ?></p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center">
                    <span class="material-symbols-outlined">air</span>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-slate-200 p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-wider text-slate-500 font-semibold">Stres</p>
                    <p class="text-3xl font-bold text-sky-700 mt-1"><?php echo $stats['stress']; ?></p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center">
                    <span class="material-symbols-outlined">waves</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Pencarian -->
    <div class="bg-white rounded-2xl border border-slate-200 p-4 mb-6">
        <form method="GET" action="/admin/index.php" class="flex flex-col md:flex-row gap-3">
            <div class="flex-1 relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">search</span>
                <input type="text" name="q" value="<?php echo htmlspecialchars($search); ?>" placeholder="Cari pertanyaan..."
                       class="w-full pl-11 pr-4 py-2.5 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition"/>
            </div>
            <select name="type" class="md:w-48 px-4 py-2.5 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition">
                <option value="">Semua Kategori</option>
                <option value="depression" <?php echo $filterType === 'depression' ? 'selected' : ''; ?>>Depresi</option>
                <option value="anxiety" <?php echo $filterType === 'anxiety' ? 'selected' : ''; ?>>Kecemasan</option>
                <option value="stress" <?php echo $filterType === 'stress' ? 'selected' : ''; ?>>Stres</option>
            </select>
            <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white font-semibold rounded-xl px-5 py-2.5">Filter</button>
            <?php if ($search !== '' || $filterType !== ''): ?>
                <a href="/admin/index.php" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl px-5 py-2.5 text-center">Reset</a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Tabel -->
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-slate-50 text-slate-600 text-left">
                    <tr>
                        <th class="px-4 py-3 font-semibold w-14">#</th>
                        <th class="px-4 py-3 font-semibold">Pertanyaan</th>
                        <th class="px-4 py-3 font-semibold w-40">Kategori</th>
                        <th class="px-4 py-3 font-semibold w-16 text-center">Urutan</th>
                        <th class="px-4 py-3 font-semibold w-32 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <?php if (empty($rows)): ?>
                        <tr>
                            <td colspan="5" class="px-4 py-12 text-center text-slate-500">
                                <span class="material-symbols-outlined text-4xl text-slate-300">inbox</span>
                                <p class="mt-2">Tidak ada data gejala yang ditemukan.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($rows as $r):
                            $t = $typeLabels[$r['question_type']];
                        ?>
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 text-slate-500 font-medium"><?php echo (int)$r['id']; ?></td>
                            <td class="px-4 py-3 text-slate-800"><?php echo htmlspecialchars($r['question_text']); ?></td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1.5 text-xs font-semibold px-2.5 py-1 rounded-full border <?php echo $t['class']; ?>">
                                    <span class="material-symbols-outlined text-[14px]"><?php echo $t['icon']; ?></span>
                                    <?php echo $t['label']; ?>
                                </span>
                            </td>
                            <td class="px-4 py-3 text-center text-slate-500"><?php echo (int)$r['sort_order']; ?></td>
                            <td class="px-4 py-3 text-right">
                                <a href="/admin/edit.php?id=<?php echo (int)$r['id']; ?>" class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-slate-500 hover:bg-sky-50 hover:text-sky-700 transition" title="Edit">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>
                                <form method="POST" action="/admin/hapus.php" class="inline" onsubmit="return confirm('Hapus data gejala ini?');">
                                    <input type="hidden" name="id" value="<?php echo (int)$r['id']; ?>"/>
                                    <button type="submit" class="inline-flex items-center justify-center w-9 h-9 rounded-lg text-slate-500 hover:bg-rose-50 hover:text-rose-700 transition" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <?php if ($totalPages > 1): ?>
            <div class="flex items-center justify-between px-4 py-3 border-t border-slate-100 text-sm">
                <p class="text-slate-500">
                    Menampilkan <?php echo $offset + 1; ?>–<?php echo min($offset + $perPage, $total); ?> dari <?php echo $total; ?>
                </p>
                <div class="flex items-center gap-1">
                    <?php
                    $baseQs = http_build_query(array_filter(['q' => $search, 'type' => $filterType]));
                    $baseQs = $baseQs ? '&' . $baseQs : '';
                    ?>
                    <?php if ($page > 1): ?>
                        <a href="/admin/index.php?page=<?php echo $page - 1; ?><?php echo $baseQs; ?>" class="px-3 py-1.5 rounded-lg text-slate-600 hover:bg-slate-100">← Prev</a>
                    <?php endif; ?>
                    <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++): ?>
                        <a href="/admin/index.php?page=<?php echo $i; ?><?php echo $baseQs; ?>"
                           class="px-3 py-1.5 rounded-lg <?php echo $i === $page ? 'bg-emerald-600 text-white font-semibold' : 'text-slate-600 hover:bg-slate-100'; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages): ?>
                        <a href="/admin/index.php?page=<?php echo $page + 1; ?><?php echo $baseQs; ?>" class="px-3 py-1.5 rounded-lg text-slate-600 hover:bg-slate-100">Next →</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
