<?php
session_start();

if ($_POST['login']){
    $result = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");

    if ($row = $result->fetch()){
        if (($_POST['password']) == $row['password']){
            $_SESSION['username'] = $_POST['login'];
            $_SESSION['id_auth_user'] = $row['id'];
            $_SESSION['user_type'] = $row['user_type'];
        }
        else{
            $message = 'Неверный пароль';
        }
    }
    else{
        $message = 'Неверный логин';
    }

}

if ($_GET['logout']){
    session_unset();
}
