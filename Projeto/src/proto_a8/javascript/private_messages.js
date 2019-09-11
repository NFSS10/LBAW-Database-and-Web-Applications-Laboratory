$(document).ready(function() {
	processPMs();
});

function processPMs() {

	$.get(BASE_URL + "api/users/private_messages.php", {}, function(data) {
		if(data.length != 0 && data.count != 0)
			$('div#mainNavBar li.p_messages span.badge').html(data.count);
	}, "json");
}