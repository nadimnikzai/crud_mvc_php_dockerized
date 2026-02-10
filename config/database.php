<?php
// config/database.php

$servername = "db";        // <-- تغییر مهم: به جای localhost باید بنویسی db
$dbname = "test-new1";
$username = "root";
$password = "root"; // همون پسوردی که تو فایل docker-compose نوشتیم

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("خطا در اتصال به داکر: " . $e->getMessage());
}
?>