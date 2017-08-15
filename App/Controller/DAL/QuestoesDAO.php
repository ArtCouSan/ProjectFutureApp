<?php

class QuestaoDAO {

    /**
     * Cadastra nova questão
     */
    public function cadastrarQuestao($id_prova, $enunciado, $tema, $sub_tema, $dificuldade, $alternativa, $dica, $numero_q, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Questoes(
            Id_prova,
            Enunciado, 
            Tema, 
            Sub_Tema, 
            Dificuldade, 
            Resposta, 
            Dica, 
            Numero_q,
            Alternativa_a, 
            Alternativa_b, 
            Alternativa_c, 
            Alternativa_d, 
            Alternativa_e) 
            VALUES(
        '$id_prova' ,
        '$enunciado' ,
        '$tema' ,
        '$sub_tema' ,
        '$dificuldade' ,
        '$alternativa' ,
        '$dica' ,
        '$numero_q',
        '$alternativa_a' ,
        '$alternativa_b' ,
        '$alternativa_c' ,
        '$alternativa_d' ,
        '$alternativa_e')";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
    }

    /**
     * Cadastra nova prova
     */
    public function cadastrarProva($id, $banca, $data, $versao) {

        include 'BancoDeDados.php';

        $sql = "INSERT INTO Prova(
            Id_prova,
            Banca,
            Dt_Prova, 
            Versao) VALUES( +
        '$id',
        '$banca',
        '$data' ,
        '$versao' )";

        $rs = mysqli_query($conmysql, $sql);

        mysqli_close($conmysql);
    }

    /**
     * Consultar todas as provas
     */
    public function consultarBancaProvas($banca) {

        include 'BancoDeDados.php';

        $sql = "SELECT * FROM Prova WHERE Banca = '$banca'";

        $rs = mysqli_query($conmysql, $sql);

        if (mysqli_num_rows($rs) > 0) {

            $resultados = array();

            while ($dado = mysql_fetch_assoc($rs)) {

                $resultados[] = $dado;
            }

            mysqli_close($conmysql);

            return $resultados;
            
        } else {
            
            return false;
            
        }
    }

}
