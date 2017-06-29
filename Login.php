<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if (!empty($login) && !empty($senha)) {

    include './BancoDeDados.php';

    $sql = "SELECT * FROM `USUARIO` WHERE `CPF` = '$login' AND `Senha`= '$senha'";
    
    $result = mysqli_query($conmysql, $sql);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        
        header('location:menuComPerfil.php');
        
    } else {
        
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        
        header('location:index.php');
        
    }

    mysqli_close($conmysql);
    
} else {
    
    header('location:index.php');
    
}
