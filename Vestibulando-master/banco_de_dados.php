<?php

class BancoDeDados {

    function conectarBanco() {

        $conmysql = mysqli_connect("localhost:3306", "root", "root", "vestibulando");

        $db = mysqli_select_db($conmysql, "vestibulando");

        if ($conmysql && $db) {

            echo "Parabens!! A conexão ao banco de dados ocorreu normalmente!";
        } else {

            echo "Nao foi possivel conectar ao banco MYSQL";
        }
    }

    function desconectar() {

        $conmysql = mysqli_connect("localhost:3306", "root", "root", "vestibulando");

        mysqli_close($conmysql);
    }

    function getCon() {
        return $conmysql = mysqli_connect("localhost:3306", "root", "root", "vestibulando");
    }

}

?>
