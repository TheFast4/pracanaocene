<?php
$mysql_host = 'localhost';
$port = '3306';
$username = 'root';
$password = '';
$database = 'bazanaocene';

try{
    $pdo = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database . ';port=' . $port . ";charset=utf8", $username, $password );
    echo('<p>połączono z bazą danych</p>');
}catch(PDOException $e){
    echo('nie połączono z bazą danych');
    die();
}
?>