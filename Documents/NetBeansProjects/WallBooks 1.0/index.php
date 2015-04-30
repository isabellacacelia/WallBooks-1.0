<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/styleIndex.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image" href="img/WallBooks.jpg"/>
        <title> Wall Book - Sua Plataforma Digital</title>
    </head>

    <?php include"conexao.php"; ?>
    
    <body>	
        <header>
            <nav>
                <div class="nav-wrapper blue darken-1 ">
                    <div class="container">
                        <a class="brand-logo">Wall Books</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#modal1" class="modal-trigger"><i class="mdi-image-timer-auto"></i></a></li>
                        </ul>
                        <ul id="slide-out" class="side-nav">
                            <li><a href="#modal1" class="modal-trigger">Área do Administrador</a></li>
                        </ul>
                        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Entrar no Wall Books</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="text" class="validate">
                                <label for="email">Login</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Senha</label>
                            </div>
                        </div>	
                </div>
            </div>

            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sair</a>
                <a href="areaAdmin.php?pagina=nav/inicio" class="modal-action modal-close waves-effect waves-green btn-flat ">Entrar</a>
            </div>
        </div>

        <main>
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="img/carrosel1.png"> 
                        <div class="caption center-align ">
                            <h3 class="lgdCarrossel">Plataforma Digital para Livros Didáticos</h3>
                        </div>
                    </li>
                    <li>
                        <img src="img/carrosel2.png">
                        <div class="caption center-align ">
                            <h4 class="lgdCarrossel">Online os alunos tem acesso aos materiais no aplicativo</h4>
                        </div>
                    </li>
                    <li>
                        <img src="img/carrosel3.png"> 
                        <div class="caption right-align">
                            <h3 class="lgdCarrossel">Área do Administrador</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </main>

        <footer class="page-footer blue darken-1">
            <div class="footer-copyright">
                <div class="container">
                    Wall Books © 2015 
                    <a class="grey-text text-lighten-4 right">Todos os direitos reservados</a>
                </div>
            </div>
        </footer>

        <!-- scripts -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </body>
</html>