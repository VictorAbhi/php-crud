<?php

session_start();



if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password == 'admin123') {
        $_SESSION['username'] = $username;
        $_SESSION['is_login'] = true;
        header("Location:welcome.php");
    }else {
        $_SESSION['error'] = " invalid credentials";
        header("Location:index.php");
    }
}else {
    $_SESSION['error'] = "Invalid access";
    header("Location:index.php");
}
?>