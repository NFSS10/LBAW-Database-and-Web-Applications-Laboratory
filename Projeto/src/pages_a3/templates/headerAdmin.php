<!DOCTYPE html>
<html>
<head>
    <title>ForBid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/imagePreview.js"></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/log_reg.css">
    <link rel="stylesheet" type="text/css" href="css/myAuctions.css">
    <link rel="stylesheet" type="text/css" href="css/myBids.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/newAuction.css">
    <link rel="stylesheet" type="text/css" href="css/editAuction.css">
    <link rel="stylesheet" type="text/css" href="css/productPage.css">
    <link rel="stylesheet" type="text/css" href="css/following.css">
    <link rel="stylesheet" type="text/css" href="css/transaction_history.css">
    <link rel="stylesheet" type="text/css" href="css/questions.css">
    <link rel="stylesheet" type="text/css" href="css/advanced_search.css">
    <link rel="stylesheet" type="text/css" href="css/adminComentarios.css">
    <script src="js/back-to-top.js"></script>
    <script src="js/select.js"></script>
</head>

<body>
<div class="no-container">
    <nav class="navbar navbar-default navbar-fixed-top" id="main_navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexAdmin.php">
                    <img src="resources/logo.png" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#footer">Sobre nós</a></li>
                    <li><a href="contact.php#search">Contacta-nos</a></li>
                    <li><a href="#" class="glyphicon glyphicon-envelope"><span class="badge">5</span></a></li>
                    <li><a href="#" class="glyphicon glyphicon-exclamation-sign"><span class="badge">1</span></a></li>
                    <li class="dropdown">  <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img class="img-rounded" id="profile_image" src="resources/default_avatar.png" alt="Avatar" width="30" height="30"> Username <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="UserPanel">
                            <li class="dropdown-plus-title" id="icon_up">
                                <b class="pull-right glyphicon glyphicon-chevron-up"></b>
                            </li>
							<li><a href="viewUserProfile.php">Perfil</a></li>
                            <li><a href="adminHome.php"> Administração</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php"><span class="glyphicon glyphicon-off" id="logout_icon"></span> Logout</a></li>
                        </ul>
                    </li>
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
                                <li><a href="#">Desktops</a></li>
                                <li><a href="#">Híbridos</a></li>
                                <li><a href="#">Portáteis</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Consolas <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-large row">
                        <li class="col-sm-6">
                            <ul>
                                <li class="dropdown-header">Microsoft</li>
                                <li><a href="#">Xbox 360</a></li>
                                <li><a href="#">Xbox One</a></li>
                            </ul>
                        </li>

                        <li class="col-sm-6">
                            <ul>
                                <li class="dropdown-header">Sony</li>
                                <li><a href="#">PlayStation3</a></li>
                                <li><a href="#">PlayStation4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Periféricos <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-large row">
                        <li class="col-sm-6">
                            <ul>
                                <li class="dropdown-header">Ratos/Teclados</li>
                                <li><a href="#">Acessórios</a></li>
                                <li><a href="#">Ratos</a></li>
                                <li><a href="#">Tapetes</a></li>
                                <li><a href="#">Teclados</a></li>
                            </ul>
                        </li>

                        <li class="col-sm-6">
                            <ul>
                                <li class="dropdown-header">Audio</li>
                                <li><a href="#">Auriculares</a></li>
                                <li><a href="#">Colunas</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Microfones</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-large"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Armazenamento <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-large row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Armaz. Int</li>
                                <li><a href="#">SSD</a></li>
                                <li><a href="#">HDD</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Armaz. Ext</li>
                                <li><a href="#">USB 2.5</a></li>
                                <li><a href="#">USB 3.5</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Cartões Mem.</li>
                                <li><a href="#">SD</a></li>
                                <li><a href="#">MicroSD</a></li>
                                <li><a href="#">CompactFlash</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Pen Drives</li>
                                <li><a href="#">USB 2.0</a></li>
                                <li><a href="#">USB 3.0</a></li>
                                <li><a href="#">USB 3.1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="loginmodal-container">
                <h1>Login to Your Account</h1><br>
                <form class="form-horizontal" method="post" action="#">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="username"
                                   placeholder="Enter your Username"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon" id="log_pw"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="login_button">
                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    </div>
                </form>

                <div class="is_member">
                    <span> Don't have an account yet? Register<a href="#register-modal" data-toggle="modal" data-dismiss="modal"> here!</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="regmodal-container">
                <h1>Register to ForBid</h1><br>
                <form class="form-horizontal" method="post" action="#">

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"
                                       placeholder="Enter your Username"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="confirm" id="confirm"
                                       placeholder="Confirm your Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="register_button">
                        <input type="submit" name="register" class="registermodal-submit" id="reg_modal-submit" value="Register">
                    </div>

                    <div class="is_member">
                        <span> Are you already a member? <a href="#login-modal" data-toggle="modal" data-dismiss="modal">Log in</a></span>
                    </div>

                </form>
            </div>
        </div>
    </div>
