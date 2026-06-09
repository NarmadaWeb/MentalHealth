<?php
// admin/auth.php
// Middleware untuk memastikan user sudah login sebagai admin.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['admin_id']) || empty($_SESSION['admin_username'])) {
    header('Location: /admin/login.php');
    exit();
}
