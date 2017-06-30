<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css"  href="../../../Libs/css/css.css">
        <link rel="stylesheet" type="text/css"  href="../../../Libs/foundation/css/foundation.css">
        <script type="text/javascript" src="../js/cadastroQuestao.js"></script>
    </head>
    <body >
        <?php include "cabecalho.php" ?>
        <br />
        <form>
            <div class="row">
                <div class="large-4 columns">
                    <label>* Tema
                        <select name="tema" required>
                            <option value="se">Selecione o Tema</option>
                            <option value="bi">Biologia</option>
                            <option value="fi">Fisica</option>
                            <option value="qu">Química</option>
                            <option value="fl">Filosofia</option>
                            <option value="mt">Matematica</option>
                            <option value="po">Português</option>
                            <option value="in">Ingles</option>
                            <option value="es">Espanhol</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Sub-Temas
                        <select name="sub-tema" required>
                            <option value="se">Selecione o sub-tema</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Numero da questão
                        <input type="number" name="numero_q" min="0" onkeydown="return false" value="0" required/>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <label>* Instituição / Banca
                        <select name="banca" required>
                            <option value="se">Selecione a instituição</option>
                            <option value="enem">Enem</option>
                            <option value="fuvest">Fuvest</option>
                            <option value="etec">Etec</option>    
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Versão ou Cor
                        <select name="versao" required>
                            <option value="se">Selecione a cor</option>
                            <option value="amarelo">Amarelo</option>
                            <option value="azul">Azul</option>
                            <option value="cinza">Cinza</option>
                            <option value="rosa">Rosa</option>
                            <option value="branco">Branco</option>
                            <option value="todos">Todos</option>
                            <option value="sem">Sem</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Data de aplicação da prova
                        <input type="date" name="data" required/>
                    </label>
                </div> 
            </div>
            <div class="row">
                <div class="large-4 columns">
                    <label>* Dificuldade
                        <select name="dificuldade" required>
                            <option value="se">Selecione a dificuldade</option>
                            <option value="1">Facil</option>
                            <option value="2">Medio</option>
                            <option value="3">Dificil</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Resposta - Alternativa
                        <select name="alternativa" required>
                            <option value="se">Selecione a alternativa</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="e">E</option>
                        </select>
                    </label>
                </div>
                <div class="large-4 columns">
                    <label>* Dica
                        <input type="text" name="dica" placeholder="Digite uma dica :)" required/>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>* Enunciado
                        <textarea name="enunciado" placeholder="Digite o enunciado" required></textarea>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <label>* Alternativa A:
                        <textarea name="alternativa_a" placeholder="Digite o conteudo da alternativa" required></textarea>
                    </label>
                    <label>* Alternativa B:
                        <textarea name="alternativa_b" placeholder="Digite o conteudo da alternativa" required></textarea>
                    </label>
                    <label>* Alternativa C:
                        <textarea name="alternativa_c" placeholder="Digite o conteudo da alternativa" required></textarea>
                    </label>
                    <label>* Alternativa D:
                        <textarea name="alternativa_d" placeholder="Digite o conteudo da alternativa" required></textarea>
                    </label>
                    <label>* Alternativa E:
                        <textarea name="alternativa_e" placeholder="Digite o conteudo da alternativa" required></textarea>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <button  class="button success large-12">Cadastrar</button>
                </div>
            </div>
        </form>
    </body>
</html>
