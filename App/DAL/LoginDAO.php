<?php

class Login {

    public function login() {

        session_start();

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        include 'BancoDeDados.php';

        $sql = "SELECT * FROM `USUARIO` WHERE `CPF` = '$login' AND `Senha`= '$senha'";

        $result = mysqli_query($conmysql, $sql);

        if (mysqli_num_rows($result) > 0) {

            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            if($login != '437.931.688-24') {

                header('location:../View/pageMenuComPerfil.php');
                
            } else {
                
                header('location:../Admin/View/pagePerfil.php');
                
            }
            
        } else {

            unset($_SESSION['login']);
            unset($_SESSION['senha']);

            header('location:../../Public/index.php');
        }

        mysqli_close($conmysql);
    }

}
