<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">    

        <link href="lib/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="lib/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="lib/js/jquery/jquery.js" type="text/javascript"></script>
        <script src="lib/js/jquery/jquery.mobile.min.js" type="text/javascript"></script>        

        <!-- Angular -->
        <script type="text/javascript" src="lib/js/angular/newangular.min.js"></script>
        <script type="text/javascript" src="lib/js/angular/underscore-min.js"></script>
        <script type="text/javascript" src="lib/js/angular/angular-route.js"></script>
        <script type="text/javascript" src="lib/js/angular/restangular.min.js"></script>    

        <link href="lib/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
        <script src="lib/css/materialize/js/materialize.min.js" type="text/javascript"></script>    
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="script.js" type="text/javascript"></script>

        <title>TJ - Administrativo</title>
    </head>
    <body ng-app='novoEducar' data-ng-controller="MainController as main">
        <header>
            <div class="navbar-fixed hide-on-large-only" >
                <nav>
                    <div class="container">
                        <div class="nav-wrapper">
                            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            <a class="page-title">TJ</a>
                        </div>
                    </div>
                </nav>
            </div>
            <ul id="slide-out" class="side-nav fixed">
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="logo">
                            <img src="ImageResizer.net - u5vkdaemhuywo38.png" alt=""/>
                            <!-- Topo do Sidebar -->
                            <div id="logo-container">
                                <i id="icone" class="material-icons prefix small tooltipped" style="padding-right: 50px " data-position="top" data-delay="50" data-tooltip="Adicionar Usuário" data-ng-click="main.selecionar('funcionarios', '')">person_add</i>
                                <i id="icone" data-ng-click="main.selecionar('login', '')"class="material-icons prefix small tooltipped" data-position="top" data-delay="50" data-tooltip="Sair">power_settings_new</i>
                            </div>
                        </li>
                        <li class="bold">
                            <!-- Menu -->
                            <a class="collapsible-header">Clientes</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a data-ng-click="main.selecionar('clientes', '')">Cadastrar</a></li>
                                    <li><a data-ng-click="main.selecionar('clientes', '')">Editar</a></li>
                                    <li><a data-ng-click="main.selecionar('clientes', '')">Visualizar</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold">
                            <a class="collapsible-header">Chamados</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a data-ng-click="main.selecionar('chamados', '')">Abrir Chamado</a></li>
                                    <li><a>Editar Chamado</a></li>
                                    <li><a>Excluir Chamado</a></li>
                                    <li><a>Visualizar Chamados</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold">
                            <a class="collapsible-header">Estoque</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a data-ng-click="main.selecionar('produtos', '')">Cadastrar Produto</a></li>
                                    <li><a>...</a></li>
                                    <li><a>...</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold">
                            <a class="collapsible-header">Orçamento</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a data-ng-click="main.selecionar('orcamentos', '')">Cadastrar Oçamento</a></li>
                                    <li><a>...</a></li>
                                    <li><a>...</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <main>
            <div>
                <div class="row">
                    <!-- Conteúdo -->
                    <div data-ng-include="main.tabAtual"></div>
                </div>
            </div>
        </main>    

        <!-- Angular App -->
        <script src="app.js" type="text/javascript"></script>

        <!-- Angular Controllers -->
        <script src="mainController.js" type="text/javascript"></script>
        <script src="modules/clientes/controllers/clienteController.js" type="text/javascript"></script>
        <script src="modules/funcionarios/controllers/funcionarioController.js" type="text/javascript"></script>
        <script src="modules/orcamentos/controllers/orcamentoController.js" type="text/javascript"></script>
        <script src="modules/login/controllers/loginController.js" type="text/javascript"></script>        
        <script src="modules/produtos/controllers/produtoController.js" type="text/javascript"></script>        
        <script src="modules/chamados/controllers/chamadoController.js" type="text/javascript"></script>        

        <script src="lib/js/jquery/geral.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.1/jquery.inputmask.bundle.js"></script>
    </body>
</html>
