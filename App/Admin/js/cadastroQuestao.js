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
 * Cadastra via xmlhtttp a questao, chamando os campos e enviando para a classe de servico
 * @returns {undefined}
 */
function cadastra() {
    var te = document.getElementById("tema").value;
    var sb = document.getElementById("sub_tema").value;
    var nq = document.getElementById("numero_q").value;
    var ba = document.getElementById("banca").value;
    var ve = document.getElementById("versao").value;
    var dt = document.getElementById("data").value;
    var df = document.getElementById("dificuldade").value;
    var al = document.getElementById("alternativa").value;
    var di = document.getElementById("dica").value;
    var en = document.getElementById("enunciado").value;
    var al_a = document.getElementById("alternativa_a").value;
    var al_b = document.getElementById("alternativa_b").value;
    var al_c = document.getElementById("alternativa_c").value;
    var al_d = document.getElementById("alternativa_d").value;
    var al_e = document.getElementById("alternativa_e").value;
    if (verificaCampos(te, sb, nq, ba, ve, dt, df, al, di, en, al_a, al_b, al_c, al_d, al_e)) {
        var url = "../../Controller/ServicosQuestoes.php?funcao=cadastrarNovaQuestao&" +
                "tema=" + te + "&" +
                "sub_tema=" + sb + "&" +
                "numero_q=" + nq + "&" +
                "banca=" + ba + "&" +
                "versao=" + ve + "&" +
                "data=" + dt + "&" +
                "dificuldade=" + df + "&" +
                "alternativa=" + al + "&" +
                "dica=" + di + "&" +
                "enunciado=" + en + "&" +
                "alternativa_a=" + al_a + "&" +
                "alternativa_b=" + al_b + "&" +
                "alternativa_c=" + al_c + "&" +
                "alternativa_d=" + al_d + "&" +
                "alternativa_e=" + al_e;
        request.open("GET", url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        request.onreadystatechange = confirma;
        request.send();
    }
}

/**
 * Verifica preenchimento dos campos obrigatorios
 * @param {type} tema
 * @param {type} sub_tema
 * @param {type} numero_q
 * @param {type} banca
 * @param {type} versao
 * @param {type} data
 * @param {type} dificuldade
 * @param {type} alternativa
 * @param {type} dica
 * @param {type} enunciado
 * @param {type} al_a
 * @param {type} al_b
 * @param {type} al_c
 * @param {type} al_d
 * @param {type} al_e
 * @returns {Boolean}
 */
function verificaCampos(tema, sub_tema, numero_q, banca, versao, data, dificuldade, alternativa, dica
        , enunciado, al_a, al_b, al_c, al_d, al_e) {

    var cont = 0;

    if (tema == '') {
        cont++;
        pintaBordaCampoCombo("tema");
    } else {
        tiraBordaCampoCombo("tema");
    }

    if (sub_tema == '') {
        cont++;
        pintaBordaCampoCombo("sub_tema");
    } else {
        tiraBordaCampoCombo("sub_tema");
    }

    if (numero_q == 0) {
        cont++;
        pintaBordaCampo("numero_q");
    } else {
        tiraBordaCampo("numero_q");
    }

    if (banca == '') {
        cont++;
        pintaBordaCampoCombo("banca");
    } else {
        tiraBordaCampoCombo("banca");
    }

    if (versao == '') {
        cont++;
        pintaBordaCampoCombo("versao");
    } else {
        tiraBordaCampoCombo("versao");
    }

    if (data == '') {
        cont++;
        pintaBordaCampo("data");
    } else {
        tiraBordaCampoCombo("data");
    }

    if (dificuldade == '') {
        cont++;
        pintaBordaCampoCombo("dificuldade");
    } else {
        tiraBordaCampoCombo("dificuldade");
    }

    if (alternativa == '') {
        cont++;
        pintaBordaCampoCombo("alternativa");
    } else {
        tiraBordaCampoCombo("alternativa");
    }

    if (dica.trim().length == 0) {
        cont++;
        pintaBordaCampo("dica");
    } else {
        tiraBordaCampo("dica");
    }

    if (enunciado.trim().length == 0) {
        cont++;
        pintaBordaCampo("enunciado");
    } else {
        tiraBordaCampo("enunciado");
    }

    if (al_a.trim().length == 0) {
        cont++;
        pintaBordaCampo("alternativa_a");
    } else {
        tiraBordaCampo("alternativa_a");
    }

    if (al_b.trim().length == 0) {
        cont++;
        pintaBordaCampo("alternativa_b");
    } else {
        tiraBordaCampo("alternativa_b");
    }

    if (al_c.trim().length == 0) {
        cont++;
        pintaBordaCampo("alternativa_c");
    } else {
        tiraBordaCampo("alternativa_c");
    }

    if (al_d.trim().length == 0) {
        cont++;
        pintaBordaCampo("alternativa_d");
    } else {
        tiraBordaCampo("alternativa_d");
    }

    if (al_e.trim().length == 0) {
        cont++;
        pintaBordaCampo("alternativa_e");
    } else {
        tiraBordaCampo("alternativa_e");
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
 * Apresenta mensagem na tela de cadastro concluido
 * @returns {undefined}
 */
function confirma() {
    if (request.readyState == 4) {
        alert("Cadastrado");
    }
}
