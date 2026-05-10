<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = ltrim($path, '/');
if ($path == '') {
    include 'index.php';
} elseif (file_exists($path . '.php')) {
    include $path . '.php';
} elseif (file_exists($path)) {
    return false; // serve the requested resource as-is
} else {
    http_response_code(404);
    echo "404 Not Found";
}
