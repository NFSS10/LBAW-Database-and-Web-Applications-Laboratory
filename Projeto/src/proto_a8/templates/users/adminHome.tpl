{include file='common/header.tpl' title="Administração"}

<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminPage.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminHome.css">
</head>
<div id="all">
{include file='common/adminPainel.tpl'}
 <div class="container" id="adminInfo">

	 <div class="row">
		 <div class="col-lg-12">
			 <p class="comentarios_header">
				 <h2>Users Recentes</h2> </p>
				 <hr class="half-rule-usersRecentes"/>
			 </div>
		 </div>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
			{foreach $Users as $user}
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail user">
							<img src="{$BASE_URL}{$user['foto']}" class="img-circle" alt='{$user['username']} foto' width="100" height="100">
							<div class="caption">
								<a href='{$BASE_URL}pages/users/viewProfile.php?id={$user['idutilizador']}'><h3 align="center">{$user['username']}</h3></a>
							</div>
						</div>
					</div>
				</div>
			{/foreach}
		 </div>
<p class="thumbnail_header"> <h2>Leiloes Recentes</h2> </p>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
				{foreach $Leiloes as $leilao} 
					<div class="thumbnails">
						<div class="col-md-3">
							<div class="thumbnail">
								<a href="{$BASE_URL}pages/auctions/productPage.php?id={$leilao['idleilão']}">
									<img src="{$BASE_URL}{$leilao['imagepath']}" alt='{$leilao['titulo']} foto leilao'>
								</a>
							<div class="caption">
								<h4>{$leilao['titulo']}</h4>
								<textarea readonly style="width: 100%; -webkit-box-sizing: border-box;  -moz-box-sizing: border-box; box-sizing: border-box; resize:none " >{$leilao['descrição']}</textarea>
								<p align="center"><a href='{$BASE_URL}pages/auctions/productPage.php?id={$leilao['idleilão']}'class="btn btn-primary btn-block">Abrir</a>
								</p>
							</div>
						</div>
						</div>
					</div>
				{/foreach}
		 </div>
		 <p class="thumbnail_header"> <h2>Mensagens Recentes</h2> </p>
		<hr class="half-rule"/>
		 <div class="row" id="thumb">
		 
				{foreach $Mensagens as $mensagem}
				<div class="thumbnails">
					<div class="col-md-3">
						<div class="thumbnail">
							<a href="#"> <img src="http://placehold.it/100x100"  class="img-circle" alt="Message icon" width="100" height="100"></a>
							<div class="caption">
								<p>User:<a href="{$BASE_URL}pages/users/viewProfile.php?id={$mensagem['idremetente']}"> {$mensagem['username']}</a></p>
								<p>Assunto: {$mensagem['titulo']} </p>

							</div>
						</div>
					</div>
				</div>
				{/foreach}
		 </div>
 </div>
 </div>
{include file='common/footer.tpl'}