<?php
	include('templates/headerAT.php');
?>



<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="editarPerfil_header">
				<h2>Mensagens</h2> </p>
				<hr class="half-rule-mensagens"/>
			</div>
		</div>


	<!--Botoes-->
	<hr />
	<div class="row">
		<div class="col-md-1" style="margin-top:-30px;">
			<!--Titulo 2-->
			<h2>Recebidas</h2>
		</div>
	</div>

<div class="row">
	<div class="col-sm-2">
		<!--Botao Inbox-->
		<a href="#" class="btn btn-danger btn-sm btn-block btn-center" role="button">
			<span class="badge pull-right">4</span>
			Recebidas
		</a>
	</div>
		<div class="col-sm-2">
		<!--Botao Sent-->
		<a href="#" class="btn btn-danger btn-sm btn-block" role="button">Enviadas</a>
	</div>
</div>


	<!-- Bloco Lista Mensagens -->
	<div class="row">
		<div class="col">
			<!-- Mensagens-->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<div class="list-group">
						<a href="#msg1" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
							<span class="name" style="min-width: 120px;
							display: inline-block;  font-weight: bold;">Antonio</span>
							<span class="" style="font-weight: bold;">Mensagem Nao lida 1</span>
							<span class="text-muted" style="font-size: 11px;">coisa e tal</span>
							<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
							<span class="data" style="font-weight: bold;">01/01/2017</span>
							<p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><span class="glyphicon glyphicon-remove"></span></button></p>						</a>
						<!--ConteudoMensagem-->
						<div class="collapse" id="msg1">
							<p> coiso e tal mensagem Antonio conteudo exemplo bla bla bla bla bla bla
							bla bla bla bla bla bla bla bla bla bla bla bla
							bla bla bla bla bla blabla bla bla bla bla bla
						</p>
						</div>
						<a href="#msg2" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
							<span class="name" style="min-width: 120px;
							display: inline-block;  font-weight: normal;">Fernando</span>
							<span class="" style="font-weight: normal;">Mensagem Lida</span>
							<span class="text-muted" style="font-size: 11px;">coisa e tal</span>
							<span class="espaco" style="min-width: 214px; display: inline-block;">   </span>
							<span class="data" style="font-weight: normal;">01/01/2017</span>
							<p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><span class="glyphicon glyphicon-remove"></span></button></p>						</a>
						<!--ConteudoMensagem-->
						<div class="collapse" id="msg2">
							<p> coiso e tal mensagem Fernando conteudo exemplo bla bla bla bla bla bla
							bla bla bla bla bla bla bla bla bla bla bla bla
							bla bla bla bla bla blabla bla bla bla bla bla
						</p>
						</div>
						<a href="#msg3" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
							<span class="name" style="min-width: 120px;
							display: inline-block;  font-weight: bold;">Jose</span>
							<span class="" style="font-weight: bold;">Mensagem Nao lida 2</span>
							<span class="text-muted" style="font-size: 11px;">coisa e tal</span>
							<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
							<span class="data" style="font-weight: bold;">01/01/2017</span>
							<p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><span class="glyphicon glyphicon-remove"></span></button></p>
							</a>
						<!--ConteudoMensagem-->
						<div class="collapse" id="msg3">
							<p> coiso e tal mensagem Jose conteudo exemplo bla bla bla bla bla bla
							bla bla bla bla bla bla bla bla bla bla bla bla
							bla bla bla bla bla blabla bla bla bla bla bla
						</p>
						</div>
						<a href="#msg4" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
							<span class="name" style="min-width: 120px;
							display: inline-block;  font-weight: bold;">Mario</span>
							<span class="" style="font-weight: bold;">Mensagem Nao lida 3</span>
							<span class="text-muted" style="font-size: 11px;">coisa e tal</span>
							<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
							<span class="data" style="font-weight: bold;">01/01/2017</span>
							<p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><span class="glyphicon glyphicon-remove"></span></button></p>
						</a>
						<!--ConteudoMensagem-->
						<div class="collapse" id="msg4">
							<p>coiso e tal mensagem Mario conteudo exemplo bla bla bla bla bla bla
							bla bla bla bla bla bla bla bla bla bla bla bla
							bla bla bla bla bla blabla bla bla bla bla bla
						</p>
						</div>
						<a href="#msg5" class="list-group-item" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
							<span class="name" style="min-width: 120px;
							display: inline-block;  font-weight: bold;">Gervásio</span>
							<span class="" style="font-weight: bold;">Mensagem Nao lida 4</span>
							<span class="text-muted" style="font-size: 11px;">coisa e tal</span>
							<span class="espaco" style="min-width: 170px; display: inline-block;">   </span>
							<span class="data" style="font-weight: bold;">01/01/2017</span>
							<p style="float: right;" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><span class="glyphicon glyphicon-remove"></span></button></p>
						</a>
						<!--ConteudoMensagem-->
						<div class="collapse" id="msg5">
							<p> coiso e tal mensagem Fernando conteudo exemplo bla bla bla bla bla bla
							bla bla bla bla bla bla bla bla bla bla bla bla
							bla bla bla bla bla blabla bla bla bla bla bla
						</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
<div id="ordine" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<p>Eliminar a mensagem?</p>
			</div>
			<div class="modal-body">
				<div class="col-12-xs text-center">
						<button class="btn btn-success btn-md">Sim</button>
						<button class="btn btn-danger btn-md">Não</button>
				</div>
			</div>
		</div>

	</div>
</div>



	</div>
<hr />

</div>



<?php
include('templates/footer.php');
?>
