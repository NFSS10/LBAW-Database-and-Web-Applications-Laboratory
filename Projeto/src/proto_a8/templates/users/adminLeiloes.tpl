{include file='common/header.tpl' title="Gerir leilões"}
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
								<h2>Leiloes</h2> </p>
								<hr class="half-rule-leiloesadmin"/>
							</div>
						</div>
        <div class="table-responsive">


              <table id="mytable" class="display responsive nowrap" width="100%" cellspacing="0">

                   <thead>
					 <th class="all">Titulo</th>
                     <th class="desktop">Username</th>
                     <th class="desktop">Email</th>
					 <th class="desktop">Data do fim</th>
                  
                     <th class="desktop">Apagar</th>
                   </thead>
    <tbody>
	{foreach $Leiloes as $leilao}
		<tr>
		<td><img src='{$BASE_URL}{$leilao['imagepath']}' class="img" alt='leilao {$leilao['titulo']} foto' width="30" height="30">	<a href='../auctions/productPage.php?id={$leilao[$IdLeilaoKey]}'>{$leilao['titulo']}</a> </td>
		<td><a href='./viewProfile.php?id={$leilao['idutilizador']}'>{$leilao['username']}</a></td>
		<td>{$leilao['email']}</td>
		<td>{$leilao['data_final']}</td>
		<td><p data-placement="top" data-toggle="tooltip" title="Ban">
			<form onsubmit="return confirm('Quer mesmo realizar esta accao?');" action="{$BASE_URL}actions/users/removerLeilao.php" method="post">
				<button name="idleilao" value={$leilao[$IdLeilaoKey]} class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button>
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
