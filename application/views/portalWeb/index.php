<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
        <!--Prueba de Commit-->
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Inicio &ndash; Latitud 0</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
	================================================== -->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic%7CMontserrat:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/weather-icons.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/prettyPhoto.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/mmenu.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/jquery-ui-1.10.4.datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/mediaqueries.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/colors/default.css">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/plantilla/images/6185logoHotel.ico">
	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

	<style>
		/*
		 When implementing this in a CMS, these styles should remain in the head
		 and use if logic to switch between the .fwslider or alternative
		 version of the theme (for correct header display). .fwslider or .alt in the body
		 tag will convert the header display to white background with grey letters,
		 as in index_alt.html -- feel free to delete this comment when you have no
		 use for it
		*/
		#header {
			background: url("http://www.cssigniter.com/preview/santorini/files/2014/03/header_image.jpg") no-repeat center top;
		}

		.fwslider #header { background: none; }
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

</head>
<body class="fwslider">

<div id="mobile-bar">
	<a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
	<h1 class="mob-title">Inicio</h1>
</div>

<div id="page">
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row pre-head">
						<div class="col-sm-6">
							<div id="weather">
								<i class="ywicon">   Quito , Ecuador </i>
								<!--<span id="ywloc">Quito</span>
								<span id="ywtem"></span>-->
							</div>
						</div>

						<div class="col-sm-6">
							<aside id="icl_lang_sel_widget" class="widget icl_languages_selector group"><h3 class="widget-title">Idioma</h3><div id="lang_sel">
								<ul>
									<li>
										<a href="#" class="lang_sel_sel icl-en">

										<img class="iclflag" src="<?php echo base_url(); ?>assets/plantilla/images/flags/es.png" alt="en" title="Español">
										&nbsp;Español</a>
										<ul>
											<li class="icl-en">
												<a href="http://www.cssigniter.com/preview/santorini/es/">
													<img class="iclflag" src="<?php echo base_url(); ?>assets/plantilla/images/flags/en.png" alt="es" title="English">&nbsp;
													English
												</a>
											</li>
											<li class="icl-fr">
												<a href="http://www.cssigniter.com/preview/santorini/fr/">
													<img class="iclflag" src="<?php echo base_url(); ?>assets/plantilla/images/flags/fr.png" alt="fr" title="Français">&nbsp;
													Français
												</a>
											</li>
											<li class="icl-de">
												<a href="http://www.cssigniter.com/preview/santorini/de/">
													<img class="iclflag" src="<?php echo base_url(); ?>assets/plantilla/images/flags/de.png" alt="de" title="Deutsch">&nbsp;
													Deutsch
												</a>
											</li>
											<li class="icl-it">
												<a href="http://www.cssigniter.com/preview/santorini/it/">
													<img class="iclflag" src="<?php echo base_url(); ?>assets/plantilla/images/flags/it.png" alt="it" title="Italiano">&nbsp;
													Italiano
												</a>
											</li>
										</ul>

									</li>
								</ul>
							</div>
							</aside>
						</div>
					</div> <!-- .row.pre-head -->
					<hr/>

					<nav class="nav row">
						<div class="col-sm-5">
							<ul class="navigation left-nav">
								<li class='current'><a class='current' href="<?php echo base_url(); ?>Portal/Inicio">Inicio</a></li>
								<!--<li><a href="index_alt.html">Home 2</a></li>-->
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/listadoTres">Listado</a>
									<ul>
										<li><a href="<?php echo base_url(); ?>Portal/Inicio/listadoCuatro">Listado Habitaciones</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/simple">Artículos Destacados</a></li>
							</ul>
						</div>

						<!-- LOGO DEL HOTEL
						<div class="col-sm-2">
							<h1 class="logo"><a class='current' href="index.html"></a></h1>
						</div>
						-->

						<div class="col-sm-5">
							<ul class="navigation right-nav">
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/blog">Blog</a>
									<ul>
										<li><a href="#">Sub Item</a></li>
										<li><a href="#">Multi Nivel</a>
											<ul>
												<li><a href="#">Más Niveles</a></li>
												<li><a href="#">Más Niveles</a></li>
												<li><a href="#">Más Niveles</a></li>
												<li><a href="#">Más Niveles</a></li>
											</ul>
										</li>
										<li><a href="#">Sub Item</a></li>
									</ul>
								</li>
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/booking">Booking</a></li>
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/galeria">Galerías</a></li>
								<li><a href="<?php echo base_url(); ?>Portal/Inicio/contacto">Contactanos</a></li>

							</ul>
						</div>
					</nav>

					<div id="mobilemenu">
						<ul>
							<li class='current'><a class='current' href="<?php echo base_url(); ?>Portal/Inicio">Inicio</a></li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/listadoTres">Listado</a></li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/listadoCuatro">Listado 4 Columns</a></li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/blog">Blog</a>
								<ul>
									<li><a href="">Sub Item</a></li>
									<li><a href="">Sub Item</a></li>
									<li><a href="">Sub Item Largo</a></li>
									<li><a href="">Sub Item</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/booking">Booking </a></li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/galeria">Galeria</a></li>
							<li><a href="<?php echo base_url(); ?>Portal/Inicio/contacto">Contactanos</a></li>
						</ul>
					</div>
				</div> <!-- main container -->
			</div>
		</div>
	</header>

	<div id="slider" class="flexslider loading">
		<ul class="slides">
			<li style="background: url('http://loveecuadorliving.com/wp-content/uploads/2013/09/IMG_67801.jpg') no-repeat center center ">
				<div class="slide-info">
					<h2 class="slide-title">HOSTAL LATITUD 0</h2>
					<p class="slide-subtitle" >Desde &dollar;12 / día.</p>
					<a class="btn slide-more" href="#">Ver Más.</a>
				</div>
			</li>
			<li style="background: url('http://www.cuyabenolodge.com/ecuador/quito-ecuador/national-cathedral-quito.jpg') no-repeat center center">
				<div class="slide-info">
					<!--<h2 class="slide-title">Visítanos </h2>
					<p class="slide-subtitle">Te sentirás como en casa </p>

					<a class="btn slide-more" href="">Ver Más.</a>-->
				</div>
			</li>
			<li style="background: url('http://www.cssigniter.com/preview/santorini/files/2014/03/slider_2.jpg') no-repeat center center">
				<div class="slide-info">
					<h2 class="slide-title">Tours Guiados</h2>
					<p class="slide-subtitle">La mejor atención</p>

					<a class="btn slide-more" href="">Ver Más.</a>
				</div>
			</li>
		</ul>
	</div> <!-- #slider -->

	<div class="booking-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">

				<form class="b-form group" method="post" action="<?php echo base_url(); ?>Portal/Inicio/booking">
					<div class="arrival group">
						<input type="text" name="arrive" id="arrive" class="datepicker" placeholder="Llegada">
					</div>

					<div class="departure group">
						<input type="text" name="depart" id="depart" class="datepicker" placeholder="Salida">
					</div>

					<div class="adults group">
						<select name="guests" id="guests" class="dk">
							<option selected disabled>Personas</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>

					<div class="room group">
						<select name="room_select" id="room_select" class="dk">
							<option selected disabled>Habitaciones</option>
							<option value="1">Simples</option>
							<option value="2">Dobles</option>
							<option value="3">Residencial</option>
						</select>
					</div>

					<div class="bookbtn group">
						<button type="submit">Registrate ahora!</button>
					</div>
				</form>

				</div>
			</div>
		</div>
	</div> <!-- .booking-wrap -->

	<main id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="widget-area-1">

						<div class="widget widget_ci_testimonial_widget">
							<div class="testimonial-wrap">
								<div class="testimonial-inner">
									<blockquote>

										<i class="fa fa-quote-left"></i>
										<p>La mejor experiencia en hospedajes. Lo recomendarás a todo el mundo. Contamos con un buen servicio de entretenimiento.</p>

										<cite>Zonas turísticas &ndash; de la capital</cite>
									</blockquote>
								</div>
							</div>
						</div>

					</div> <!-- .widget-area-1 -->

					<div class="widget-area-2">
						<div class="row">
							<div class="col-sm-4">
								<div class="widget">

									<div class="item">
										<figure class="item-thumb">
											<a href="room.html">
												<img src="<?php echo base_url(); ?>assets/plantilla/images/habi1.jpg" width='750' height='930' alt='Placeholder Image' />
											</a>
										</figure>

										<div class="item-content">
											<a class="item-title btn" href="">Habitación Simple.</a>
										</div>
									</div>

								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget">

									<div class="item">
										<figure class="item-thumb">
											<a href="room.html">
												<img src="<?php echo base_url(); ?>assets/plantilla/images/double.jpg" width="750" height="930" alt='Placeholder Image' />
											</a>
										</figure>

										<div class="item-content">
											<a class="item-title btn" href="">Habitación Doble</a>
										</div>
									</div>

								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget">

									<div class="item">
										<figure class="item-thumb">
											<a href="room.html">
												<img src="<?php echo base_url(); ?>assets/plantilla/images/residencial.jpg" width='750' height='930' alt='Placeholder Image' />
											</a>
										</figure>

										<div class="item-content">
											<a class="item-title btn" href="">Servicio Residencial.</a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div> <!-- .widget-area-2 -->

					<div class="widget-area-3">
						<div class="row">
							<div class="col-sm-8">
								<h3 class="widget-title">Nuestro Blog</h3>

								<article class="entry">
									<figure class="entry-thumb">
										<a href="single.html">
											<img src="<?php echo base_url(); ?>assets/plantilla/images/blogWordpress.jpg" width='750' height='425' alt='Placeholder Image' />
										</a>
									</figure>

									<h1 class="entry-title"><a href="single.html">Hostal Latitud 0: El mejor hospedaje para visitar Quito.</a></h1>
									<div class="entry-meta">
										<span class="entry-categories"><b>Post</b> <a href="">Articulos</a>, <a href="">Debes visitar</a>, <a
											href="">Latitud 0</a></span>
										<a class="entry-comments" href="single.html#comments">3 Comments</a>
									</div>

									<div class="entry-excerpt">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda fuga illo laudantium magni sed temporibus. Amet atque aut autem consectetur consequuntur dolorum enim error hic inventore molestiae nisi nostrum numquam optio perspiciatis provident, quae quam quisquam quo similique suscipit veniam veritatis vero. Ab culpa cumque deleniti est explicabo facilis, ipsa itaque magni non officiis placeat provident quidem ratione recusandae reiciendis repellat, repudiandae tempora unde voluptates voluptatibus. Ab aliquid, blanditiis debitis eos eveniet ex incidunt itaque, labore maxime mollitia natus perspiciatis porro provident quidem quis reprehenderit rerum suscipit totam ullam voluptatum.</p>
									</div>
								</article>

							</div>

							<div class="sidebar col-sm-4">

								<div class="widget widget_ci_special_offer_widget">
									<h3 class="widget-title">Ofertas especiales</h3>
									<div class="item">
										<figure class="item-thumb">
											<a href="booking.html">
												<img src="<?php echo base_url(); ?>assets/plantilla/images/off.jpg" height='930' alt='Placeholder Image' />
											</a>
										</figure>

										<div class="item-content">
											<h4>Descuentos y precios especiles.</h4>
											<a class="item-title btn" href="booking.html">Infórmate</a>
										</div>
									</div>
								</div>

								<aside class="widget widget_ci_social_widget ci-socials group">
									<h3 class="widget-title">social</h3>
									<a href="#" class="social-icon" title="Subscribe to our RSS feed."><i class="fa fa-rss"></i></a>
									<a href="http://www.twitter.com/cssigniter" class="social-icon" title="Follow us on twitter."><i class="fa fa-twitter"></i></a>
									<a href="http://www.facebook.com/cssigniter" class="social-icon" title="Like us on Facebook."><i class="fa fa-facebook"></i></a>
									<a href="http://www.dribbble.com/tsiger" class="social-icon" title="See our Dribbble shots."><i class="fa fa-dribbble"></i></a>
								</aside>


								<div class="widget widget_ci_newsletter_widget">
									<h3 class="widget-title">Sugerencias</h3>

									<p>Tu opinión es importante , nos ayuda a mejorar:</p>
									<form class="ci-newsletter" action="/">
										<input type="email" name="ci_newsletter_email" id="ci_newsletter_email" placeholder="your email">
										<button type="submit"><i class="fa fa-chevron-right"></i></button>
									</form>
								</div>

							</div>
						</div>
					</div> <!-- .widget-area-3 -->
				</div>
			</div>
		</div>
	</main>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<hr>

					<nav class="nav row">
						<div class="col-sm-5">
							<ul class="navigation left-nav">
								<li class='current'><a class='current' href="<?php echo base_url(); ?>Portal/Inicio">Inicio</a></li>
								<li><a href="listing-3col.html">Listing</a></li>
								<li><a href="room.html">Single Room</a></li>
							</ul>
						</div>

						<div class="col-sm-2">
							<div class="logo"><a class='current' href="index.html"><img src="images/dummy/logo_grey" alt=""></a></div>
						</div>

						<div class="col-sm-5">
							<ul class="navigation right-nav">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="booking.html">Booking</a></li>
								<li><a href="listing-3col.html">Galería</a></li>
								<li><a href="contact.html">Contactanos</a></li>
								<li><a href="<?php echo base_url(); ?>login">Iniciar Sesión</a></li>
							</ul>
						</div>
					</nav>

					<p class="credits">Desarrollado por Bryan Suárez y Edison Lombeida</p>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- #page -->

<!-- Javascript
================================================== -->
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery.mmenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery.dropkick-min.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery.fitvids.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/contact.js"></script>
<script src="<?php echo base_url(); ?>assets/plantilla/js/scripts.js"></script>

</body>
</html>