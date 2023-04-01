<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');


if ($_POST['date'] && $_POST['time_start'] && $_POST['time_end']){

    $_SESSION['id_auth_user'];
        $result = $conn->query("INSERT INTO slot(id_spec, day, time_start, time_end)
                VALUES ('" . $_SESSION['id_auth_user'] . "','" . $_POST['date'] . "', '" . $_POST['time_start'] . "',
                '" . $_POST['time_end'] . "')");

}
require('components/slotComponent.php');