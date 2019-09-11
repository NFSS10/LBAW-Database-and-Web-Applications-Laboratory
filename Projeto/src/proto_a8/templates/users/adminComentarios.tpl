{include file='common/header.tpl' title="Gerir comentários"}
<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/adminUsers.css">
</head>
<div id="all">
{include file='common/adminPainel.tpl'}
 <div class="container" id="adminInfo">
	<div class="row">


        <div class="col-md-12">
					<div class="row">
						<div class="col-lg-12">
							<p class="comentarios_header">
								<h2>Comentarios</h2> </p>
								<hr class="half-rule-comentarios"/>
							</div>
						</div>
        <div class="table-responsive">


              <table id="mytable" class="display responsive nowrap" width="100%" cellspacing="0">

                   <thead>
					 <th class="desktop">Username</th>
					 <th class="desktop">Leilao</th>
                     <th class="all">Questao </th>
                     <th class="desktop">Resposta</th>
					 <th class="desktop">Apagar</th>
                   </thead>
    <tbody>

	
	{foreach $Comments as $comment}
		
		<tr>
			<td><a href='./viewProfile.php?id={$comment['idutilizador']}'>{$comment['username']}</a></td>
			<td><img src='{$BASE_URL}{$comment['imagepath']}' class="img" alt='{$comment['titulo']} image'width="30" height="30">	<a href='../auctions/productPage.php?id={$comment[$LeilaoKey]}'>{$comment['titulo']}</a> </td>
			<td><textarea readonly style="width: 100%; -webkit-box-sizing: border-box;  -moz-box-sizing: border-box; box-sizing: border-box; resize:none " >{$comment[$QuestaoKey]}</textarea></td>
			{if $comment['nRespostas'] == 0}
				<td>Nao existem respostas</td>
			{else}
				<td><textarea readonly style="width: 100%; -webkit-box-sizing: border-box;  -moz-box-sizing: border-box; box-sizing: border-box; resize:none " >{$comment['respostas'][0]['resposta']}</textarea></td>
			{/if}
			<td>
			<p data-placement="top" data-toggle="tooltip" title="Ban">
			<form onsubmit="return confirm('Quer mesmo realizar esta accao?');" action="{$BASE_URL}actions/users/removerQuestao.php" method="post">
				<button name="idQuestao" value={$comment[$IdQuestaoKey]} class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button>
			</form>
			</p>
			</td>
		</tr>

		
	{/foreach}
   

   </tbody>

</table>

            </div>

        </div>
	</div>
</div>



</div>
{include file='common/footer.tpl'}
<script>
$(document).ready(function() {
    $('#mytable').DataTable( {
			"language": {
            "lengthMenu": "Mostrar _MENU_ utilizadores por pagina",
            "zeroRecords": "Não foi encontrado",
            "info": "",
			"search": "Procurar:",
            "infoEmpty": "Não existem registos",
            "infoFiltered": "(filtrado de _MAX_ registos totais)"
		
		}
		
		
        });
} );
</script>