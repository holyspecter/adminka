<?php /* Smarty version Smarty-3.1.8, created on 2013-01-31 16:04:02
         compiled from "templates\inner_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42865107d6406026c5-22293976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7780b8359c4b6c871e41ac7386d48c6795f18b' => 
    array (
      0 => 'templates\\inner_template.tpl',
      1 => 1359641038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42865107d6406026c5-22293976',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107d6406536c9_98413256',
  'variables' => 
  array (
    'script' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107d6406536c9_98413256')) {function content_5107d6406536c9_98413256($_smarty_tpl) {?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<script type="text/javascript" src="jquery-1.8.2.js"></script>
	
	<script type="text/javascript" src="/script/pages/<?php echo '/*%%SmartyNocache:42865107d6406026c5-22293976%%*/<?php echo $_smarty_tpl->tpl_vars[\'script\']->value;?>
/*/%%SmartyNocache:42865107d6406026c5-22293976%%*/';?>
.js"></script>
</head>
<body>
	<div id="user_panel">
		<br/>
		User: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

		<br/>
		<?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
			Привет, <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
!
			<a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=proekt&logout=1">Выйти</a>
		<?php }else{ ?>
			<form id="login_form" method="post" action="#">
				<label for="user-login">Логин:</label><input type="textbox" name="user_login" id="user-login" /><br />
				<label for="user-pass">Пароль:</label><input type="password" name="user_pass" id="user-pass" /><br />
				<input type="submit" value="Вход" />
			</form>
		<?php }?>
	</div>
	<div id="menu">
		<a href="/index.php?page=proekt">Проекти</a>
		<a href="/index.php?page=customers">Заказчики</a>
		<a href="/index.php?page=ispoln">Исполнители</a>
	</div>
	<div id="content">
		<?php echo '/*%%SmartyNocache:42865107d6406026c5-22293976%%*/<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars[\'tpl_content\']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:42865107d6406026c5-22293976%%*/';?>

	</div>
</body>
</html><?php }} ?>