{* Smarty *}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Авторизация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<script type="text/javascript" src="jquery-1.8.2.js"></script>
	
	<script type="text/javascript">
		$('#go').die().live('click', function() {										
										if ($('input[name*="user_login"]').val() == "") {
											alert("Поле логин не может быть пустым!");
										} else if ($('input[name*="user_pass"]').val() == "") {
											alert("Поле пароль не может быть пустым!");
										} else {
											$('#login_form').submit();
										}
		
									})
	</script>
	
	<script type="text/javascript" src="/script/pages/{$script nocache}.js"></script>
</head>
<body>
	<div id="login_error">
		<i>{$error}</i>
	</div>
	<div id="user_panel">
		<form id="login_form" method="post" action="#">
				<label for="user-login">Логин:</label><input type="textbox" name="user_login" id="user-login" /><br />
				<label for="user-pass">Пароль:</label><input type="password" name="user_pass" id="user-pass" /><br />
				<!--<input type="submit" value="Вход" /> -->
				<div id="go">Вход</div>
		</form>
	</div>
</body>