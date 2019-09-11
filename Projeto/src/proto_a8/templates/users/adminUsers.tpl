{include file='common/header.tpl' title="Gerir utilizadores"}
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
								<h2>Utilizadores</h2> </p>
								<hr class="half-rule-adminUsers"/>
							</div>
						</div>
			<div class="table-responsive">
				<table id="mytable" class="display responsive nowrap" width="100%" cellspacing="0">

                   <thead>
					<th class="all">Username</th>
                    <th class="desktop">Email</th>
                    <th class="desktop">Data Nascimento</th>
					<th class="desktop">Ban/Activate</th>
                   </thead>
					<tbody>
					{foreach $Users as $user}
						<tr>
						<td><img src='{$BASE_URL}{$user['foto']}' class="img-circle" alt='{$user['username']} foto' width="30" height="30">	<a href='viewProfile.php?id={$user['idutilizador']}'>{$user['username']}</a> </td>
						<td>{$user['email']}</td>
						<td>{$user['datanascimento']}</td>
						<td><p data-placement="top" data-toggle="tooltip" title="Ban">
						{if $user['bloqueado']}
							<form onsubmit="return confirm('Quer mesmo realizar esta accao?');" action="{$BASE_URL}actions/users/unbanUser.php" method="post">
								<button name="idutilizador" value={$user['idutilizador']} class="btn btn-info btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-share-alt"></span></button><p style="visibility: hidden">--</p>
							</form>
						{else}
							<form onsubmit="return confirm('Quer mesmo realizar esta accao?');" action="{$BASE_URL}actions/users/banUser.php" method="post">
								<button name="idutilizador" value={$user['idutilizador']} class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button><p style="visibility: hidden">++</p>
							</form>
						{/if}
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