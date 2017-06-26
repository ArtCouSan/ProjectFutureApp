<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="foundation/css/foundation.css">
    </head>
    <body>
        <div class = "top-bar">
            <ul class="dropdown menu">
                <li class="menu-text">Educando</li>
                <li><a href="index.html"  style="color: black">Tela de login</a></li>
            </ul>
        </div>
        <br />
        <form action="" >
            <div class="row">
                <div class="large-12 columns">
                    <label>* Nome Completo
                        <input type="text" name="nome" maxlength="50" placeholder="Digite seu nome" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <label>* CPF
                        <input type="text" name="cpf" maxlength="14" placeholder="Digite seu CPF sem pontuação" required />
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Sexo
                        <select name="sexo" required>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="O">Outros</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Data de Nascimento
                        <input name="data_nasc" type="date"  required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-6 columns">
                    <label>* Estado
                        <select name="estado" required>
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
                        <input placeholder="Digite a cidade" name="cidade" maxlength="50" type="text" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>* Senha - minimo 8 caracteres
                        <input placeholder="Digite a senha para acesso" name="senha" maxlength="50" type="password" required />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <button type="submit" class="button success">Cadastrar-se</button>
                </div>
            </div>
        </form>
    </body>
</html>
