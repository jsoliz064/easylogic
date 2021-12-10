<body>
        <br>
		<br>
		<!-- FOOTER -->
		<footer id="footer">
			<div id="paginacion">
				<span class="izquierda" type="button" onclick="history.back()" name="boton-personalizado-2"><a>&laquo; Anterior </a></span>
				<span class="derecha"><a>Siguiente &raquo;</a></span>
			</div>
			<div align="center">
				<h2 class="textpartners">Partners</h2>
				<section class="customer-logos slider">
						<div class="slide"><img src="{{asset('img/logopaner.png')}}" ></div>
						<div class="slide"><img src="{{asset('img/cainco.png')}}" ></div>
				</section>
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
									<li><a href="#"><i class="fa fa-map-marker"></i>Ubicación</a></li>
									<li><a><i class="fa fa-phone"></i>+591 69086228</a></li>
									<li><a href="mailto:easylogic@gmail.com "><i class="fa fa-envelope-o"></i> easylogic@gmail.com </a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorías</h3>
								<ul class="footer-links">
									<li><a href="#">Agente</a></li>
									<li><a href="#">Transporte</a></li>
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

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>




	<script>
	$(document).ready(function() {
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
	</script>