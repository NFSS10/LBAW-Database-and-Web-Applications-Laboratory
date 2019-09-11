<?php
include('templates/headerAT.php');
?>

<div class="container">
	<div class="row">
		<p class="mytransitions_header">
		<h2>Resultados da Pesquisa</h2> </p>
		<hr class="half-rule-results"/>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="input-group" id="adv-search">
				<input type="text" class="form-control" placeholder="Pesquisa Avançada" value="Computador" />
				<div class="input-group-btn">
					<div class="btn-group" role="group">
						<div class="dropdown dropdown-lg">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
							<div class="dropdown-menu dropdown-menu-right" role="menu">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="filter">Ordenar por</label>
										<select class="form-control">
											<option value="0" selected></option>
											<option value="1">Categoria</option>
											<option value="2">Comentários</option>
											<option value="3">Pontuação Utilizador</option>
											<option value="3">Preço</option>
										</select>
									</div>
									<div class="form-group">
										<label for="contain">Ordenação</label>
										<select class="form-control">
											<option value="0" selected></option>
											<option value="1">Crescente</option>
											<option value="2">Decrescente</option>
										</select>
									</div>
									<div class="form-group">
										<label for="contain">Autor</label>
										<input class="form-control" type="text" />
									</div>
									<div class="form-group">
										<label for="contain">Contêm as palavras</label>
										<input class="form-control" type="text" />
									</div>
									<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
								</form>
							</div>
						</div>
						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="thumbnail">

		<div class="row" id="thumb">
			<div class="thumbnails">
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/dell-laptop.jpg" alt="Portatil Dell">
						<div class="caption">
							<h4 class="item-name">Dell XPS-13</h4>
							<p class="auction-price">300€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/Asus%20F541UV-56A92CB4.jpg"  alt="Asus F541UV-56A92CB4">
						<div class="caption">
							<h4 class="item-name">Asus F541UV-56A92CB4</h4>
							<p class="auction-price">290€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/Asus%20A541UV-76C92PB1.jpg" alt="Asus A541UV-76C92PB1">
						<div class="caption">
							<h4 class="item-name">Asus A541UV-76C92PB1</h4>
							<p class="auction-price">205€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/HP%20Spectre%20x360%2013-w000np.jpg" alt="HP Spectre x360 13-w000np">
						<div class="caption">
							<h4 class="item-name">HP Spectre x360 13-w000np</h4>
							<p class="auction-price">500€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/HP%20OMEN%2015-ax001np.jpg" alt="HP OMEN 15-ax001np">
						<div class="caption">
							<h4 class="item-name">HP OMEN 15-ax001np</h4>
							<p class="auction-price">400€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="thumbnail">
						<img src="resources/products/Lenovo%20Ideapad%20310-15IKB.jpg" alt="Lenovo Ideapad 310-15IKB">
						<div class="caption">
							<h4 class="item-name">Lenovo Ideapad 310-15IKB</h4>
							<p class="auction-price">350€</p>
						</div>
						<p class="bid-btn" align="center"><a href="productPage.php" class="btn btn-primary btn-block">Licitar aqui</a></p>
					</div>
				</div>
			</div>
		</div>
	</div class="container">
	<div class="container">
		<div class="paginate">
			<ul class="pagination">
				<li><a href="#"rel="prev" class="page-prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
				<li class="active "><span>1</span></li>
				<li><a href="#" rel="next" class="page-next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php
include('templates/footer.php');
?>
