<?php 
$host ="localhost";
$username ="root";
$password ="";
$dbname ="bazanaocene";

$polaczenie = @mysqli_connect('localhost', 'username', 'password','dbname');

if (mysqli_connect_errno())
  {
  echo "nie połączono z bazą" . mysqli_connect_error();
  }else{
      echo "połączono z bazą danych";
  }
?>