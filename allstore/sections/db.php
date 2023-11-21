<?php
$servername = "localhost";
$username = "manav";
$password = "1234";
$dbname = "manav";

// Veritabanına bağlan
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // PDO hata modunu ayarla
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}
?>
