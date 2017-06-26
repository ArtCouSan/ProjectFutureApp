function mascara(t, mask) {
    var i = t.value.length;
    var saida = mask.substring(1, 0);
    var texto = mask.substring(i);
    if (texto.substring(0, 1) != saida) {
        t.value += texto.substring(0, 1);
    }
}

function PermiteNumeros(){
    var tecla = window.event.keyCode;
    tecla = String.fromCharCode(tecla);
    if (!((tecla >= "0") && (tecla <= "9")))
    {
        window.event.keyCode = 0;
    }
}

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

var request = getXmlHttp();

function cadastra() {
    var nm = document.getElementById("nome").value;
    var se = document.getElementById("senha").value;
    var cpf = document.getElementById("cpf").value;
    var sx = document.getElementById("sexo").value;
    var dt = document.getElementById("dt_nasc").value;
    var es = document.getElementById("estado").value;
    var cd = document.getElementById("cidade").value;
    if (verificaCampos(nm, se, cpf, sx, dt, es, cd)) {
        var url = "ServicosUsuario.php";
        request.open("POST", url, true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        request.onreadystatechange = confirma;
        request.send("nome=" + nm + "&senha=" + se + "&cpf=" + cpf + "&sexo=" + sx + "&data_nasc=" + dt + "&cidade=" + cd + "&estado=" + es);
    }

}

function verificaCampos(nm, se, cpf, sx, dt, es, cd) {

    for (var i = 0; i < cpf.length; i++) {
        if (cpf.charAt(i) == " ") {
            return false;
        }
    }

    if (nm.toString().trim().length == 0) {
        return false;
    } else if (se.toString().trim().length == 0) {
        return false;
    } else if (validaCPF(cpf)) {
        return false;
    } else if (sx == "S") {
        return false;
    } else if (dt == "") {
        return false;
    } else if (cd.toString().trim().length == 0) {
        return false;
    } else if (es == "estado") {
        return false;
    } else {
        return true;
    }

}

function validaCPF(cpf) {

    var parte1 = cpf.substring(0, 3);

    var parte2 = cpf.substring(4, 7);

    var parte3 = cpf.substring(8, 11);

    var parte4 = cpf.substring(12, 14);

    var CPF = (parte1) + (parte2) + (parte3) + (parte4);

    var Soma;

    var Resto;

    Soma = 0;

    if (CPF == "00000000000") {
        return true;
    }

    for (i = 1; i <= 9; i++) {
        Soma = Soma + parseInt(CPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;
    }

    if ((Resto == 10) || (Resto == 11)) {
        Resto = 0;
    }

    if (Resto != parseInt(CPF.substring(9, 10))) {
        return true;
    }

    Soma = 0;

    for (i = 1; i <= 10; i++) {
        Soma = Soma + parseInt(CPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;
    }

    if ((Resto == 10) || (Resto == 11)) {
        Resto = 0;
    }

    if (Resto != parseInt(CPF.substring(10, 11))) {
        return true;
    }

    return false;

}

function confirma() {
    if (request.readyState == 4) {
        alert("Cadastrado");
    }
}
