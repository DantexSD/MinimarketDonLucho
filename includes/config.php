<?php
$host     = "localhost";
$port     = 3306;
$socket   = "";
$user     = "root";
$password = "";
$dbname   = "store";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('No se puede conectar a la base de datos' . mysqli_connect_error());

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>