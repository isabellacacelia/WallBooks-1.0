<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php
        $titulo['pagina'] = explode('/', $_GET['pagina']);
        $titulo['pagina'] = end($titulo['pagina']);
        ?>
        <title> Administrador | <?php echo $titulo['pagina']; ?></title>
    </head>

    <body style="background-image: url('img/livros.jpg') ;">
        <header>
            <nav>
                <div class="nav-wrapper blue darken-1 ">
                    <div class="container">
                        <div id="topo" class="brand-logo center"></div>
                        <ul id="slide-out" class="side-nav fixed">
                            <div class="logo"><img src="img/WallBooks.jpg" class="logo-img"/></div>
                            <li><a href="areaAdmin.php?pagina=nav/inicio">Início</a></li>
                            <li><a href="areaAdmin.php?pagina=nav/instituicao">Instituição</a></li>
                            <li><a href="areaAdmin.php?pagina=nav/licenca">Licença</a></li>
                            <!--<li><a href="areaAdmin.php?pagina=nav/material">Material</a></li>-->

                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header">Material</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="areaAdmin.php?pagina=nav/material">Cadastrar Material</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li>
                                        <a class="collapsible-header">Usuário</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="areaAdmin.php?pagina=nav/usuario">Cadastrar Usuário</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="areaAdmin.php?pagina=nav/turma">Cadastrar Turma</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="areaAdmin.php?pagina=nav/editora">Editora</a></li>
                            <li><a href="areaAdmin.php?pagina=nav/historico">Histórico de Alteração</a></li>
                            <li><a href="areaAdmin.php">Sair</a></li>
                        </ul>

                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </header>