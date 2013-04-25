<?php /* Smarty version Smarty-3.1.8, created on 2013-02-21 14:45:34
         compiled from "templates\inner_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13978510a7a40a62824-69127686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7780b8359c4b6c871e41ac7386d48c6795f18b' => 
    array (
      0 => 'templates\\inner_template.tpl',
      1 => 1361454330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13978510a7a40a62824-69127686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510a7a40add077_47762394',
  'variables' => 
  array (
    'script' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a7a40add077_47762394')) {function content_510a7a40add077_47762394($_smarty_tpl) {?>

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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom.min.css" media="screen" />
	
	<script type="text/javascript" src="jquery-1.8.2.js"></script>
	<script type="text/javascript" src="/script/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="/script/jquery-ui-1.10.0.custom.js"></script>
	
	
	<script type="text/javascript" src="/script/pages/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"></script>
</head>
<body>
	<div id="user_panel">
			Привет, <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
!
			<a href="<?php echo $_SERVER['REQUEST_URI'];?>
&logout=1">Выйти</a>			
	</div>
	<div id="menu">
		<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
			<a href="index.php?page=proekt">Проекти</a>
			<a href="index.php?page=customers">Заказчики</a>
			<a href="index.php?page=ispoln">Исполнители</a>
		<?php }?>
		<a href="index.php?page=zadania">Задания</a>
	</div>
	<div id="content">
		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_content']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</body>
</html><?php }} ?>