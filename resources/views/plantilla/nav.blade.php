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
	<link rel="icon" type="image/png" href="{{asset('img/icono.png')}}" />
	<title>easylogic</title>


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
					<li><a><i class="fa fa-phone"></i> +591 69086228</a></li>
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
</body>
	<!-- /HEADER -->