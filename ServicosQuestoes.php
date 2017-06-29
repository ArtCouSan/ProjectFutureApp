<?php

// Executa um dos serviços.
if (isset($_POST['funcao'])) {
    $_POST['funcao']();
}

/**
 * Cadastra nova questão
 */
function cadastrarNovaQuestao() {

    $nm = addslashes(trim($_GET["nome"]));

    include './BancoDeDados.php';

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
