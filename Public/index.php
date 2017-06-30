<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css"  href="../Libs/foundation/css/foundation.css">
        <link rel="stylesheet" type="text/css"  href="../Libs/css/css.css">
        <link rel="stylesheet" type="text/css"  href="../Libs/bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="../App/Admin/js/index.js"></script>
    </head>
    <body class="vcenter" onload="location:'Logout.php'">
        <div class="container large-text-center " style="opacity: 0.95; ">
            <div class="row col-xs-12">
                <div class="col-md-7 col-md-offset-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../App/DAL/ServicosLogout .php" method="Post" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input onkeypress="mascara(this, '###.###.###-##');" onkeydown="PermiteNumeros();" class="form-control" maxlength="14" placeholder="CPF Sem Pontuação" name="login" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha"  maxlength="50" name="senha" type="password" required>
                                    </div>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                </fieldset>
                            </form>
                            <br />
                            <a class="btn btn-lg bg-info btn-block" href="../App/Admin/View/pageCadastroUsuario.php" >Cadastrar-se</a>
                            <hr/>   
                            <center><h4>Ou</h4></center>
                            <a class="btn btn-facebook btn-lg btn-block" href="../App/View/pageMenuSemPerfil.php" >Login sem perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
