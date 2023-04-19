<?php
$server='localhost';
$user='root';
$pass='';
$datab='users';
$db = new mysqli($server, $user, $pass, $datab);

if($db->connect_error) {
    die("Błąd połączenia: ". $db->connect_error); 
    exit();
}