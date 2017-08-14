<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>Questões por Instituição</title>
        <link rel="stylesheet" type="text/css"  href="../../Libs/css/css.css">
        <link rel="stylesheet" type="text/css"  href="../../Libs/foundation/css/foundation.css">
        <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../Libs/table/media/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="../../Libs/table/resources/syntax/shCore.css">
        <link rel="stylesheet" type="text/css" href="../../Libs/table/resources/demo.css">
        <style type="text/css" class="init">

        </style>
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
        </script>
        <script type="text/javascript" language="javascript" src="../../Libs/table/media/js/jquery.dataTables.js">
        </script>
        <script type="text/javascript" language="javascript" src="../../Libs/table/resources/syntax/shCore.js">
        </script>
        <script type="text/javascript" language="javascript" src="../../Libs/table/resources/demo.js">
        </script>
        <script type="text/javascript" language="javascript" class="init">

            $(document).ready(function () {
                $('#example').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "../server_side/scripts/server_processing.php"
                });
            });

        </script>
    </head>
    <body class="dt-example">
        <?php include "cabecalho.php" ?>
        <br />
        <div class="container">

            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>
