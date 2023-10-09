<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$base = 'szyna_project';

$connect = mysqli_connect($host, $user, $pass, $base);


if(!$connect){
    echo "Brak połączenia z bazą!";
    exit();
}

?>