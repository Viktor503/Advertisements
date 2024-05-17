<?php
    $dsn = "mysql:host=localhost;dbname=advertisements";
    $username = "root";
    try{
        $pdo = new PDO($dsn, $username);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }