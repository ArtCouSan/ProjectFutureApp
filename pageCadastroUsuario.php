<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="css/css.css">
        <link rel="stylesheet" type="text/css"  href="foundation/css/foundation.css">
        <script type="text/javascript" src="js/cadastroUsuario.js"></script>
    </head>
    <body class="cadastro">
        <div class = "top-bar">
            <ul class="dropdown menu">
                <li class="menu-text">Educando</li>
                <li><a href="index.php"  style="color: black">Tela de login</a></li>
            </ul>
        </div>
        <br />
        <form >
            <div class="row">
                <div class="large-12 columns">
                    <label>* Nome Completo
                        <input type="text" id="nome" name="nome" maxlength="50" placeholder="Digite seu nome" autocomplete="off" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <label>* CPF - Login
                        <input id="cpf" onkeypress="mascara(this, '###.###.###-##')" autocomplete="off" type="text" name="cpf" maxlength="14" placeholder="Digite seu CPF sem pontuação" required />
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Sexo
                        <select name="sexo" id="sexo" required>
                            <option value="S">Selecione o Sexo</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outros</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Data de Nascimento
                        <input name="data_nasc" id="dt_nasc" type="date" autocomplete="off"  required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>* Estado
                        <select name="estado" id="estado" autocomplete="off" required>
                            <option value="estado">Selecione o Estado</option>
                            <option value="ac">Acre</option>
                            <option value="al">Alagoas</option>
                            <option value="am">Amazonas</option>
                            <option value="ap">Amapá</option>
                            <option value="ba">Bahia</option>
                            <option value="ce">Ceará</option>
                            <option value="df">Distrito Federal</option>
                            <option value="es">Espírito Santo</option>
                            <option value="go">Goiás</option>
                            <option value="ma">Maranhão</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="pa">Pará</option>
                            <option value="pb">Paraíba</option>
                            <option value="pr">Paraná</option>
                            <option value="pe">Pernambuco</option>
                            <option value="pi">Piauí</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="ro">Rondônia</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="rr">Roraima</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="se">Sergipe</option>
                            <option value="sp">São Paulo</option>
                            <option value="to">Tocantins</option>
                        </select>
                    </label>
                </div>
                <div class="large-6 columns">
                    <label>* Cidade
                        <input placeholder="Digite a cidade" id="cidade" autocomplete="off" name="cidade" maxlength="50" type="text" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>* Senha - minimo 8 caracteres
                        <input minlength="8" autocomplete="off" id="senha" placeholder="Digite a senha para acesso" name="senha" maxlength="50" type="password" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <button type="submit" onclick="cadastra()" class="button success large-12">Cadastrar-se</button>
                </div>
            </div>
        </form>
    </body>
</html>
