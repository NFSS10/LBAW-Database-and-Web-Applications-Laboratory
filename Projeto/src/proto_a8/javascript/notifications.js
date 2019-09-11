$(document).ready(function() {
	processNotifications();
	handleClick();
});

function processNotifications() {

	$.get(BASE_URL + "api/users/notifications.php", {}, function(data) {
		if(data.length != 0) {

			var unseeNotifications = 0;
			for(var i = 0; i < data.length; i++)
				if(!data[i].visualizada)
					++unseeNotifications;

			var original_title = document.title;
			document.title = "(" + unseeNotifications + ") " + original_title;

			$('div#mainNavBar li.notifications span.badge').html(unseeNotifications);

			for(var i = 0; i < data.length; i++)
			{
					$("#notificationsBody ul.notificationInfo").append('<li class="unread"></li>');

					var $li = $("#notificationsBody ul.notificationInfo li:nth-child("+(i+1)+").unread");

					var $text;

					if(data[i].info == "Leilão terminado")
						$text = 'Leilão "' + data[i].titulo_leilão + '" terminado!';
					else
						$text = 'Licitação no leilão "' + data[i].titulo_leilão + '" ultrapassada!';

					var $info = $('<a href="' + BASE_URL + "pages/auctions/productPage.php?id=" + data[i].idleilão + '">' + $text + '</a>');

					(function (i, data) {
						$info.click(function () {
							$.post(BASE_URL + "api/users/setNotificationRead.php", {idNotificacao: data[i].idnotificação, tipo: data[i].info}, function(data) {
							}, "json");
						});
					}(i, data));

				var t = data[i].data.split(/[- :]/);
				var date = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));

				$li.prepend($info);

				var day = ("0" + date.getDate()).slice(-2);
				var month = ("0" + (date.getMonth()+1)).slice(-2);
				var year = date.getFullYear();

				var hours = ("0" + (date.getUTCHours())).slice(-2);
				var minutes = ("0" + date.getMinutes()).slice(-2);

				var $divHours = $('<div class="notificationHours">' + day + '/' + month + '/'+ year + ' às ' + hours + ':' + minutes +'</div>');
				$li.append($divHours);
			}

		}
	}, "json");
}


function handleClick() {
	$("#notificationLink").click(function()
	{
		$("#notificationContainer").fadeToggle(300);
		return false;
	});

	$(document).click(function()
	{
		$("#notificationContainer").hide();
	});

}