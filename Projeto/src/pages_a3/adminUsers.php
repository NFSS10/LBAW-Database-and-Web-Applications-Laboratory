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
								<h2>Utilizadores</h2> </p>
								<hr class="half-rule-adminUsers"/>
							</div>
						</div>
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Username</th>
                     <th>Email</th>
                     <th>Contacto</th>
                      <th>Editar</th>

                       <th>Ban</th>
                   </thead>
    <tbody>

    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
	<td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>



 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
	<td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>


 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
	<td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>
 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">	<a href="./viewUserProfile.php">Mohsin</a> </td>
	<td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>
 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	<td><img src="http://placehold.it/100x100" class="img-circle" alt="Cinque Terre" width="30" height="30">     <a href="./viewUserProfile.php">Mohsin</a> </td>
	<td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" role="button" href="./editUserProfile.php"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Ban"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
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

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Ban this user</h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to ban this user?</div>

      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>�Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>�No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>

 </div>
<?php

	include('templates/footer.php');
?>
