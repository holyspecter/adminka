<?php /* Smarty version Smarty-3.1.8, created on 2013-01-31 19:29:18
         compiled from "templates\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5097510a848ba05af7-63784177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '664317ab7cc3d080c5273e2fa47a62203386db21' => 
    array (
      0 => 'templates\\login_form.tpl',
      1 => 1359653352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5097510a848ba05af7-63784177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510a848ba4d797_49580496',
  'variables' => 
  array (
    'script' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a848ba4d797_49580496')) {function content_510a848ba4d797_49580496($_smarty_tpl) {?>

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
	
	<script type="text/javascript" src="/script/pages/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"></script>
</head>
<body>
	<div id="login_error">
		<i><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</i>
	</div>
	<div id="user_panel">
		<form id="login_form" method="post" action="#">
				<label for="user-login">Логин:</label><input type="textbox" name="user_login" id="user-login" /><br />
				<label for="user-pass">Пароль:</label><input type="password" name="user_pass" id="user-pass" /><br />
				<!--<input type="submit" value="Вход" /> -->
				<div id="go">Вход</div>
		</form>
	</div>
</body><?php }} ?>