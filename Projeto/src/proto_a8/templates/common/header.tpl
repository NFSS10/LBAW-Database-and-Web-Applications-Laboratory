<!DOCTYPE html>
<html lang>
	<head>
		<title>{$title|default:"ForBid"}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminComentarios.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminHome.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminPage.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminUsers.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/home.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/footer.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/log_reg.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/myAuctions.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/myBids.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/contact.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/productPage.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/following.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/transaction_history.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/advanced_search.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/notFound.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/questions.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/userprofile.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/editAuction.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/editUserProfile.css">
		<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/newAuction.css">
		<script src="{$BASE_URL}javascript/main.js"></script>
		<script src="{$BASE_URL}javascript/back-to-top.js"></script>
		<script src="{$BASE_URL}javascript/login.js"></script>
		<script src="{$BASE_URL}javascript/select.js"></script>
		<script src="{$BASE_URL}javascript/transactionsHist.js"></script>
		<script src="{$BASE_URL}javascript/question.js"></script>
		<script src="{$BASE_URL}javascript/answer.js"></script>
		<script src="{$BASE_URL}javascript/notifications.js"></script>
		<script src="{$BASE_URL}javascript/private_messages.js"></script>
		<script src="{$BASE_URL}javascript/imagePreview.js"></script>
		<script src="{$BASE_URL}javascript/addImage.js"></script>
		<script src="{$BASE_URL}javascript/validateCC.js"></script>
		<script src="{$BASE_URL}javascript/newProduct.js"></script>
		<script src="{$BASE_URL}javascript/updateSubCategory.js"></script>
	</head>
<body>
<div class="no-container">
	<nav class="navbar-default navbar-fixed-top" id="main_navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{$BASE_URL}index.php">
					<img src="{$BASE_URL}resources/logo.png" alt="logo">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#footer">Sobre nós</a></li>
					<li><a href="{$BASE_URL}pages/users/contact.php">Contacta-nos</a></li>
                    	{if $ADMIN}
                            {include file='common/menu_logged_in_admin.tpl'}
                        {else}
							{if $USERNAME}
								{include file='common/menu_logged_in.tpl'}
							{else}
								{include file='common/menu_logged_out.tpl'}
							{/if}
                        {/if}
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
			<form action="{$BASE_URL}pages/auctions/search.php" method="get">
				<div class="input-group">
					<input name="query" type="text" class="form-control input-sm" placeholder="Procurar...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="submit"><span
									class="glyphicon glyphicon-search"></span></button>
					  </span>
				</div>
			</form>
		</div>
	</div>

	<nav class="navbar navbar-inverse bg-primary navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#categories">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="categories">
				<ul class="nav navbar-nav">
					{foreach $CATEGORIES as $key => $value}
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">{$key}
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							{foreach $value as $key1 => $value1}
								{foreach $value1 as $key2 => $value2}
								<li><a href="{$BASE_URL}pages/auctions/search.php?categoria={$value2}">{$key2}</a></li>
								{/foreach}
							{/foreach}
						</ul>
					</li>
					{/foreach}
				</ul>
			</div>
		</div>
	</nav>

	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" id="modal-h">
					<img id="img_logo" src="{$BASE_URL}resources/logo.png" alt="logo">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

				<!-- Begin # DIV Form -->
				<div id="div-forms">

					<!-- Begin # Login Form -->
					<form class="modalform" id="login-form">
						<div class="modal-body">
							<div id="div-login-msg">
								<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-login-msg">Digita o teu username e a tua password.</span>
							</div>
							<input id="login_username" class="form-control" type="text" placeholder="Username" required>
							<input id="login_password" class="form-control" type="password" placeholder="Password" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
							</div>
							<div>
								<button id="login_register_btn" type="button" class="btn btn-link">Registar-se</button>
							</div>
						</div>
					</form>
					<!-- End # Login Form -->
					<!-- Begin | Register Form -->
					<form class="modalform" id="register-form">
						<div class="modal-body">
							<div id="div-register-msg">
								<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
								<span id="text-register-msg">Registar uma nova conta.</span>
							</div>
							<input id="register_username" class="form-control" type="text" placeholder="Username" required>
							<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
							<input id="register_password" class="form-control" type="password" placeholder="Password" required>
							<input id="register_password2" class="form-control" type="password" placeholder="Repete a Password" required>
							<input id="register_bday" class="form-control dateclass placeholderclass" type="date" name="bday" placeholder="Data Nascimento" value="1990-01-01" onClick="$(this).removeClass('placeholderclass')" required>
						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Registar</button>
							</div>
							<div>
								<button id="register_login_btn" type="button" class="btn btn-link">Login</button>
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
	<div id="error_messages">
        {foreach $ERROR_MESSAGES as $error}
			<div class="error_message">{$error}<a class="close" href="#">X</a></div>
        {/foreach}
	</div>
	<div id="success_messages">
        {foreach $SUCCESS_MESSAGES as $success}
			<div class="success_message">{$success}<a class="close" href="#">X</a></div>
        {/foreach}
	</div>


