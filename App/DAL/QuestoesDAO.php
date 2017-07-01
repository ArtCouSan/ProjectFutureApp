<?php

class QuestaoDAO {

    /**
     * Cadastra nova instituição
     */
    function cadastrarInstituicao($banca) {

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
    
    /**
     * Cadastra nova questão
     */
    function cadastrarQuestao($enunciado, $tema, $sub_tema, $dificuldade, $alternativa, $dica, $numero_q) {

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
    
    /**
     * Cadastra nova prova
     */
    function cadastrarProva($data, $versao) {

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
    
    /**
     * Cadastra nova alternativa
     */
    function cadastrarAlternativa($alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e) {

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
