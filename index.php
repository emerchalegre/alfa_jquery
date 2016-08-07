<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>jQuery - Cadastro e Listagem de Produtos</title>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="assets/selectboxit/selectboxit.css" />
        <link rel="stylesheet" href="assets/EasyTabs/easytabs.css" />
        <link rel="stylesheet" href="assets/projeto.css" />

        <script src="assets/js/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/jquery-ui/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/selectboxit/selectboxit.js"></script>
        <script type="text/javascript" src="assets/EasyTabs/jquery.easytabs.js"></script>
        <script type="text/javascript" src="assets/jquery.inputmask-3.x/js/inputmask.js"></script>
        <script type="text/javascript" src="assets/jquery.inputmask-3.x/js/inputmask.numeric.extensions.js"></script>
        <script type="text/javascript" src="assets/jquery.inputmask-3.x/js/jquery.inputmask.js"></script>
        <script type="text/javascript" src="assets/js/totop.js"></script>
        <script type="text/javascript" src="assets/galleria/galleria-1.4.2.js"></script>
        <script type="text/javascript" src="assets/js/projeto.js"></script>
        <style>
            .galleria{ width: 700px; height: 400px; background: #000 }
        </style>
        
    </head>
    <body>

        <div id="topo">
            <img src="assets/img/logo.png">
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">jQuery Project</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Página Inicial</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Produtos Perecíveis</a></li>
                                <li><a href="#">Produtos Não-Perecíveis</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/img/produtos1.jpg">
                </div>

                <div class="item">
                    <img src="assets/img/produtos2.jpg" >
                </div>

                <div class="item">
                    <img src="assets/img/produtos3.jpg" >
                </div>

                <div class="item">
                    <img src="assets/img/produtos4.jpg" >
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div id="tabs">
            <ul class="nav nav-tabs">
                <li><a href="#cadastro">Cadastro</a></li>
                <li><a href="#galeriafotos">Galeria de Fotos</a></li>
            </ul>
            <div class="panels">
                <div id="cadastro">
                    <form id="form1" class="form-inline">
                        <div class="form-group col-xs-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="datanascimento">Data Nascimento</label>
                            <input type="text" name="datanascimento" id="datanascimento" class="form-control">
                        </div>
                        <div class="form-group col-xs-4" style="height: auto;">
                            <label for="estado">Estado</label>
                            <select id="estado" name="estado" class="form-control"></select>
                        </div>
                        <div class="form-group col-xs-4">
                            <label for="cidade">Cidade</label>
                            <select id="cidade" name="cidade" class="form-control"></select>
                        </div>
                    </form>
                </div>
                <div id="galeriafotos">
                    <div class="galleria">
                        <img src="assets/galeria/imagem1.jpg" data-title="Foto 1" data-description="Foto 1">
                        <img src="assets/galeria/imagem2.jpg" data-title="Foto 2" data-description="Foto 2">
                        <img src="assets/galeria/imagem3.jpg" data-title="Foto 3" data-description="Foto 3">
                        <img src="assets/galeria/imagem4.jpg" data-title="Foto 4" data-description="Foto 4">
                        <img src="assets/galeria/imagem5.jpg" data-title="Foto 5" data-description="Foto 5">
                        <img src="assets/galeria/imagem6.png" data-title="Foto 6" data-description="Foto 6">
                    </div>
                </div>
            </div>
        </div>

        <a href="#0" class="cd-top">Top</a>

        <footer>
            @emerchalegre - Alfa - jQuery Project
        </footer>
        <script>
            Galleria.loadTheme('assets/galleria/themes/classic/galleria.classic.min.js');
            Galleria.run('.galleria');
        </script>
    </body>
</html>
