{include file='common/header.tpl' title="Editar perfil"}

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="editarPerfil_header">
				<h2>Editar Perfil - {$Username}</h2> </p>
				<hr class="half-rule-editarPerfil"/>
			</div>
		</div>

	<div class="row">
      <form id="editform" action="{$BASE_URL}actions/users/editUserProfile.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

      <div class="col-md-3">
        <div class="text-center">
          <img src="{$BASE_URL}{$ImgSrc}" class="avatar img-circle" alt="avatar">
          <h6>Upload imagem de perfil</h6>
          <input type="file" name="imgfile" class="form-control">
        </div>
      </div>


      <div class="col-md-5">
        <h2 style="margin-top:20px;">Informação</h2>


          <div class="form-group">
            <label class="col-lg-3 control-label">Nome:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{$Nome}"  name="nome" id="nome">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">País:</label>
            <div class="col-lg-8">

              <select name="paisselected">
                  {foreach $Pais as $key => $value}
                      {if $key == $UserPais}
                        <option value="{$key}" selected> {$value.nome} </option>";
                      {else}
                        <option value="{$key}" > {$value.nome} </option>";
                      {/if}
                  {/foreach}
              </select>

            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Género:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{$Genero}"  name="genero" id="genero">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="{$Email}"  name="email" id="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value=""  name="password" id="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Confirmar password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" value=""  name="passwordconf" id="passwordconf">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="hidden" name="usernameconf" value="{$Username}">
              <input type="hidden" name="imgsrc" value="{$ImgSrc}">
              <input type="submit" class="btn btn-primary" value="Guardar" name="submit">
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>


      </div>
  </div>
</div>
<hr>




{include file='common/footer.tpl'}
