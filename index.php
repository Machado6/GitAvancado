<?php
require_once "importlibs.php";
$teste = "teste1";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <?=$libs?>
    
        
</head>
<body>
        <?=$cabecalhomenu?>
        
        <br>
        <br>

        

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>teste</th>
                    <th>teste</th>
                    <th>teste</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><?= $teste?></td>
                        <td><?= $teste?></td>
                        <td><?= $teste?></td>
                    </tr>
                    <tr>
                        <td scope="row"><?= $teste?></td>
                        <td><?= $teste?></td>
                        <td><?= $teste?></td>
                    </tr>
                </tbody>
        </table>
        
        <script>
            $('#navId a').click(e => {
                e.preventDefault();
                $(this).tab('show');
            });
        </script>
    
    
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>teste</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>teste1</td>
                <td>teste2</td>
                <td>teste3</td>
                <td>teste4</td>
                <td>teste5</td>
            </tr>
        </tbody>
    </table>
    
    
    
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
</body>
</html>