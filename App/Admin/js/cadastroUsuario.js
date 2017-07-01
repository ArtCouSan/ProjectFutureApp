/**
 * Insere mascara em campos
 * @param {type} t
 * @param {type} mask
 * @returns {undefined}
 */
function mascara(t, mask) {
    var i = t.value.length;
    var saida = mask.substring(1, 0);
    var texto = mask.substring(i);
    if (texto.substring(0, 1) != saida) {
        t.value += texto.substring(0, 1);
    }
}

/**
 * Permite somente numeros no cpf
 * @returns {undefined}
 */
function PermiteNumeros() {
    var tecla = window.event.keyCode;
    tecla = String.fromCharCode(tecla);
    if (!((tecla >= "0") && (tecla <= "9")))
    {
        window.event.keyCode = 0;
    }
}

// Verifica navegado par xmlhhtp
function getXMLHttpRequest() {
    var xmlhttp;
    try {
        xmlhttp = new XMLHttpRequest();
    } catch (ee) {
        try {
            xmlhttp = new ActiveXObject("MSml2.XMLHTTP");
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false;
            }
        }
    }
    return xmlhttp;
}

// Variavel global no escopo para funções
var request = getXMLHttpRequest();

/**
 * Cadastra via xmlhtttp o cliente, chamando os campos e enviando para a classe de servico
 * @returns {undefined}
 */
function cadastra() {
    var nm = document.getElementById("nome").value;
    var se = document.getElementById("senha").value;
    var cpf = document.getElementById("cpf").value;
    var sx = document.getElementById("sexo").value;
    var dt = document.getElementById("dt_nasc").value;
    var es = document.getElementById("estado").value;
    var cd = document.getElementById("cidade").value;
    if (verificaCampos(nm, se, cpf, sx, dt, es, cd)) {
        var url = "../../Controller/ServicosUsuario.php";
        request.open("POST", url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        request.onreadystatechange = confirma;
        request.send("funcao=cadastrarNovoUsuario&nome=" + nm + "&senha=" + se + "&cpf=" + cpf + "&sexo=" + sx + "&data_nasc=" + dt + "&cidade=" + cd + "&estado=" + es);
    }
}

/**
 * Valida preenchimento dos campos e chama função de validação de campo do cpf
 * @param {type} nm
 * @param {type} se
 * @param {type} cpf
 * @param {type} sx
 * @param {type} dt
 * @param {type} es
 * @param {type} cd
 * @returns {Boolean}
 */
function verificaCampos(nm, se, cpf, sx, dt, es, cd) {

    var cont = 0, contCPF = 0;

    // Verifica preenchimento do cpf
    for (var i = 0; i < cpf.length; i++) {
        if (cpf.charAt(i) == null) {
            cont++;
            break;
        } else {
            contCPF++;
        }
    }

    // Verifica se preencheu nome
    if (nm.toString().trim().length == 0) {
        cont++;
        pintaBordaCampo("nome");
    } else {
        tiraBordaCampo("nome");
    }

    // Verifica se preencheu senha.
    if (se.toString().trim().length != 8) {
        cont++;
        pintaBordaCampo("senha");
    } else {
        tiraBordaCampo("senha");
    }

    // Verifica se preencheu cpf corretamente
    if (!validaCPF(cpf) && contCPF > 0) {
        tiraBordaCampo("cpf");
    } else {
        cont++;
        pintaBordaCampo("cpf");
    }

    // Verifica se preencheu sexo
    if (sx == 'S') {
        cont++;
        pintaBordaCampoCombo("sexo");
    } else {
        tiraBordaCampoCombo("sexo");
    }

    // Verifica se preencheu data
    if (dt == '') {
        cont++;
        pintaBordaCampo("dt_nasc");
    } else {
        tiraBordaCampo("dt_nasc");
    }

    // Verifica se preencheu cidade.
    if (cd.toString().trim().length == 0) {
        cont++;
        pintaBordaCampo("cidade");
    } else {
        tiraBordaCampo("cidade");
    }

    // Verifica se preencheu estado
    if (es == "estado") {
        cont++;
        pintaBordaCampoCombo("estado");
    } else {
        tiraBordaCampoCombo("estado");
    }

    // Retorna resultado da verificações
    if (cont > 0) {
        return false;
    }

}

// Pinta borda do elemento incorreto
function pintaBordaCampo(id) {
    var elemento = document.getElementById(id);
    elemento.className = "callout alert-callout-border alert";
}

// Pinta borda do elemento correto
function tiraBordaCampo(id) {
    var elemento = document.getElementById(id);
    elemento.className = "callout alert-callout-border success";
}

// Pinta borda dos elementos com combobox
function pintaBordaCampoCombo(id) {
    var elemento = document.getElementById(id);
    elemento.className = "alertComboBox";
}

// Pinta borda do elemento combo box correto
function tiraBordaCampoCombo(id) {
    var elemento = document.getElementById(id);
    elemento.className = "sucessComboBox";
}

/**
 * Função valida existencia de um cpf real
 * @param {type} cpf
 * @returns {Boolean}
 */
function validaCPF(cpf) {

    // Tira mascara do cpf
    var parte1 = cpf.substring(0, 3);
    var parte2 = cpf.substring(4, 7);
    var parte3 = cpf.substring(8, 11);
    var parte4 = cpf.substring(12, 14);
    var CPF = (parte1) + (parte2) + (parte3) + (parte4);

    // Realiza calculo
    var Soma;
    var Resto;
    Soma = 0;
    if (CPF == "00000000000")
        return false;
    for (i = 1; i <= 9; i++)
        Soma = Soma + parseInt(CPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
        Resto = 0;
    if (Resto != parseInt(CPF.substring(9, 10)))
        return false;
    Soma = 0;
    for (i = 1; i <= 10; i++)
        Soma = Soma + parseInt(CPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11))
        Resto = 0;
    if (Resto != parseInt(CPF.substring(10, 11)))
        return false;
    return true;
}

/**
 * Apresenta mensagem na tela de cadastro concluido
 * @returns {undefined}
 */
function confirma() {
    if (request.readyState == 4) {
        alert("Cadastrado");
    }
}
