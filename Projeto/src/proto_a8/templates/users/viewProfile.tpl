{include file='common/header.tpl' title="Perfil de utilizador"}
<div class="container">
	<hr/>
  <!--Informacao de perfil -->
   <script type="text/javascript" src="{$BASE_URL}javascript/stars.js"></script>
  
   
    <div class="row">
      <div class="centerDiv">
        <div class="col-md-12">
          <div class="perfil_img">
            <img src="{$BASE_URL}{$Foto}" class="img-circle" alt='{$Nome} foto' width="150" height="150">
          </div>
          <div class="username">
            <p style="font-weight: bold; font-size:20px">{$Nome}</p>
          </div>
		  <div class="reputacao">
				<p>Ratings: {$Count}</p>
		  </div>
		<div>
	  <div class="col-md-12">	  
		<div style="text-align: center;">
		<div style="display: inline-block; text-align: left">
		 <p><span class="stars" align="left">{$Rating}</span> </p>
		</div>
		</div>
	  </div> 
		<div class="col-md-12">	  
			<div class="reputacao">
				<p>{$Email}</p>
			</div>
			<div class="cidade">
							<p>{$Pais}</p>
							<br>
			</div>
			</div>
			</div>
			</div>
		</div>
		<!-- Botoes -->
		<div class="row">
			{if $Nome == $YourUsername}
			<div class="col-md-4">
				<a class="btn btn-success btn-lg btn-block" role="button" disabled>Enviar Mensagem</a>
			</div>
			{else}
			<div class="col-md-4">
				<a href="{$BASE_URL}pages/users/sendMessage.php?id={$UserId}" class="btn btn-success btn-lg btn-block" role="button">Enviar Mensagem</a>
			</div>
			{/if}
			
				<div class="col-md-4">
					{if $IsAdmin || $Nome == $YourUsername}
						<form action="{$BASE_URL}actions/users/unfollow.php" method="get">
							<button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value={$UserId} disabled>Seguir</button>
						</form>
					{elseif $IsFollower}
						<form action="{$BASE_URL}actions/users/unfollow.php" method="get">
							<button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value={$UserId} >Não Seguir</button>
						</form>
					{else}
						<form action="{$BASE_URL}actions/users/follow.php" method="post">
							<button type="submit" class="btn btn-warning btn-lg btn-block" name="id" value={$UserId} >Seguir</button>
						</form>
					{/if}
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
							<div class="centerDiv">
								<div class="table-responsive">
									<table id="mytable" class="table ">
										<thead>
											<th>Leilão</th>
											<th>Utilizador</th>
											<th>Avaliação</th>
											<th>Comentário</th>
										</thead>
										<tbody>
											{foreach $Feedbacks as $feed }
													<tr>
														<td><a href='{$BASE_URL}/pages/auctions/productPage.php?id={$feed['idleilão']}'>{$feed['titulo']}</a> </td>
														<td><a href='{$BASE_URL}/pages/users/viewProfile.php?id={$feed['comprador']}'>{$feed['compradorname']}</a> </td>
														<td>{$feed['pontuação']}</td>
														<td>{$feed['comentário']}</td>
													</tr>
											{/foreach}
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>



  </div>
  <hr/>
</div>
{include file='common/footer.tpl'}
<script>
$(document).ready(function() {
    $('#mytable').DataTable( {
			"language": {
            "lengthMenu": "Mostrar _MENU_ feedbacks por página",
            "zeroRecords": "Não foi encontrado",
            "info": "",
			"search": "Procurar:",
            "infoEmpty": "Não existem registos",
            "infoFiltered": "(filtrado de _MAX_ registos totais)"
		
		}
		
        });
} );
</script>

