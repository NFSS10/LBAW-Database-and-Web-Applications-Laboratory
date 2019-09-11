<?php
include('templates/headerAdmin.php');
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/adminHome.css">
</head>
<div id="all">
 <?php
	include('templates/adminPainel.php');
 ?>
 <div class="container" id="adminInfo">

	 <div class="row">
		 <div class="col-lg-12">
			 <p class="comentarios_header">
				 <h2>Users Recentes</h2> </p>
				 <hr class="half-rule-usersRecentes"/>
			 </div>
		 </div>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail user">
							<img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="100" height="100">
							<div class="caption">
								<a href="./viewUserProfile.php"><h3 align="center">User 1</h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3" id="ola">
						<div class="thumbnail user">
							<img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="100" height="100">
							<div class="caption">
								<a href="./viewUserProfile.php"><h3 align="center">User 2</h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail user">
							<img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="100" height="100">
							<div class="caption">
								<a href="./viewUserProfile.php"><h3 align="center">User 3</h3></a>
							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail user">
							<img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="100" height="100">
							<div class="caption">
								<a href="./viewUserProfile.php"><h3 align="center">User 4</h3></a>
							</div>
						</div>
					</div>
				</div>
		 </div>
<p class="thumbnail_header"> <h2>Leiloes Recentes</h2> </p>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                            <h3>Header Name</h3>
                            <p>Description</p>
                            <p align="center"><a href="./productPage.php" class="btn btn-primary btn-block">Open</a>
                            </p>
                        </div>
                    </div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3" id="ola">
						<div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                            <h3>Header Name</h3>
                            <p>Description</p>
                            <p align="center"><a href="./productPage.php" class="btn btn-primary btn-block">Open</a>
                            </p>
                        </div>
                    </div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                            <h3>Header Name</h3>
                            <p>Description</p>
                            <p align="center"><a href="./productPage.php" class="btn btn-primary btn-block">Open</a>
                            </p>
                        </div>
                    </div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
                        <img src="http://placehold.it/320x200" alt="ALT NAME">
                        <div class="caption">
                            <h3>Header Name</h3>
                            <p>Description</p>
                            <p align="center"><a href="./productPage.php" class="btn btn-primary btn-block">Open</a>
                            </p>
                        </div>
                    </div>
					</div>
				</div>
		 </div>
		 <p class="thumbnail_header"> <h2>Mensagens Recentes</h2> </p>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="#"> <img src="http://placehold.it/100x100"  class="img-circle" alt="Cinque Terre" width="100" height="100"></a>
							<div class="caption">
								<p>User:<a href="#"> User1</a></p>
								<p>Assunto: Assunto. </p></a>

							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3" id="ola">
						<div class="thumbnail">
							<a href="#"> <img src="http://placehold.it/100x100"  class="img-circle" alt="Cinque Terre" width="100" height="100"></a>
							<div class="caption">
								<p>User:<a href="#"> User1</a></p>
								<p>Assunto: Assunto. </p></a>

							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="#"> <img src="http://placehold.it/100x100"  class="img-circle" alt="Cinque Terre" width="100" height="100"></a>
							<div class="caption">
								<p>User:<a href="#"> User1</a></p>
								<p>Assunto: Assunto.</p> </a>

							</div>
						</div>
					</div>
				</div>
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="#"> <img src="http://placehold.it/100x100"  class="img-circle" alt="Cinque Terre" width="100" height="100"></a>
							<div class="caption">
								<p>User:<a href="#"> User1</a></p>
								<p>Assunto: Assunto.</p> </a>

							</div>
						</div>
					</div>
				</div>
		 </div>
 </div>
 </div>
<?php

	include('templates/footer.php');
?>
