<li class="p_messages"><a href="{$BASE_URL}pages/users/messagesUser.php" class="glyphicon glyphicon-envelope"><span class="badge"></span></a></li>
<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img class="img-rounded" id="profile_image" src="{$BASE_URL}{$AVATAR}" alt="Avatar" width="30" height="30">{$USERNAME}<span class="caret"></span></a>
    <ul class="dropdown-menu" id="UserPanel">
		<li class="dropdown-plus-title" id="icon_up">
			<b class="pull-right glyphicon glyphicon-chevron-up"></b>
		</li>
		<li><a href="{$BASE_URL}pages/users/viewProfile.php">Perfil</a></li>
		<li><a href="{$BASE_URL}pages/users/profile-edit.php">Editar Perfil</a></li>
		<li><a href="{$BASE_URL}pages/users/adminHome.php"> Administração</a></li>
		<li class="divider"></li>
		<li><a href="{$BASE_URL}actions/users/logout.php"><span class="glyphicon glyphicon-off" id="logout_icon"></span> Logout</a></li>
     </ul>
</li>