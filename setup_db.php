<?php
// setup_db.php
// Jalankan sekali untuk inisialisasi database & tabel + seed data awal.
// Akses via browser: /setup_db

require_once __DIR__ . '/db.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, '', DB_PORT);
if ($conn->connect_errno) {
    die('Koneksi gagal: ' . htmlspecialchars($conn->connect_error));
}
$conn->set_charset('utf8mb4');

// 1) Buat database jika belum ada
$dbName = DB_NAME;
$createDb = "CREATE DATABASE IF NOT EXISTS `{$dbName}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (!$conn->query($createDb)) {
    die('Gagal membuat database: ' . htmlspecialchars($conn->error));
}
$conn->select_db($dbName);

// Drop old datasets table if it exists
$conn->query("DROP TABLE IF EXISTS `datasets`");

// 2) Buat tabel kategori_gejala
$createTableKategori = "
CREATE TABLE IF NOT EXISTS `kategori_gejala` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nama_kategori` VARCHAR(50) NOT NULL UNIQUE,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
";
if (!$conn->query($createTableKategori)) {
    die('Gagal membuat tabel kategori_gejala: ' . htmlspecialchars($conn->error));
}

// 3) Buat tabel gejala
$createTableGejala = "
CREATE TABLE IF NOT EXISTS `gejala` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `kategori_id` INT NOT NULL,
    `question_text` TEXT NOT NULL,
    `sort_order` INT NOT NULL DEFAULT 0,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_sort` (`sort_order`),
    FOREIGN KEY (`kategori_id`) REFERENCES `kategori_gejala`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
";
if (!$conn->query($createTableGejala)) {
    die('Gagal membuat tabel gejala: ' . htmlspecialchars($conn->error));
}

// 4) Buat tabel admin_users
$createAdmin = "
CREATE TABLE IF NOT EXISTS `admin_users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(64) NOT NULL UNIQUE,
    `password_hash` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
";
if (!$conn->query($createAdmin)) {
    die('Gagal membuat tabel admin_users: ' . htmlspecialchars($conn->error));
}

// 5) Seed admin default jika belum ada
$checkAdmin = $conn->query("SELECT COUNT(*) AS c FROM admin_users");
$row = $checkAdmin->fetch_assoc();
if ((int)$row['c'] === 0) {
    $username = 'admin';
    $password = 'admin123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO admin_users (username, password_hash) VALUES (?, ?)");
    $stmt->bind_param('ss', $username, $hash);
    $stmt->execute();
    $stmt->close();
    $seedAdminMsg = "Akun admin default dibuat. Username: <code>{$username}</code> &middot; Password: <code>{$password}</code> (silakan ganti setelah login).";
} else {
    $seedAdminMsg = 'Akun admin sudah ada, dilewati.';
}

// 6) Seed kategori_gejala jika kosong
$checkKat = $conn->query("SELECT COUNT(*) AS c FROM kategori_gejala");
$rowKat = $checkKat->fetch_assoc();
if ((int)$rowKat['c'] === 0) {
    $kategori_list = ['depression', 'anxiety', 'stress'];
    $stmtKat = $conn->prepare("INSERT INTO kategori_gejala (nama_kategori) VALUES (?)");
    foreach ($kategori_list as $kat) {
        $stmtKat->bind_param('s', $kat);
        $stmtKat->execute();
    }
    $stmtKat->close();
}

// Ambil map nama_kategori -> id
$kategoriMap = [];
$resKat = $conn->query("SELECT id, nama_kategori FROM kategori_gejala");
while ($r = $resKat->fetch_assoc()) {
    $kategoriMap[$r['nama_kategori']] = (int)$r['id'];
}

// 7) Seed 21 pertanyaan DASS-21 jika tabel gejala kosong
$checkDs = $conn->query("SELECT COUNT(*) AS c FROM gejala");
$row = $checkDs->fetch_assoc();
if ((int)$row['c'] === 0) {
    $seed = [
        ['Saya merasa sulit untuk menenangkan diri.', 'stress'],
        ['Saya menyadari mulut saya terasa kering.', 'anxiety'],
        ['Saya sama sekali tidak dapat merasakan perasaan positif.', 'depression'],
        ['Saya mengalami kesulitan bernapas padahal tidak sedang melakukan aktivitas fisik.', 'anxiety'],
        ['Saya merasa kesulitan untuk berinisiatif melakukan sesuatu.', 'depression'],
        ['Saya cenderung bereaksi berlebihan terhadap suatu situasi.', 'stress'],
        ['Saya pernah mengalami gemetar (misal: di tangan).', 'anxiety'],
        ['Saya merasa telah menghabiskan banyak energi karena merasa cemas.', 'stress'],
        ['Saya merasa khawatir dengan situasi dimana saya mungkin menjadi panik dan mempermalukan diri sendiri.', 'anxiety'],
        ['Saya merasa tidak ada hal yang dapat saya harapkan.', 'depression'],
        ['Saya menyadari bahwa saya mudah merasa gelisah.', 'stress'],
        ['Saya merasa sulit untuk bersantai.', 'stress'],
        ['Saya merasa sedih dan tertekan.', 'depression'],
        ['Saya merasa tidak sabar dengan apapun yang menghalangi hal yang sedang saya lakukan.', 'stress'],
        ['Saya merasa hampir panik.', 'anxiety'],
        ['Saya tidak dapat merasa antusias terhadap apapun.', 'depression'],
        ['Saya merasa bahwa saya tidak berharga.', 'depression'],
        ['Saya merasa mudah tersinggung.', 'stress'],
        ['Saya menyadari perubahan detak jantung padahal tidak sedang melakukan aktivitas fisik.', 'anxiety'],
        ['Saya merasa takut tanpa alasan yang jelas.', 'anxiety'],
        ['Saya merasa hidup ini tidak berarti.', 'depression'],
    ];
    $stmt = $conn->prepare("INSERT INTO gejala (question_text, kategori_id, sort_order) VALUES (?, ?, ?)");
    $i = 1;
    foreach ($seed as $q) {
        $katId = $kategoriMap[$q[1]];
        $stmt->bind_param('sii', $q[0], $katId, $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();
    $seedDsMsg = '21 pertanyaan DASS-21 berhasil di-seed.';
} else {
    $seedDsMsg = 'Tabel gejala sudah berisi data, seed dilewati.';
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <title>Setup Database - MentalHealth</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-lg w-full bg-white rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-emerald-700 mb-4">Setup Database Berhasil</h1>
        <ul class="space-y-2 text-slate-700">
            <li>Database <code><?php echo htmlspecialchars($dbName); ?></code> siap.</li>
            <li>Tabel <code>gejala</code>, <code>kategori_gejala</code> & <code>admin_users</code> siap.</li>
            <li><?php echo $seedDsMsg; ?></li>
            <li><?php echo $seedAdminMsg; ?></li>
        </ul>
        <div class="mt-6 flex gap-3">
            <a href="/admin/index.php" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full px-6 py-3">Masuk Admin</a>
            <a href="/index.php" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-full px-6 py-3">Beranda</a>
        </div>
        <p class="mt-6 text-xs text-slate-500">Untuk keamanan, hapus file <code>setup_db.php</code> setelah setup berhasil.</p>
    </div>
</body>
</html>
