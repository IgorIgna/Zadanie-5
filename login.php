<?php
include 'config.php';

if(!empty($_POST['Submit'])){
    $pass=hash('md5', $_POST['password']);

    $p = $db->prepare("SELECT username, password FROM users WHERE username=? AND password=?");
    $p->bind_param('ss', $_POST['username'], $_POST['password']);

    $p->execute();
    $p->store_result();
    if($p->num_rows>0) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['logged'] = TRUE;
        header("location: index.php");
    }
    else {
        header("Location: index.php?mess=error");
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie3</title>
</head>
<body>
    <form action="" method="post">
        <h3>Podaj Login:</h3> <input type="text" name="username">
        <br>

        <h3>Podaj Hasło:</h3> <input type="password" name="password">
        <br>

        <br>
        <input type="submit" value="Zaloguj" name="Submit">

    </form>
</body>
</html>
