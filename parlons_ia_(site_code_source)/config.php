<?php
// config.php

// Site settings
define('SITE_NAME', 'Conférence IA 2026');

// Database settings (from your host)
define('DB_HOST', 'database');        // IMPORTANT: not localhost
define('DB_NAME', 'parlons-ia');
define('DB_USER', 'parlons-ia');
define('DB_PASS', 'GXrCfk7aUyEz');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
