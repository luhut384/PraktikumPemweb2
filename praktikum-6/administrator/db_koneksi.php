<?php 
 $host = 'localhost';
 $db = 'db_puskesmas';
 $user = 'root';
 $pass = '';
 $charset='utf8mb4';
 
 $dsn = "mysql:host=$host;dbname=$dbname=$db;charset=$charset";

 $opt = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_ECXEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_AMULATE_PREPARES=>false,
 ];
 
 $dbh = new PDO($dsn, $user, $pass)
?>