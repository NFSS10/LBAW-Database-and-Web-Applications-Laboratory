<?php
	include('templates/headerAT.php');
?>
<!--Titulo-->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="editarPerfil_header">
				<h2>Enviar Mensagem Privada</h2> </p>
				<hr class="half-rule-enviarmensagem"/>
			</div>
		</div>

  <!--Inserir email ou username-->
  <div class="row">
    <div class="col-md-5 form-group">
      <input class="form-control" id="username" name="username" placeholder="Username" type="text" required autofocus />
    </div>
    <div class="col-md-1">
      <p class="text-center" style="margin-top:6px; font-weight: bold; font-size: 23px">ou</p>
    </div>
    <div class="col-md-6 form-group">
      <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
    </div>
  </div>

  <!--Titulo-->
	<div class="row">
		<input class="form-control" style="margin-top:10px; margin-bottom:6px;" id="titulo" name="titulo" placeholder="Título" type="text" required autofocus />
	</div>
	<!--Mensagem-->
  <div class="row">
    <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea>
  </div>

  <!--Botao Enviar-->
  <div class="row">
    <button type="button" class="btn btn-success btn-lg btn-block"
    style="margin-top:6px; padding-top:20px; padding-bottom:20px; font-size: 30px">
    Enviar
    </button>
  </div>

  <hr/>

</div>


<?php
include('templates/footer.php');
?>
