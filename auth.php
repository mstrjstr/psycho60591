<?php
session_start();

if ($_POST['login']){
    $result = $conn->query("SELECT * FROM client WHERE login='".$_POST['login']."'");

    if ($row = $result->fetch()){
        if (($_POST['password']) == $row['password']){
            $_SESSION['username'] = $_POST['login'];
            $_SESSION['id_auth_user'] = $row['id'];
            $_SESSION['user_type'] = 3;
            $_SESSION['user_name'] = $row['nme'];
        }
        else{
            $message = 'Неверный пароль';
        }
    }
    else{
        $message = 'Неверный логин';
    }

}

if ($_POST['login']){
    $result = $conn->query("SELECT * FROM specialist WHERE login='".$_POST['login']."'");

    if ($row = $result->fetch()){
        if (($_POST['password']) == $row['password']){
            $_SESSION['username'] = $_POST['login'];
            $_SESSION['id_auth_user'] = $row['id'];
            $_SESSION['user_type'] = 2;
            $_SESSION['user_name'] = $row['nme'];
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
