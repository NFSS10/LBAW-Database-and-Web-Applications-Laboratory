$(document).ready(function() {
	processList();
});

function processList() {

	$("div.recebidas a").click(function() {

		var id = $(this).attr('title')

		$("div.recebidas a[title='"+ id +"'] span[class='name']").css({"font-weight":"normal"});
		$("div.recebidas a[title='"+ id +"'] span[class='title']").css({"font-weight":"normal"});
		$("div.recebidas a[title='"+ id +"'] span[class='data']").css({"font-weight":"normal"});

		var number = $('div#mainNavBar li.p_messages span.badge').html();

		$.get(BASE_URL + "api/users/update_private_message.php", {id : id}, function(data)
		{
		}, "json");
	});


}
