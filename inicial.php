<?php
session_start();
?>
<?php
    include 'conect.php';
	$sql = mysql_query("SELECT * FROM usuario");
	while($linha = mysql_fetch_array($sql)){
                $id = $linha["id_usuario"];
				$login = $linha["login"];
                $senha = $linha["senha"];
                $email = $linha["email"];

			
	}
	
	?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ticketbus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="inicial.php">Ticketbus <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="perfil.php">Perfil</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="usuarios.php">Usuarios</a></li>
						<li class="btn-cta"><a href="index.php"><span>Sair</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Explore Nosso App</span>
							<h1>Possibilidades do Nosso Produto</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 text-left gtco-heading">
					<h2>Produto para Smathphones e Desktop</h2>
					<p>Ticket bus e um app, para facilitar a venda de Passagem de Onibus, onde voçe pode comprar suas passagens sem sair de casa.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Conforto</h3>
							<p>Poderar realizar compra de passagens sem sair de casa.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Rapides</h3>
							<p>Realiza a compra de passagens , de forma rapida.Evitando Filas e locomoção.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>Eficiência</h3>
							<p>Um aplicativo Eficiênte que veio para facilitar sua vida.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
						<div class="feature-copy">
							<h3>QRCode</h3>
							<p>A sua passagem e via QRCode evitando preucupaçõens com papeis de embarque.</p>
						</div>
					</div>

				</div>
				<div class="col-md-7 tick-wrap animate-box" data-animate-effect="fadeInRight">
					<img src="images/tick.png" alt="Free HTML5 Bootstrap Template">
				</div>
			</div>
		</div>
	</div>

	
	<div id="gtco-subscribe">
			<div class="gtco-container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Compre agora sua Passagem</h2>
						<p>Um app desenvolvido apenas para facilitar, sua vida.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						
					</div>
				</div>
			</div>
		</div>
	
		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p	b-md">
	
				<div class="col-md-4">
							<div class="gtco-widget">
								<h3>Descrição do sistema <span class="footer-logo"><span>.<span></span></h3>
								<p>O “TicketBus” é um aplicativo mobile de venda de passagens  interestaduais e intermunicipais para ônibus em todo o Brasil, que facilita a vida do usuário. Com apenas alguns cliques, o usuário poderá comprar uma passagem, escolher o  local de destino e ser notificado sobre promoções. Com um sistema de avaliação por estrelas, o aplicativo terá um ranking das melhores empresas baseado na avaliação dos usuários e de seus respectivos feedbacks, trazendo assim uma competitividade para que as empresas melhorem seus serviços.</p>
							</div>
						</div>
		
						<div class="col-md-4 col-md-push-1">
							<div class="gtco-widget">
								<h3>Links</h3>
								<ul class="gtco-footer-links">
									<li>Terms of services</a></li>
									<li>Privacy Policy</a></li>
								</ul>
							</div>
						</div>
		
						<div class="col-md-4">
							<div class="gtco-widget">
								<h3>Contatos</h3>
								<ul class="gtco-quick-contact">
									<li><i class="icon-phone"></i> +66 3602-6016</a></li>
									<li><i class="icon-mail2"></i> TicketBus@gmail.com</a></li>
									<li><i class="icon-chat"></i> Fale conosco</a></li>
								</ul>
							</div>
						</div>
		
					</div>
		
					<div class="row copyright">
						<div class="col-md-12">
							<p class="pull-left">
								<small class="block">&copy; 2018 "Eu que Fiz". All Rights Reserved.</small> 
								<small class="block">Designed by <a href="http://FreeHTML5.co/" target="_blank">Alunos CEULP/ULBRA</a> Demo Images: <a>TicketBus</a></small>
							</p>
							<p class="pull-right">
								<ul class="gtco-social-icons pull-right">
									<li><i class="icon-twitter"></i></a></li>
									<li><i class="icon-facebook"></i></a></li>
									<li><i class="icon-linkedin"></i></a></li>
									<li><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
		
				</div>
			</footer>
			</div>
		
			</div>
		
			<div class="gototop js-top">
				<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
			</div>
			
			<!-- jQuery -->
			<script src="js/jquery.min.js"></script>
			<!-- jQuery Easing -->
			<script src="js/jquery.easing.1.3.js"></script>
			<!-- Bootstrap -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Waypoints -->
			<script src="js/jquery.waypoints.min.js"></script>
			<!-- Carousel -->
			<script src="js/owl.carousel.min.js"></script>
			<!-- countTo -->
			<script src="js/jquery.countTo.js"></script>
			<!-- Magnific Popup -->
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/magnific-popup-options.js"></script>
			<!-- Main -->
			<script src="js/main.js"></script>
		
			</body>
		</html>