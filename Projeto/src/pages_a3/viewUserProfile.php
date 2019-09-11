<?php
	include('templates/headerAT.php');
?>

<div class="container">


	<hr/>
  <!--Informacao de perfil -->
    <div class="row">
      <center>
        <div class="col-md-12">
          <div class="perfil_img">
            <img src="http://placehold.it/100x100" class="img-circle" alt="" width="150" height="150">
          </div>
          <div class="username">
            <p style="font-weight: bold; font-size:20px">Gervásio</p>
          </div>
          <div class="reputacao">
						<img src="resources/ratingimg.png" class="img-responsive" alt="Cinque Terre">
          </div>
					<div class="reputacao">
						<p>email@exemplo.com</p>
					</div>
					<div class="cidade">
						<p>Porto</p>
						<br>
					</div>
        </div>
      </center>
    </div>
		<!-- Botoes -->
		<div class="row">
			<div class="col-md-4">
				<a href="sendMessage.php" class="btn btn-success btn-lg btn-block" role="button">Enviar Mensagem</a>
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-warning btn-lg btn-block">Seguir</button>
			</div>
			<div class="col-md-4">
				<a class="btn btn-info btn-lg btn-block" data-toggle="collapse" href="#tabela" aria-expanded="false" aria-controls="collapseExample">
					Feedback
				</a>
			</div>
		</div>

		<!--Conteudo-->
		    <div class="row">

					<div class="collapse" id="tabela">
						<div class="card card-block">
							<!--Tabela-->
							<center>
								<div class="table-responsive">
									<table id="mytable" class="table table-bordred table-striped">
										<thead>
											<th>Leilão</th>
											<th>Utilizador</th>
											<th>Avaliação</th>
											<th>Comentário</th>
										</thead>
										<tbody>
											<tr>
												<td><a href="productPage.php">Nvidia GTX 1080</a> </td>
												<td><a href="viewUserProfile.php">António</a> </td>
												<td>5</td>
												<td>Entrega rápida e produto como descrito</td>
											</tr>
											<tr>
												<td><a href="productPage.php">Nvidia GTX 1060</a> </td>
												<td><a href="viewUserProfile.php">Gervásio</a></td>
												<td>5</td>
												<td>Sem problemas</td>
											</tr>
											<tr>
												<td><a href="productPage.php">Monitor xpto</a> </td>
												<td><a href="viewUserProfile.php">Manuel</a></td>
												<td>1</td>
												<td>Item chegou danificado</td>
											</tr>
										</tbody>
									</table>

									<div class="clearfix"></div>
									<ul class="pagination pull-right">
										<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
									</ul>
								</div>
							</center>

						</div>
					</div>
				</div>



  </div>
  <hr/>

<?php
include('templates/footer.php');
?>
