<?php

class QuestaoDAO {

    /**
     * Cadastra nova instituição
     */
    function cadastrarInstituicao($banca) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Instituicao(
            banca) 
            VALUES( +
        '$banca' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
        
    }
    
    /**
     * Cadastra nova questão
     */
    function cadastrarQuestao($enunciado, $tema, $sub_tema, $dificuldade, $alternativa, $dica, $numero_q) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Questao(
            Enunciado, 
            Tema, 
            Sub_tema, 
            Dificuldade, 
            Alternativa, 
            Dica, 
            Numero_q) 
            VALUES( +
        '$enunciado' ,
        '$tema' ,
        '$sub_tema' ,
        '$dificuldade' ,
        '$alternativa' ,
        '$dica' ,
        '$numero_q' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
        
    }
    
    /**
     * Cadastra nova prova
     */
    function cadastrarProva($data, $versao) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Usuario(
            Data, 
            Versao) VALUES( +
        '$data' ,
        '$versao' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
        
    }
    
    /**
     * Cadastra nova alternativa
     */
    function cadastrarAlternativa($alternativa_a,$alternativa_b,$alternativa_c, $alternativa_d, $alternativa_e) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Alternativa(
            Alternativa_A, 
            Alternativa_B, 
            Alternativa_C, 
            Alternativa_D, 
            Alternativa_E) VALUES( +
        '$alternativa_a' ,
        '$alternativa_b' ,
        '$alternativa_c' ,
        '$alternativa_d' ,
        '$alternativa_e' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
        
    }

}
