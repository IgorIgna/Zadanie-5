<?php
session_start();
if($_SESSION['logged']) { 
    echo "Witamy na stronie ".$_SESSION['username'];
} else {
    include "login.php";
}
?>