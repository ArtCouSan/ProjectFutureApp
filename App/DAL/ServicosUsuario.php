<?php

// Executa um dos serviços.
if (isset($_POST['funcao'])) {
    $_POST['funcao']();
}

// Valida preenchimento dos campos e verifica veracidade do cpf
function validarDadosUsuario($nm, $se, $cpf, $sx, $dt, $cd, $es) {
    if (empty($nm)) {
        return false;
    } else if (empty($se)) {
        return false;
    } else if (validaCPF($cpf)) {
        return false;
    } else if ($sx == 'O') {
        return false;
    } else if (empty($dt)) {
        return false;
    } else if (empty($cd)) {
        return false;
    } else if ($es == 'estado') {
        return false;
    } else {
        return true;
    }
}

/**
 * Verifica se cpf é verdadeiro
 * @param type $cpf
 * @return boolean
 */
function validaCPF($cpf) {
    if (empty($cpf)) {
        return true;
    }
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    if (strlen($cpf) != 11) {
        return true;
    } else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
        return true;
    } else {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return true;
            }
        }
        return false;
    }
}

/**
 * Cadastra novo usuario
 */
function cadastrarNovoUsuario() {

    $nm = addslashes(trim($_POST["nome"]));
    $se = addslashes(trim($_POST["senha"]));
    $cpf = addslashes(trim($_POST["cpf"]));
    $sx = addslashes(trim($_POST["sexo"]));
    $dt = addslashes(trim($_POST["dt_nasc"]));
    $cd = addslashes(trim($_POST["cidade"]));
    $es = addslashes(trim($_POST["estado"]));

    if (validarDadosUsuario($nm, $se, $cpf, $sx, $dt, $cd, $es)) {

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
        
    } else {

        echo "Dados Invalidos no Cadastro";
        
    }
    
}
