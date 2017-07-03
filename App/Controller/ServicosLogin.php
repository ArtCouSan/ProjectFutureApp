<?php

$loginV = $_POST['login'];
$senhaV = $_POST['senha'];

if (!empty($loginV) && !empty($senhaV)) {

    include './DAL/LoginDAO.php';

    $classLog = new Login;

    $classLog->login();
    
} else {

    header('location:../../Public/index.php');
    
}

