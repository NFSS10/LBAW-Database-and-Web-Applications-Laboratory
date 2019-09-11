<?php
	include('templates/headerAdmin.php');
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/adminUsers.css">
</head>
<div id="all">
 <?php
	include('templates/adminPainel.php');
 ?>
 <div class="container" id="adminInfo">
	<div class="row">


        <div class="col-md-12">
					<div class="row">
						<div class="col-lg-12">
							<p class="comentarios_header">
								<h2>Comentários</h2> </p>
								<hr class="half-rule-comentarios"/>
							</div>
						</div>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Titulo</th>
                     <th>Username</th>
                     <th>Email</th>
					 <th>Data</th>
                     <th>Abrir</th>
                   </thead>
    <tbody>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
    <td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment1" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment1" >
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment1">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="collapse" data-target="#comment1" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					<tr>
						<!--Mensagem-->
						<div class="collapse out" id="comment1">

						  <div class="form-group">
							<label for="msg1text">Editar:</label>
							<textarea class="form-control" rows="5" id="msg1text">Conteudo da mensagem 1</textarea>
							<center>
							  <div class="col-md-12">
								<button type="button" class="btn btn-success btn-sm btn-block">Salvar Altera��es</button>
							  </div>
							</center>
							<br>
						  </div>
						</div>
					</tr>

					</tr>

		</tr>
    </tr>

 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
    <td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment2" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment2" >
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment2">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="collapse" data-target="#comment2" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					<tr>
						<!--Mensagem-->
						<div class="collapse out" id="comment2">

						  <div class="form-group">
							<label for="msg1text">Editar:</label>
							<textarea class="form-control" rows="5" id="msg1text">Conteudo da mensagem 1</textarea>
							<center>
							  <div class="col-md-12">
								<button type="button" class="btn btn-success btn-sm btn-block">Salvar Altera��es</button>
							  </div>
							</center>
							<br>
						  </div>
						</div>
					</tr>

					</tr>

		</tr>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
	<td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment3" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment3" >
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment3">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="collapse" data-target="#comment3" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					<tr>
						<!--Mensagem-->
						<div class="collapse out" id="comment3">

						  <div class="form-group">
							<label for="msg1text">Editar:</label>
							<textarea class="form-control" rows="5" id="msg1text">Conteudo da mensagem 1</textarea>
							<center>
							  <div class="col-md-12">
								<button type="button" class="btn btn-success btn-sm btn-block">Salvar Altera��es</button>
							  </div>
							</center>
							<br>
						  </div>
						</div>
					</tr>

					</tr>

		</tr>
    </tr>



 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
	<td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
     <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment4" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment4" >
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment4">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="collapse" data-target="#comment4" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					<tr>
						<!--Mensagem-->
						<div class="collapse out" id="comment4">

						  <div class="form-group">
							<label for="msg1text">Editar:</label>
							<textarea class="form-control" rows="5" id="msg1text">Conteudo da mensagem 1</textarea>
							<center>
							  <div class="col-md-12">
								<button type="button" class="btn btn-success btn-sm btn-block">Salvar Altera��es</button>
							  </div>
							</center>
							<br>
						  </div>
						</div>
					</tr>

					</tr>

		</tr>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
	<td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
    </tr>
	<tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">	<a href="./productPage.php">Playstation 4</a> </td>
	<td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
	<td><p data-placement="top" data-toggle="tooltip" title="Open"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment5" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment5">
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment5">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					</tr>
					<tr class="collapse out comment5">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					</tr>
					<tr class="collapse out comment5">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					</tr>

		</tr>
   </tr>
	<tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img" alt="Cinque Terre" width="30" height="30">     <a href="./productPage.php">Playstation 4</a> </td>
	<td><a href="./viewUserProfile.php">Mohsin</a></td>
    <td>neo@gmail.com</td>
	<td>01/10/2016</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-warning btn-xs" data-toggle="collapse" data-target=".comment" ><span class="glyphicon glyphicon-plus"></span></button></p></td>
		<tr class="collapse out comment" >
				   <th> Comments </th>
				   <th><input type="checkbox" id="checkallComments" /></th>
                   <th>Username</th>
                   <th>Titulo</th>
				   <th>Data</th>
                   <th>Edit</th>
                   <th>Delete</th>

					<tr class="collapse out comment">
					<td>        </td>
					<td><input type="checkbox" class="checkthis" /></td>
					<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">lalaland</a> </td>
					<td>Produto impecavel!</td>
					<td>01/10/2016</td>
					<td><p data-placement="top" data-toggle="tooltip" align="left" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="collapse" data-target="#comment1" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
					<tr>
						<!--Mensagem-->
						<div class="collapse out" id="comment1">

						  <div class="form-group">
							<label for="msg1text">Editar:</label>
							<textarea class="form-control" rows="5" id="msg1text">Conteudo da mensagem 1</textarea>
							<center>
							  <div class="col-md-12">
								<button type="button" class="btn btn-success btn-sm btn-block">Salvar Altera��es</button>
							  </div>
							</center>
							<br>
						  </div>
						</div>
					</tr>

					</tr>

		</tr>
    </tr>




    </tbody>

</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

            </div>

        </div>
	</div>
</div>



</div>
<?php

	include('templates/footer.php');
?>
		<!--Conteudo-->
