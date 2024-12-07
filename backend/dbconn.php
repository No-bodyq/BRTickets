<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'busticket');
define('DB_USER', 'root');
define('DB_PASS', '5552471');


try {
    
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
    
    
    $GLOBALS['pdo'] = $pdo;
    
} catch(PDOException $e) {
    
    die("Connection failed: " . $e->getMessage());
}
