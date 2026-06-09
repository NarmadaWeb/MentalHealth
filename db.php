<?php
// db.php
// Koneksi database MySQL (container podman "mysql", user root, password root)

define('DB_HOST', '127.0.0.1');
define('DB_PORT', 3306);
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mentalhealth');

function db() {
    static $conn = null;
    if ($conn === null) {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        if ($conn->connect_errno) {
            http_response_code(500);
            die('Koneksi database gagal: ' . htmlspecialchars($conn->connect_error));
        }
        $conn->set_charset('utf8mb4');
    }
    return $conn;
}
