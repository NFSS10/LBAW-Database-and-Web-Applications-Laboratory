$(function() {

	var $formLogin = $('#login-form');
	var $formLost = $('#lost-form');
	var $formRegister = $('#register-form');
	var $divForms = $('#div-forms');
	var $modalAnimateTime = 300;
	var $msgAnimateTime = 150;
	var $msgShowTime = 2000;

	$("form.modalform").submit(function () {
		switch(this.id) {
			case "login-form":
				var $lg_username=$('#login_username').val();
				var $lg_password=$('#login_password').val();
				$.post(BASE_URL + "api/users/login.php", {username: $lg_username, password: $lg_password}, function(data) {
					if(data.length != 0)
					{
						if(data.bloqueado == true)
                        {
                            msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Utilizador bloqueado!");
                        }
						else
						{
							location.reload();
						}
					}
					else {
						msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Utilizador e/ou password incorreto(s)!");
					}
				}, "json");
				return false;
				break;
			case "register-form":
				var $rg_username=$('#register_username').val();
				var $rg_email=$('#register_email').val();
				var $rg_password=$('#register_password').val();
				var $rg_password2=$('#register_password2').val();
				var $rg_bday = $('#register_bday').val();

				var bday = new Date($rg_bday);
				var atualDate = new Date();

				var age = Math.floor((atualDate-bday) / (365.25 * 24 * 60 * 60 * 1000));

				if(!validateUsername($rg_username))
				{
					msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Username inválido!");
				}
				else if(!isValidEmailAddress($rg_email))
				{
					msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Email inválido!");
				}
				else if($rg_password != $rg_password2)
				{
					msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "As passwords tem de ser iguais!");
				}
				else if($rg_password.length < 3)
				{
					msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "A password é muito pequena!");
				}
				else if(age < 18)
				{
					msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Idade minima é 18!");
				}
				else
				{
					var ddBday = bday.getDate();
					var mmBday = bday.getMonth()+1;
					var yyyyBday = bday.getFullYear();

					var bdayDate = yyyyBday + '-' + mmBday + '-' + ddBday;

					var dd = atualDate.getDate();
					var mm = atualDate.getMonth()+1;
					var yyyy = atualDate.getFullYear();

					var registerDate = yyyy + '-' + mm + '-' + dd;

					$.post(BASE_URL + "api/users/register.php", {
						username: $rg_username,
						password: $rg_password,
						email: $rg_email,
						bday: bdayDate,
						rdate: registerDate
					}, function (data) {
						if (data.length != 0) {
							msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", data.reason);
						}
						else {
							msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Utilizador registado com sucesso!");
						}
					}, "json");
				}
				return false;
				break;
			default:
				return false;
		}
		return false;
	});

	function validateUsername(fld) {
		var admin = "admin";
		var pattern = new RegExp(/^[a-zA-Z0-9.\-_$@*!]{3,30}$/i);

		if(!pattern.test(fld))
			return false;
		if(fld.toLowerCase().indexOf(admin) !=-1)
			return false;

		return true;
	}

	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	}

	$('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
	$('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
	$('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
	$('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
	$('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
	$('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

	function modalAnimate ($oldForm, $newForm) {
		var $oldH = $oldForm.height();
		var $newH = $newForm.height();
		$divForms.css("height",$oldH);
		$oldForm.fadeToggle($modalAnimateTime, function(){
			$divForms.animate({height: $newH}, $modalAnimateTime, function(){
				$newForm.fadeToggle($modalAnimateTime);
			});
		});
	}

	function msgFade ($msgId, $msgText) {
		$msgId.fadeOut($msgAnimateTime, function() {
			$(this).text($msgText).fadeIn($msgAnimateTime);
		});
	}

	function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
		var $msgOld = $divTag.text();
		msgFade($textTag, $msgText);
		$divTag.addClass($divClass);
		$iconTag.removeClass("glyphicon-chevron-right");
		$iconTag.addClass($iconClass + " " + $divClass);
		setTimeout(function() {
			msgFade($textTag, $msgOld);
			$divTag.removeClass($divClass);
			$iconTag.addClass("glyphicon-chevron-right");
			$iconTag.removeClass($iconClass + " " + $divClass);
		}, $msgShowTime);
	}
});