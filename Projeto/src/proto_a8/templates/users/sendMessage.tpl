{include file='common/header.tpl' title="Enviar mensagem"}


<div class="container">


    <div class="row">
        <div class="col-lg-12">
            <p class="editarPerfil_header">
				<h2>Enviar Mensagem Privada - {$usernameDestinatario}</h2> </p>
				<hr class="half-rule-enviarmensagem"/>
        </div>
    </div>


    <form role="form" method="post" action="{$BASE_URL}actions/users/sendMessage.php">

        <div class="row">
            <input class="form-control" style="margin-top:10px; margin-bottom:6px;" id="titulo" name="titulo" placeholder="Título" type="text" required autofocus />
        </div>

        <div class="row">
            <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5" required></textarea>
        </div>


        <div class="row">
            <input type="hidden" name="iddestinatario" value="{$idDestinatario}">
            <input type="hidden" name="idremetente" value="{$idRemetente}">
            <button type="submit" class="btn btn-success btn-lg btn-block"
                    style="margin-top:6px; padding-top:20px; padding-bottom:20px; font-size: 30px">
                Enviar
            </button>
        </div>
    </form>

  <hr/>

</div>
{include file='common/footer.tpl'}