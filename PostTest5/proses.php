<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "database_pv";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("Failed Connected into MySQL");
};
?>