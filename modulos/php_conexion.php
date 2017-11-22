<?php

$server   = "localhost";
$username = "cbidba";
$password = "cbik3y$$$";
$database = "consultorio";


$mysqli = @mysqli_connect($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
