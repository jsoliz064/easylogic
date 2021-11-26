@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
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
						<!--<li><a href="mailto:logistica@gmail.com"><i class="fa fa-envelope-o"></i> temstorehn@gmail.com</a></li>-->
						<li><a href="https://goo.gl/maps/N4Cdk8s9FdN2"><i class="fa fa-map-marker"></i> direccion</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="usuario.html"><i class="fa fa-user-o"></i> Usuario</a></li>
					</ul>
				</div>
			</div>

			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.html" class="logo">
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
										<option value="1">En Promoción</option>
										<option value="1">Computadoras</option>
										<option value="1">Electrónica</option>
										<option value="1">Celulares</option>
										<option value="1">Accesorios</option>
										<option value="1">Impresoras</option>
										<option value="1">Cámaras</option>
									</select>
									<input class="input" placeholder="Artículo a buscar">
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
<!--
		<nav id="navigation">
			<!-- container -->
<!--	
			<div class="container">
				<div id="responsive-nav">
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.html">Inicio</a></li>
						<li><a href="computadoras.html">Computadoras</a></li>
						<li><a href="celulares.html">Celulares</a></li>
						<li><a href="electronica.html">Electrónica</a></li>
						<li><a href="accesorios.html">Accesorios</a></li>
						<li><a href="impresoras.html">Impresoras</a></li>
						<li><a href="camaras.html">Cámaras</a></li>
					</ul>
				</div>
			</div>
		</nav>
-->
		<!-- CONTENIDO -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

		<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">TRANSPORTE TERRESTRE</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/camion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					
					
					


					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/camion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/camion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>

					<!-- product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/camion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					
					
					<!-- /product -->

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">TRANSPORTE AEREO</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/avion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/avion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/avion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/avion.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Gaming</p>
								<h3 class="product-name"><a href="#">Soluciones de Logística Integral SLI</a></h3>
								<h4 class="product-price">Servicio de transporte</h4>
								<p>
								número 16, C. Tatarenda · 3 3515010
								Cerrado ⋅ Abre a las 08:30
								</P>
							<!--	<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">TRANSPORTE MARÍTIMO</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/barco.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">CÁMARAS</p>
								<h3 class="product-name"><a href="#">Sony A7 III</a></h3>
								<h4 class="product-price">L.47,999.00</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/barco.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">CÁMARAS</p>
								<h3 class="product-name"><a href="#">Sony Parent A5 100</a></h3>
								<h4 class="product-price">L.12,000.00</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/barco.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">CÁMARAS</p>
								<h3 class="product-name"><a href="#">Canon T6i</a></h3>
								<h4 class="product-price">L.14,500.00</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->
					
					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/barco.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">CÁMARAS</p>
								<h3 class="product-name"><a href="#">Fujifilm HDR 324</a></h3>
								<h4 class="product-price">L.32,930.00</h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
									<button class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /product -->
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
									<li><a href="computadoras.html">Computadoras</a></li>
									<li><a href="celulares.html">Celulares</a></li>
									<li><a href="electronica.html">Electrónica</a></li>
									<li><a href="accesorios.html">Accesorios</a></li>
									<li><a href="impresoras.html">Impresoras</a></li>
									<li><a href="camaras.html.">Cámaras</a></li>
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



@endsection
