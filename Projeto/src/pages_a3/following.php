<?php
include('templates/headerAT.php');
?>
	<div class="big-container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p class="following_header">
				<h2>A seguir</h2> </p>
				<hr class="half-rule-following"/>
			</div>
		</div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default panel-table">
					<div class="panel-body">
						<table class="table table-striped table-bordered table-list" id="following">
							<thead>
							<tr>
								<th><em class="fa fa-cog"></em></th>
								<th>Utilizador</th>
								<th class="hidden-xs">Leilões Atuais</th>
								<th>Contactar</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td align="center">
									<a class="btn btn-danger">Deixar de seguir</a>
								</td>
								<td><a href="viewUserProfile.php">Manel</a></td>
								<td class="hidden-xs">
									<a href="othersAuctions.php" class="btn btn-info">
										<div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
									</a>
								</td>
								<td align="center">
									<a href="sendMessage.php" class="btn btn-info"><em class="fa fa-envelope"></em></a>
								</td>
							</tr>
							</tbody>
							<tbody>
							<tr>
								<td align="center">
									<a class="btn btn-danger">Deixar de seguir</a>
								</td>
								<td><a href="viewUserProfile.php">Jaquim</a></td>
								<td class="hidden-xs">
									<a href="othersAuctions.php" class="btn btn-info">
										<div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
									</a>
								</td>
								<td align="center">
									<a href="sendMessage.php" class="btn btn-info"><em class="fa fa-envelope"></em></a>
								</td>
							</tr>
							</tbody>
							<tbody>
							<tr>
								<td align="center">
									<a class="btn btn-danger">Deixar de seguir</a>
								</td>
								<td><a href="viewUserProfile.php">Alfredo</a></td>
								<td class="hidden-xs">
									<a href="othersAuctions.php" class="btn btn-info">
										<div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
									</a>
								</td>
								<td align="center">
									<a href="sendMessage.php" class="btn btn-info"><em class="fa fa-envelope"></em></a>
								</td>
							</tr>
							</tbody>
							<tbody>
							<tr>
								<td align="center">
									<a class="btn btn-danger">Deixar de seguir</a>
								</td>
								<td><a href="viewUserProfile.php">Jorge</a></td>
								<td class="hidden-xs">
									<a href="othersAuctions.php" class="btn btn-info">
										<div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
									</a>
								</td>
								<td align="center">
									<a href="sendMessage.php" class="btn btn-info"><em class="fa fa-envelope"></em></a>
								</td>
							</tr>
							</tbody>
							<tbody>
							<tr>
								<td align="center">
									<a class="btn btn-danger">Deixar de seguir</a>
								</td>
								<td><a href="viewUserProfile.php">Biscoito</a></td>
								<td class="hidden-xs">
									<a href="othersAuctions.php" class="btn btn-info">
										<div class="glyphicon glyphicon-shopping-cart"></div> Leilões disponíveis
									</a>
								</td>
								<td align="center">
									<a href="sendMessage.php" class="btn btn-info"><em class="fa fa-envelope"></em></a>
								</td>
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