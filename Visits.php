<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$Visits = $conn->query("SELECT * FROM Visit");
$clients = $conn->query("SELECT * FROM client");
$specialists = $conn->query("SELECT * FROM specialist");
$slots = $conn->query("SELECT * FROM slot");

require('components/VisitsList.php');