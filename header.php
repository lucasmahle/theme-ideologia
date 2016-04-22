<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Título</title>
		<!-- STYLES -->
		<link rel="stylesheet" id="google-fonts-css" href="//fonts.googleapis.com/css?family=Roboto+Slab:400,300,700" type="text/css" media="all">
		<link rel="stylesheet/less" href="assets/css/style.less">
	
		<!-- SCRIPTS -->
			<script>less={logLevel:0}</script>
		<!-- VENDOR -->
			<script src="assets/js/less.js"></script>
			
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/dropdown.min.js"></script>
		<script src="assets/js/main.js"></script>
	</head>
	<body>
		<header class="navbar blog-navbar navbar-default navbar-fixed-top" id="top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#blog-navbar" aria-controls="blog-navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse">
					<a href="index.php">
						<img src="assets/img/logo-blog.png" class="logo">
					</a>
					<div class="navbar-itens">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Laravel</a></li>
									<li><a href="#">PHP</a></li>
								</ul>
							</li>
							<li>
								<a href="page.php">Sobre mim</a>
							</li>
							<li>
								<a href="page.php">Contato</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>