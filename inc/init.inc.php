<?php
include 'inc/login.php';

$pdo = new PDO('mysql:host=localhost;dbname=' . $bddname, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));