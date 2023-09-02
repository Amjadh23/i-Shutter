<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "arenabadminton";

$username = "";
$errors = array();

$con = mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
    die("Error ".mysqli_connect_error());
}

?>