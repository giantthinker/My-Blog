<?php
require 'credentials.php';

try{
    $pdo = new PDO("mysql:host=localhost;dbname=blog", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";

} catch(PDOException $e){
    echo "could not connect to the db " . $e->getMessage(); 
}