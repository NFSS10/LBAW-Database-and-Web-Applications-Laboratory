<?php
	include('templates/header.php');
?>

	<div class="container" id="thumbnail">

		<p class="thumbnail_header"> <h2>Leilões Recentes</h2> </p>
		<hr class="half-rule"/>

		<div class="row" id="thumb">
			<div class="thumbnails">
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/pen.jpg" alt="Pen USB 16GB"/>
						<div class="caption">
							<h4 class="item-name">Pen USB 16GB</h4>
							<p class="auction-price">2.39€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/samsung_s7.jpg" alt="Samsung Galaxy S7">
						<div class="caption">
							<h4 class="item-name">Samsung Galaxy S7</h4>
							<p class="auction-price">240€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/dell-laptop.jpg" alt="Portatil Dell">
						<div class="caption">
							<h4 class="item-name">Portátil Dell XPS-13</h4>
							<p class="auction-price">300€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/Gtx-1080.png"  alt="GeForce 1080">
						<div class="caption">
							<h4 class="item-name">Gráfica GeForce 1080</h4>
							<p class="auction-price">169.4€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/PS3-super-slim.jpg" alt="PS3-super-slim">
						<div class="caption">
							<h4 class="item-name">PS3 Super Slim</h4>
							<p class="auction-price">96.9€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/hyperX-cloud-stinger.jpg" alt="HyperX-Cloud-Stinger">
						<div class="caption">
							<h4 class="item-name">HyperX Cloud Stinger</h4>
							<p class="auction-price">23.4€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/rival-300.jpg" alt="SteelSeries Rival 300">
						<div class="caption">
							<h4 class="item-name">SteelSeries Rival 300</h4>
							<p class="auction-price">27.4€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/microsoft_surface.jpg" alt="Microsoft Surface 2">
						<div class="caption">
							<h4 class="item-name">Microsoft Surface 2</h4>
							<p class="auction-price">570€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="paginate">
			<ul class="pagination">
				<li><a href="#"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
				<li class="active "><span>1</span></li>
				<li><a href="#" class=" ">2</a></li>
				<li><a href="#" class=" ">3</a></li>
				<li><a href="#" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>

<?php
	include('templates/footer.php');
?>