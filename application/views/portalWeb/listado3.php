<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Lista de &ndash; Habitaciones</title>
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
<body class=" ">

<div id="mobile-bar">
	<a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
	<h1 class="mob-title">Listado y Precios</h1>
</div>

<div id="page">
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row pre-head">
						<div class="col-sm-6">
							<i class="ywicon">   Quito , Ecuador</i>
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
										<li><a href="#">Multi Level</a>
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

	<main id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 full">
					<h2 class="page-title">Nuestras Habitaciones</h2>

					<div class="row">
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
					</div>

					<div class="inset-sidebar">

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

					</div>

					<div class="row">
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
						<div class="col-sm-4">

							<div class="item">
								<figure class="item-thumb">
									<a href="room.html">
										<img src='http://placehold.it/750x930' width='750' height='930' alt='Placeholder Image' />
									</a>
								</figure>

								<div class="item-content">
									<a class="item-title btn" href="room.html">item title</a>
									<p class="item-sub">desde &dollar;12 / night</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</main>




	<!-- SLIDE DE BOOKING-->

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