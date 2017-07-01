<?php

// Executa um dos serviços.
if (isset($_GET['funcao'])) {
    $_GET['funcao']();
}

/**
 * Cadastra nova questão
 */
function cadastrarNovaQuestao() {

    $tema = $_GET["tema"];
    $sub_tema = $_GET["sub_tema"];
    $numero_q = $_GET["numero_q"];
    $banca = $_GET["banca"];
    $versao = $_GET["versao"];
    $data = $_GET["data"];
    $dificuldade = $_GET["dificuldade"];
    $alternativa = $_GET["alternativa"];
    $dica = addslashes(trim($_GET["dica"]));
    $enunciado = addslashes(trim($_GET["enunciado"]));
    $alternativa_a = addslashes(trim($_GET["alternativa_a"]));
    $alternativa_b = addslashes(trim($_GET["alternativa_b"]));
    $alternativa_c = addslashes(trim($_GET["alternativa_c"]));
    $alternativa_d = addslashes(trim($_GET["alternativa_d"]));
    $alternativa_e = addslashes(trim($_GET["alternativa_e"]));

    if (validarDados($nm, $se, $cpf, $sx, $dt, $cd, $es)) {

        include('../DAL/QuestoesDAO.php');

        $user = new QuestoesDAO();

        $user->cadastrarInstituicao($banca);

        $user->cadastrarProva($data, $versao);

        $user->cadastrarQuestao($enunciado, $tema, $sub_tema, $dificuldade, $alternativa, $dica, $numero_q);

        $user->cadastrarAlternativa($alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e);
    
        
    } else {

        echo "Dados Invalidos no Cadastro";
    }
    
}
