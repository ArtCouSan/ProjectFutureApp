<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>Questões por Instituição</title>
        <link rel="stylesheet" type="text/css"  href="../../Libs/css/css.css">
        <link rel="stylesheet" type="text/css"  href="../../Libs/foundation/css/foundation.css">
    </head>
    <body class="dt-example">
        <?php include "cabecalho.php" ?>
        <br />
        <div class="container">

            <table class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Instituição</th>
                        <th>Data da Prova</th>
                        <th>Versão</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    include '../Controller/ServicosQuestoes.php?consultarProvaBanca';
                    
                    while ($dado = mysql_fetch_array($query)) {
                        
                    }
                        echo '<tr>'
                    . '<td>'.$_GET["instituicao"].'</td>'
                    . '</tr>';
                        
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Instituição</th>
                        <th>Data da Prova</th>
                        <th>Versão</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>
