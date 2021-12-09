<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online logistica">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">
    <!--<meta http-equiv="author" content="Abdias Alvarado">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style/font-awesome.min.css')}}">
    <title>Logistica</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('style/font-awesome.min.css')}}">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="{{asset('style/custom.css')}}" />

    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{asset('style/home.css')}}" />


    <title> Home</title>
</head>

<body>
    <!-- HEADER -->
    <header>

        <div id="encabezado-superior">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a><i class="fa fa-phone"></i> +0000000</a></li>
                    <li><a href="mailto:logistica@gmail.com"><i class="fa fa-envelope-o"></i> easylogic@gmail.com</a></li>
                    <li><a href="https://goo.gl/maps/N4Cdk8s9FdN2"><i class="fa fa-map-marker"></i> direccion</a></li>
                </ul>


                <ul class="header-links pull-right">
                    <li><a href="{{route('login') }}"><i class="fa fa-user-o"></i> Usuario</a></li>
                    <li><a href="{{route('login') }}"><i class="fa fa-user-o"></i> admin</a></li>

                </ul>


            </div>
        </div>

        <div id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('home')}}" class="logo">
                                <img src="{{asset('img/icono.png')}}" alt="easylogic" width="70px">
                                EASYLOGIC&#174;
                            </a>
                        </div>

                    </div>



                    <!-- BARRA DE BÚSQUEDA -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">Categorías</option>
                                    <option value="1">Agente</option>
                                    <option value="1">Transporte</option>
                                    <option value="1">Exportadora</option>
                                    <option value="1">Importadora</option>
                                </select>
                                <input class="input" placeholder="Buscar">
                                <button class="search-btn">Buscar</button>
                            </form>
                        </div>
                    </div>
                    <!-- /BARRA DE BÚSQUEDA -->

                    <!-- USUARIO -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">


                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /USUARIO-->
                </div>
            </div>
        </div>


    </header>
    <!-- /HEADER -->


    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">Agente</a></li>
                    <li><a href="#">transporte</a></li>
                    <li><a href="#">Importadora</a></li>
                    <li><a href="#">Exportadora</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <!-- CONTENIDO -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            @include('agentes.indexcartahome')

            <div class="row">

            </div>
        </div>

        <center>
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </center>


    </div>
    <!-- /Section -->

    <!-- CONTENIDO -->





    <!-- FOOTER -->
    <footer id="footer">
        <div id="paginacion">
            <span class="izquierda" type="button" onclick="history.back()" name="boton-personalizado-2"><a>&laquo; Anterior </a></span>
            <span class="derecha"><a>Siguiente &raquo;</a></span>
        </div>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Sobre Nosotros</h3>
                            <p>Nos dedicamos a ofrecerte los mejores servicios</p>
                            <ul class="footer-links">
                                <li><a href="https://goo.gl/maps/N4Cdk8s9FdN2"><i class="fa fa-map-marker"></i>lugar xxxxxxx</a></li>
                                <li><a><i class="fa fa-phone"></i>+00000000000</a></li>
                                <li><a href="mailto:easylogic@gmail.com "><i class="fa fa-envelope-o"></i> easylogic@gmail.com </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categorías</h3>
                            <ul class="footer-links">
                                <li><a href="#">Agente</a></li>
                                <li><a href="">Transporte</a></li>
                                <li><a href="#">Electrónica</a></li>
                                <li><a href="#">Importadora</a></li>
                                <li><a href="#">Exportadora</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Información</h3>
                            <ul class="footer-links">
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="#">Políticas de Privacidad</a></li>
                                <li><a href="#">Términos y Condiciones</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Clientes</h3>
                            <ul class="footer-links">
                                <li><a href="#">Mi Cuenta</a></li>
                                <li><a href="#">Ver servicio</a></li>
                                <li><a href="#">Ayuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <div id="bottom-footer" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="copyright">
                            Copyright &copy; 2021 Todos los derechos reservados. | easylogic
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>