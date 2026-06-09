<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../db.php';

$conn = db();

$errors = [];
$old = [
    'question_text' => '',
    'question_type' => 'depression',
    'sort_order'    => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old['question_text'] = trim($_POST['question_text'] ?? '');
    $old['question_type'] = $_POST['question_type'] ?? '';
    $old['sort_order']    = $_POST['sort_order'] ?? '';

    if ($old['question_text'] === '') {
        $errors[] = 'Teks pertanyaan wajib diisi.';
    } elseif (mb_strlen($old['question_text']) < 5) {
        $errors[] = 'Teks pertanyaan minimal 5 karakter.';
    }
    if (!in_array($old['question_type'], ['depression', 'anxiety', 'stress'], true)) {
        $errors[] = 'Kategori tidak valid.';
    }
    $sortOrder = (int)$old['sort_order'];
    if ($sortOrder < 0) $sortOrder = 0;

    if (empty($errors)) {
        // Get kategori_id from kategori_gejala
        $stmt_kat = $conn->prepare('SELECT id FROM kategori_gejala WHERE nama_kategori = ?');
        $stmt_kat->bind_param('s', $old['question_type']);
        $stmt_kat->execute();
        $res_kat = $stmt_kat->get_result()->fetch_assoc();
        $stmt_kat->close();
        
        if ($res_kat) {
            $kategori_id = $res_kat['id'];
            $stmt = $conn->prepare('INSERT INTO gejala (question_text, kategori_id, sort_order) VALUES (?, ?, ?)');
            $stmt->bind_param('sii', $old['question_text'], $kategori_id, $sortOrder);
            if ($stmt->execute()) {
                $stmt->close();
                $_SESSION['flash'] = ['type' => 'success', 'message' => 'Gejala berhasil ditambahkan.'];
                header('Location: /admin/index.php');
                exit();
            } else {
                $errors[] = 'Gagal menyimpan: ' . $stmt->error;
                $stmt->close();
            }
        } else {
            $errors[] = 'Kategori tidak ditemukan di database.';
        }
    }
}

// Default sort_order = (max existing) + 1
$maxRes = $conn->query("SELECT COALESCE(MAX(sort_order), 0) AS m FROM gejala")->fetch_assoc();
$defaultSort = ((int)$maxRes['m']) + 1;
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || $old['sort_order'] === '') {
    $old['sort_order'] = (string)$defaultSort;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Tambah Gejala - Admin MentalHealth</title>
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

<header class="sticky top-0 z-40 bg-white/80 backdrop-blur-xl border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
        <a href="/admin/index.php" class="flex items-center gap-2">
            <span class="material-symbols-outlined text-emerald-700" style="font-variation-settings: 'FILL' 1;">spa</span>
            <span class="font-display text-xl font-bold text-slate-800">MentalHealth Admin</span>
        </a>
        <a href="/admin/index.php" class="inline-flex items-center gap-1 text-sm text-slate-600 hover:text-emerald-700">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Kembali
        </a>
    </div>
</header>

<main class="max-w-3xl mx-auto px-4 md:px-8 py-8">
    <div class="mb-8">
        <h1 class="font-display text-3xl font-bold text-slate-800">Tambah Gejala</h1>
        <p class="text-slate-500 mt-1">Tambahkan pertanyaan baru untuk skrining DASS-21.</p>
    </div>

    <?php if ($errors): ?>
        <div class="mb-6 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
            <ul class="list-disc list-inside space-y-1">
                <?php foreach ($errors as $e): ?>
                    <li><?php echo htmlspecialchars($e); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="/admin/tambah.php" class="bg-white rounded-2xl border border-slate-200 p-6 md:p-8 space-y-6">
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-2">Teks Pertanyaan <span class="text-rose-500">*</span></label>
            <textarea name="question_text" rows="3" required
                      placeholder="Contoh: Saya merasa khawatir dengan situasi..."
                      class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition"><?php echo htmlspecialchars($old['question_text']); ?></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori <span class="text-rose-500">*</span></label>
                <select name="question_type" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition">
                    <option value="depression" <?php echo $old['question_type'] === 'depression' ? 'selected' : ''; ?>>Depresi</option>
                    <option value="anxiety"    <?php echo $old['question_type'] === 'anxiety'    ? 'selected' : ''; ?>>Kecemasan</option>
                    <option value="stress"     <?php echo $old['question_type'] === 'stress'     ? 'selected' : ''; ?>>Stres</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Urutan</label>
                <input type="number" min="1" name="sort_order" value="<?php echo htmlspecialchars($old['sort_order']); ?>"
                       class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition"/>
                <p class="text-xs text-slate-500 mt-1">Urutan tampil pertanyaan (1 = pertama). Default: urutan terakhir + 1.</p>
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="/admin/index.php" class="px-5 py-2.5 rounded-full text-slate-700 hover:bg-slate-100 font-semibold">Batal</a>
            <button type="submit" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full px-6 py-2.5 shadow-lg shadow-emerald-200">
                <span class="material-symbols-outlined text-[18px]">save</span>
                Simpan Gejala
            </button>
        </div>
    </form>
</main>
</body>
</html>
