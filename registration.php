<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');
if ($_POST['login'] && $_POST['password']){
    switch ($_POST['role']) {
        case 'Host':
            $role = 2;
            break;
        case 'Participant':
            $role = 3;
            break;
    }
    $result = $conn->query("INSERT INTO users(firstName, lastName, login, password, role)
                VALUES ('".$_POST['firstName']."','".$_POST['lastName']."', '".$_POST['login']."',
                '".$_POST['password']."', '".$role."')");
}
require('components/registrationComponent.php');


