<?php
$db = new mysqli('localhost', 'root', '', 'users');

if($db->connect_error) {
    die("Błąd połączenia: ". $db->connect_error); 
    exit();
}
