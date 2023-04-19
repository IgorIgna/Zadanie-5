<?php
session_start();
error_reporting(1);
if($_SESSION['logged']) { 
    echo "Witamy na stronie ".$_SESSION['username'];
} else {
    include "login.php";
}
?>
