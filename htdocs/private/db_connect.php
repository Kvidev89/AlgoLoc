<?php

try {
    $mysqlPdo = new PDO('mysql:host=localhost; dbname=kvidev89', 'root', '');
    $mysqlPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
