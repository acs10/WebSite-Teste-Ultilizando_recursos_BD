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
	<title>Ticketbus </title>
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
									<li><a href="inicial.php">Inicial</a></li>
									<li><a href="perfil.php">Perfil</a></li>
									<li><a href="contato.php">Contato</a></li>
									<li><a href="usuarios.php">Usuarios</a></li>
									<li class="btn-cta"><a href="index.php"><span>Sair</span></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">My perfil</span>
							<h1><?php echo $login?></h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Perfil</h2>
					<p>para alterar as informaçoens da sua conta apenas preencha os campos e confirme as alteraçõens.
				</div>
			</div>
			
    <div>
			<div id="page-wrapper">
					<div id="page-inner">
						<div class="row">
							<div class="col-md-12">
							</div>
						</div>
		
								 <div class="panel-body">
								<form action="update.php" enctype="multipart/form-data"  method="post" >
								
									<form role="form">
		
										<div class="form-group">
											<label class="form-control" for="selectbasic">Escolha um Novo Username </label>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
											<input type="hidden" class="form-control" placeholder="Nome de Usuario" name="id"  value ="<?php echo $id?>" </>
		
											<input type="text" class="form-control" placeholder="Nome de Usuario" name="login"  value ="<?php echo $login?>" </>
										</div>
										<div class="form-group">
											<label class="form-control" for="selectbasic">Escolha um novo email</label>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
											<input type="text" class="form-control" name="email" placeholder="E-mail" value ="<?php echo $email?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
										</div>
										<div class="form-group">
											<label class="form-control" for="selectbasic">Escolha um nova Senha</label>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
											<input type="password" class="form-control"  placeholder="senha" name="senha" value ="<?php echo $senha?>" required />
											<input type="password" class="form-control"  placeholder="Digite novamente a Senha" name="confirm" required />
										   
										</div>

										<input type="submit" value="Editar" class="btn btn-primary "/>
										
		</div>


</br>
</br>
</br>

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