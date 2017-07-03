<?php

class UsuarioDAO {

    /**
     * Cadastra novo usuario
     */
    public function cadastrar($nm, $sx, $cpf, $dt, $cd, $es, $se) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Usuario(Nome, Sexo, CPF, Dt_Nasc, Cidade, Estado, Senha) VALUES( +
        '$nm' ,  
        '$sx' ,  
        '$cpf' ,  
        '$dt' ,  
        '$cd' ,  
        '$es' ,  
        '$se' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
    }

}
