<?php
session_start();
require_once __DIR__ . '/../db.php';

$error = null;

// Jika sudah login, langsung ke dashboard
if (!empty($_SESSION['admin_id'])) {
    header('Location: /admin/index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $error = 'Username dan password wajib diisi.';
    } else {
        $stmt = db()->prepare('SELECT id, username, password_hash FROM admin_users WHERE username = ? LIMIT 1');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $res = $stmt->get_result();
        $user = $res->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($password, $user['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['admin_id'] = (int)$user['id'];
            $_SESSION['admin_username'] = $user['username'];
            header('Location: /admin/index.php');
            exit();
        } else {
            $error = 'Username atau password salah.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Admin - MentalHealth</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Plus Jakarta Sans', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-emerald-50 via-sky-50 to-violet-50 flex items-center justify-center px-4 py-12">
    <div class="absolute top-0 left-0 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -z-10"></div>

    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <a href="/index.php" class="inline-flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-emerald-700" style="font-variation-settings: 'FILL' 1;">spa</span>
                <span class="font-display text-2xl font-bold text-emerald-700">MentalHealth</span>
            </a>
            <h1 class="font-display text-3xl font-bold text-slate-800">Login Admin</h1>
            <p class="text-slate-500 mt-2">Masuk untuk mengelola gejala</p>
        </div>

        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/60 p-8">
            <?php if ($error): ?>
                <div class="mb-5 flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-sm text-rose-700">
                    <span class="material-symbols-outlined mt-0.5">error</span>
                    <span><?php echo htmlspecialchars($error); ?></span>
                </div>
            <?php endif; ?>

            <form method="POST" action="/admin/login.php" class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Username</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">person</span>
                        <input type="text" name="username" required autofocus
                               value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>"
                               class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition"
                               placeholder="admin"/>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">lock</span>
                        <input type="password" name="password" required
                               class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition"
                               placeholder="••••••••"/>
                    </div>
                </div>

                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full px-6 py-3 transition-all shadow-lg shadow-emerald-200 hover:shadow-xl">
                    Masuk
                </button>
            </form>

            <p class="mt-6 text-center text-xs text-slate-500">
                <a href="/index.php" class="hover:text-emerald-700">← Kembali ke beranda</a>
            </p>
        </div>
    </div>
</body>
</html>
