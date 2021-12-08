
<!DOCTYPE html>



<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- ETIQUETAS REFERENCIALES -->
	    <meta name="description" content="Tienda Online logistica">
	    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">
	    <!--<meta http-equiv="author" content="Abdias Alvarado">-->
		<title>Logistica</title>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="style/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="style/font-awesome.min.css">

		<!-- Hoja de estilo personalizada -->
		<link type="text/css" rel="stylesheet" href="style/custom.css"/>
		
		<link rel="stylesheet" type="text/css" href="home.css" >
        <title> Home</title>
    </head>
	<body>
		<!-- HEADER -->
		<header>
		
			<div id="encabezado-superior">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a><i class="fa fa-phone"></i> +504 8882-2467</a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i> easylogic@gmail.com</a></li>
						<li><a href="https://goo.gl/maps/N4Cdk8s9FdN2"><i class="fa fa-map-marker"></i> direccion</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="{{route('login') }}"><i class="fa fa-user-o"></i> Usuario</a></li>
					</ul>
				</div>
			</div>

			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{route('importadora.index')}}" class="logo">
									<img src="./img/icono.png" alt="easylogic" width="50px">
									EASYLOGIC TEAM&#174;
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
								<!-- Deseos -->
								<!--<div>
									<a href="listadeseos.html">
										<i class="fa fa-heart-o"></i>
										<span>Deseos</span>
									</a>
								</div>-->
								<!-- /Deseos -->

								<!-- Carrito -->
								<!--
								<div class="dropdown">
									<a href="carrito.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
									</a>
								</div>
								-->
								<!-- /Carrito -->

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
			<!-- container -->

			<div class="container">
				<div id="responsive-nav">
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.html">Inicio</a></li>
						<li><a href="">Agente</a></li>
						<li><a href="">Transporte</a></li>
						<li><a href="">Exportadora</a></li>
						<li><a href="">Accesorios</a></li>
						<li><a href="">Importadora</a></li>
						<li><a href="">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- CONTENIDO -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">IMPORTADORA</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/logoimportadora.jpg" alt>
							</div>
							<div class="product-body">
								<p class="product-category">Importadora</p>
								<h3 class="product-name"><a href="#">Importadora Inturias</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
						Dirección: Av.Prefecto Rivas 281, Santa Cruz de la Sierra
						Horas: 
						Cerrado ⋅ Abre a las 08:00 del lun
						Teléfono: 3 3525940								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					
					
				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->



		<!-- /CONTENIDO -->




		<!-- FOOTER -->
		<footer id="footer">
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre Nosotros</h3>
								<p>Nos dedicamos a ofrecerte los mejores productos al mejor precio. Contamos con
								sistema de pedidos hacia proveedores en linea.</p>
								<ul class="footer-links">
									<li><a href="https://goo.gl/maps/N4Cdk8s9FdN2"><i class="fa fa-map-marker"></i>2 Calle SO, Bo. San Juan</a></li>
									<li><a><i class="fa fa-phone"></i>+504 8882-2467</a></li>
									<li><a href="mailto:temstorehn@gmail.com"><i class="fa fa-envelope-o"></i> temstorehn@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorías</h3>
								<ul class="footer-links">
					<li><a href="">Agente</a></li>
						<li><a href="">Transporte</a></li>
						<li><a href="">Exportadora</a></li>
						<li><a href="">Accesorios</a></li>
						<li><a href="">Importadora</a></li>
						<li><a href="">Contacto</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
									<li><a href="contactanos.html">Contáctanos</a></li>
									<li><a href="politicasdeprivacidad.html">Políticas de Privacidad</a></li>
									<li><a href="terminosycondiciones.html">Términos y Condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Clientes</h3>
								<ul class="footer-links">
									<li><a href="usuario.html">Mi Cuenta</a></li>
									<li><a href="carrito.html">Ver Carrito</a></li>
									<li><a href="listadeseos.html">Lista de Deseos</a></li>
									<li><a href="ayuda.html">Ayuda</a></li>
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
								Copyright &copy; 2020 Todos los derechos reservados. | uagrm
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
