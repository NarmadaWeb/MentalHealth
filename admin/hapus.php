<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /admin/index.php');
    exit();
}

$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'ID tidak valid.'];
    header('Location: /admin/index.php');
    exit();
}

$conn = db();
$stmt = $conn->prepare('DELETE FROM gejala WHERE id = ?');
$stmt->bind_param('i', $id);
$ok = $stmt->execute();
$affected = $stmt->affected_rows;
$stmt->close();

if ($ok && $affected > 0) {
    $_SESSION['flash'] = ['type' => 'success', 'message' => 'Gejala berhasil dihapus.'];
} elseif ($ok) {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Gejala tidak ditemukan.'];
} else {
    $_SESSION['flash'] = ['type' => 'error', 'message' => 'Gagal menghapus gejala.'];
}

header('Location: /admin/index.php');
exit();
