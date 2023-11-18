<?php
$host     = "127.0.0.1";
$port     = 3310;
$socket   = "MySQL";
$user     = "bunty";
$password = "@Bunty1990";
$dbname   = "lproject";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());

?>