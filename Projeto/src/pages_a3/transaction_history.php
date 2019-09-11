<?php
	include('templates/headerAT.php');
?>

<div class="big-container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p class="mytransitions_header">
			<h2>Histórico de Transações</h2> </p>
			<hr class="half-rule-history"/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default panel-table">
				<div class="panel-body">
					<table class="table table-striped table-bordered table-list table-hover" id="mytransitions">
						<thead>
						<tr>
							<th>Produto/Leilão</th>
							<th class="hidden-xs">Comprado a/Comprador</th>
							<th>
								<div class="checkboxTransitions">
									<label>
										<input type="checkbox" value="" checked>
										<span class="crTransitions"><i class="cr-icon-transitions fa fa-check"></i></span>
										Venda
									</label>
									<label>
										<input type="checkbox" value="" checked>
										<span class="crTransitions"><i class="cr-icon-transitions fa fa-check"></i></span>
										Compra
									</label>
								</div></th>
							<th>Data</th>
							<th>Preço</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><a href="productSold.php">Headphones Razer</a></td>
							<td class="hidden-xs"><a href="viewUserProfile.php">Manuel</a></td>
							<td>Venda</td>
							<td>04/10/2016</td>
							<td>200€</td>
						</tr>
						</tbody>
						<tbody>
						<tr>
							<td><a href="productSold.php">Asus A+</a></td>
							<td class="hidden-xs"><a href="viewUserProfile.php">Alfredo</a></td>
							<td>Venda</td>
							<td>04/10/2016</td>
							<td>78.10€</td>
						</tr>
						</tbody>
						<tbody>
						<tr>
							<td><a href="productSold.php">Tapete Steel Series</a></td>
							<td class="hidden-xs"><a href="viewUserProfile.php">Biscoito</a></td>
							<td>Compra</td>
							<td>03/10/2016</td>
							<td>150.99€</td>
						</tr>
						</tbody>
						<tbody>
						<tr>
							<td><a href="productSold.php">Computador Asus XL50</a></td>
							<td class="hidden-xs"><a href="viewUserProfile.php">Asdrubal</a></td>
							<td>Compra</td>
							<td>02/10/2016</td>
							<td>29.50€</td>
						</tr>
						</tbody>
						<tbody>
						<tr>
							<td><a href="productSold.php">Samsung Galaxy S6</a></td>
							<td class="hidden-xs"><a href="viewUserProfile.php">Manuela</a></td>
							<td>Venda</td>
							<td>01/10/2016</td>
							<td>400€</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<div class="paginate">
						<ul class="pagination">
							<li><a href="#" rel="prev" class="page-prev"><span
										class="glyphicon glyphicon-chevron-left"></span></a></li>
							<li class="active "><span>1</span></li>
							<li><a href="#" class=" ">2</a></li>
							<li><a href="#" class=" ">3</a></li>
							<li><a href="#" rel="next" class="page-next"><span
										class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	include('templates/footer.php');
?>
