<li class="p_messages"><a href="{$BASE_URL}pages/users/messagesUser.php" class="glyphicon glyphicon-envelope"><span class="badge"></span></a></li>

<li class="notifications hidden-xs" id="notification_li">
    <a href="#" id="notificationLink" class="glyphicon glyphicon-exclamation-sign"><span class="badge"></span></a>
    <div id="notificationContainer">
        <div id="notificationTitle">Notificações</div>
        <div id="notificationsBody" class="notifications">
            <ul class="notificationInfo">
            </ul>
        </div>
    </div>
</li>
<li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img class="img-rounded" id="profile_image" src="{$BASE_URL}{$AVATAR}" alt="Avatar" width="30" height="30">{$USERNAME}<span class="caret"></span></a>
		<ul class="dropdown-menu" id="UserPanel">{$FOTO}
			<li class="dropdown-plus-title" id="icon_up">
				<b class="pull-right glyphicon glyphicon-chevron-up"></b>
			</li>
			<li><a href="{$BASE_URL}pages/auctions/newAuction.php">Criar leilão</a></li>
			<li><a href="{$BASE_URL}pages/users/user_auctions.php">Meus leilões</a></li>
			<li><a href="{$BASE_URL}pages/users/myBids.php">Minhas licitações</a></li>
            <li><a href="{$BASE_URL}pages/users/myTransactionsHist.php">Transações</a></li>
            <li><a href="{$BASE_URL}pages/users/wishList.php">Lista de Favoritos</a></li>
            <li class="divider"></li>
            <li><a href="{$BASE_URL}pages/users/viewProfile.php">Perfil</a></li>
			<li><a href="{$BASE_URL}pages/users/profile-edit.php">Editar Perfil</a></li>
            <li><a href="{$BASE_URL}pages/users/following.php">A seguir</a></li>
            <li class="divider"></li>
            <li><a href="{$BASE_URL}actions/users/logout.php"><span class="glyphicon glyphicon-off" id="logout_icon"></span> Logout</a></li>
        </ul>
</li>