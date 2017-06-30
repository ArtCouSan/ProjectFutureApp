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
    var sb = document.getElementById("sub-tema").value;
    var nq = document.getElementById("numero_q").value;
    var ba = document.getElementById("banca").value;
    var ve = document.getElementById("versao").value;
    var dt = document.getElementById("data").value;
    var df = document.getElementById("dificuldade").value;
    var al = document.getElementById("alternativa").value;
    var di = document.getElementById("dica").value;
    var en = document.getElementById("enunciado").value;
    var al_a = document.getElementById("alterativa_a").value;
    var al_b = document.getElementById("alterativa_b").value;
    var al_c = document.getElementById("alterativa_c").value;
    var al_d = document.getElementById("alterativa_d").value;
    var al_e = document.getElementById("alterativa_e").value;
    if (verificaCampos(nm, se, cpf, sx, dt, es, cd)) {
//        var url = "ServicosUsuario.php";
//        request.open("POST", url, true);
//        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//        request.onreadystatechange = confirma;
//        request.send("funcao=cadastrarNovoUsuario&nome=" + nm + "&senha=" + se + "&cpf=" + cpf + "&sexo=" + sx + "&data_nasc=" + dt + "&cidade=" + cd + "&estado=" + es);
    }
}


