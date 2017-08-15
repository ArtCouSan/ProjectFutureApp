<?php

// Executa um dos serviços.
if (isset($_GET['funcao'])) {
    $_GET['funcao']();
}

function consultarProvaBanca($banca) {
    
    $banca = $_GET["insituicao"];

    include './DAL/QuestoesDAO.php';

    $lista = new QuestaoDAO();

    $lista->consultarBancaProvas($banca);

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

    if (validarDados($tema, $sub_tema, $numero_q, $banca, $versao, $data, $dificuldade, $alternativa, $dica, $enunciado, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e)) {

        include './DAL/QuestoesDAO.php';

        $id = 0;

        if ($banca == 'Enem') {

            $id = 1;
        } else if ($banca == 'Fuvest') {

            $id = 2;
        } else {

            $id = 3;
        }

        $user = new QuestaoDAO();

        $user->cadastrarProva($id, $banca, $data, $versao);


        $user->cadastrarQuestao($id, $enunciado, $tema, $sub_tema, $dificuldade, $alternativa, $dica, $numero_q, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e);
    } else {

        echo "Dados Invalidos no Cadastro";
    }
}

function validarDados($tema, $sub_tema, $numero_q, $banca, $versao, $data, $dificuldade, $alternativa, $dica, $enunciado, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e) {

    $cont = 0;

    if (empty($tema)) {
        $cont++;
    }

    if (empty($sub_tema)) {
        $cont++;
    }

    if (empty($numero_q)) {
        $cont++;
    }

    if (empty($banca)) {
        $cont++;
    }

    if (empty($versao)) {
        $cont++;
    }

    if (empty($data)) {
        $cont++;
    }

    if (empty($dificuldade)) {
        $cont++;
    }

    if (empty($alternativa)) {
        $cont++;
    }

    if (empty($dica)) {
        $cont++;
    }

    if (empty($enunciado)) {
        $cont++;
    }

    if (empty($alternativa_a)) {
        $cont++;
    }

    if (empty($alternativa_b)) {
        $cont++;
    }

    if (empty($alternativa_c)) {
        $cont++;
    }

    if (empty($alternativa_d)) {
        $cont++;
    }

    if (empty($alternativa_e)) {
        $cont++;
    }

    if ($cont > 0) {

        return false;
    } else {

        return true;
    }
}
