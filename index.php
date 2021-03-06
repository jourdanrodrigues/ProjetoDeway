<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Deway Project</title>
        <?php
            require_once("php/mainFunctions.php");
            loadFiles("{'css':['bootstrap','sweetalert','main']}");
            loadFiles("{'js':['libs/jQuery','libs/bootstrap','libs/sweetalert','var','content','js']}");
        ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Deway Project</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height:1px;">
                    <ul class="nav navbar-nav">
                        <li class="signup active"><a onclick="loadContent('signup')">Novo cadastro</a></li>
                        <li class="list"><a onclick="loadContent('list')">Visualizar cadastros</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container col-md-6 col-md-offset-3 col-xs-12"><div class='panel'></div></div>
    </body>
</html>