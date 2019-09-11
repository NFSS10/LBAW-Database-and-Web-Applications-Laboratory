<!DOCTYPE html>
<html>
	<head>
		<title>ForBid</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/log_reg.css">
		<link rel="stylesheet" type="text/css" href="css/myAuctions.css">
		<link rel="stylesheet" type="text/css" href="css/myBids.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/productPage.css">
		<link rel="stylesheet" type="text/css" href="css/following.css">
		<link rel="stylesheet" type="text/css" href="css/transaction_history.css">
		<link rel="stylesheet" type="text/css" href="css/advanced_search.css">
		<script src="js/back-to-top.js"></script>
		<script src="js/login.js"></script>
		<script src="js/select.js"></script>
	</head>

<body>
<div class="no-container">
	<nav class="navbar-default navbar-fixed-top" id="main_navbar" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<img src="resources/logo.png" alt="">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#footer">Sobre nós</a></li>
					<li><a href="contact.php#search">Contacta-nos</a></li>
					<li><a id="login-button" href="#" role="button" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> Login/Registar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="page_header text-center" id="search_container">
		<div class="page_header_text">
			<h1 class="text-center"> Bem vindo ao FORBID</h1>
			<h5 class="text-center"> Aqui podes vender e comprar material electrónico a preços fantásticos!</h5>
		</div>
		<div class="col-sm-6 col-sm-offset-3">
			<form role="form">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Procurar...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="submit"><span
									class="glyphicon glyphicon-search"></span></button>
					  </span>
				</div>
			</form>
		</div>
	</div>

	<nav class="navbar navbar-inverse bg-primary navbar-static-top" id="product_nav">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Computadores <span class="caret"></span></a>
					<ul class="dropdown-menu  dropdown-menu-large row" id="comp_ul">
						<li class="col-sm-12">
							<ul>
								<li class="dropdown-header">Variados</li>
								<li><a href="advanced_search.php#search">Desktops</a></li>
								<li><a href="advanced_search.php#search">Híbridos</a></li>
								<li><a href="advanced_search.php#search">Portáteis</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Consolas <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-large row">
						<li class="col-sm-6">
							<ul>
								<li class="dropdown-header">Microsoft</li>
								<li><a href="advanced_search.php#search">Xbox 360</a></li>
								<li><a href="advanced_search.php#search">Xbox One</a></li>
							</ul>
						</li>

						<li class="col-sm-6">
							<ul>
								<li class="dropdown-header">Sony</li>
								<li><a href="advanced_search.php#search">PlayStation3</a></li>
								<li><a href="advanced_search.php#search">PlayStation4</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Periféricos <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-large row">
						<li class="col-sm-6">
							<ul>
								<li class="dropdown-header">Ratos/Teclados</li>
								<li><a href="advanced_search.php#search">Acessórios</a></li>
								<li><a href="advanced_search.php#search">Ratos</a></li>
								<li><a href="advanced_search.php#search">Tapetes</a></li>
								<li><a href="advanced_search.php#search">Teclados</a></li>
							</ul>
						</li>

						<li class="col-sm-6">
							<ul>
								<li class="dropdown-header">Audio</li>
								<li><a href="advanced_search.php#search">Auriculares</a></li>
								<li><a href="advanced_search.php#search">Colunas</a></li>
								<li><a href="advanced_search.php#search">Headphones</a></li>
								<li><a href="advanced_search.php#search">Microfones</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Armazenamento <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-large row">
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Armaz. Int</li>
								<li><a href="advanced_search.php#search">SSD</a></li>
								<li><a href="advanced_search.php#search">HDD</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Armaz. Ext</li>
								<li><a href="advanced_search.php#search">USB 2.5</a></li>
								<li><a href="advanced_search.php#search">USB 3.5</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Cartões Mem.</li>
								<li><a href="advanced_search.php#search">SD</a></li>
								<li><a href="advanced_search.php#search">MicroSD</a></li>
								<li><a href="advanced_search.php#search">CompactFlash</a></li>
							</ul>
						</li>
						<li class="col-sm-3">
							<ul>
								<li class="dropdown-header">Pen Drives</li>
								<li><a href="advanced_search.php#search">USB 2.0</a></li>
								<li><a href="advanced_search.php#search">USB 3.0</a></li>
								<li><a href="advanced_search.php#search">USB 3.1</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>


	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img id="img_logo" src="resources/logo.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

				<!-- Begin # DIV Form -->
				<div id="div-forms">

					<!-- Begin # Login Form -->
					<form id="login-form">
						<div class="modal-body">
							<div id="div-login-msg">
								<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-login-msg">Digita o teu username e a tua password.</span>
							</div>
							<input id="login_username" class="form-control" type="text" placeholder="Username" required>
							<input id="login_password" class="form-control" type="password" placeholder="Password" required>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Lembrar-me
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
							</div>
							<div>
								<button id="login_lost_btn" type="button" class="btn btn-link">Perdeu a password?</button>
								<button id="login_register_btn" type="button" class="btn btn-link">Registar-se</button>
							</div>
						</div>
					</form>
					<!-- End # Login Form -->

					<!-- Begin | Lost Password Form -->
					<form id="lost-form" style="display:none;">
						<div class="modal-body">
							<div id="div-lost-msg">
								<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-lost-msg">Introduz o teu email.</span>
							</div>
							<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
							</div>
							<div>
								<button id="lost_login_btn" type="button" class="btn btn-link">Login</button>
								<button id="lost_register_btn" type="button" class="btn btn-link">Registar</button>
							</div>
						</div>
					</form>
					<!-- End | Lost Password Form -->

					<!-- Begin | Register Form -->
					<form id="register-form" style="display:none;">
						<div class="modal-body">
							<div id="div-register-msg">
								<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-register-msg">Registar uma nova conta.</span>
							</div>
							<input id="register_username" class="form-control" type="text" placeholder="Username" required>
							<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
							<input id="register_password" class="form-control" type="password" placeholder="Password" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Registar</button>
							</div>
							<div>
								<button id="register_login_btn" type="button" class="btn btn-link">Login</button>
								<button id="register_lost_btn" type="button" class="btn btn-link">Perdeu a password?</button>
							</div>
						</div>
					</form>
					<!-- End | Register Form -->

				</div>
				<!-- End # DIV Form -->

			</div>
		</div>
	</div>
	<!-- END # MODAL LOGIN -->




