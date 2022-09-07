<?php
// Veritabanı bağlantısını yapıyoruz
$host = "localhost";
$dbname = "apos";
$user = "root";
$pass = "";


try{
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
}catch(PDOException $e){
    echo '<strong>Veritabanı Bağlantısı Başarısız Oldu</strong> : ' . $e->getMessage();
    exit;
}




?>
