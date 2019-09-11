<?php
	include('templates/headerAT.php');
?>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="editarPerfil_header">
				<h2>Editar Perfil</h2> </p>
				<hr class="half-rule-editarPerfil"/>
			</div>
		</div>


	<div class="row">
      <!-- Imagem -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload imagem de perfil</h6>
          <input type="file" class="form-control">
        </div>
      </div>

      <!-- Informação -->
      <div class="col-md-5">
        <h2 style="margin-top:20px;">Informação</h2>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Primeiro Nome:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Gervásio">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Último Nome:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Silva">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Empresa:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="exemplo@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Confirmar password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Guardar">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>





<?php
include('templates/footer.php');
?>
