<?php 
$host ="localhost";
$username ="root";
$password ="";
$dbname ="bazanaocene";
$port ="3306";

$polaczenie = @new Mysqli($host,$username,$password,$dbname,$port);

if (mysqli_connect_errno()!=0){
    echo("błąd połączenia do bazy danych");
} else{
    echo("połączono do bazy danych");
}
?>