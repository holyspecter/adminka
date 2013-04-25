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
    '36ae65638691e9697e71812f24003d1be95f2846' => 
    array (
      0 => 'templates\\pages\\proekt\\all.tpl',
      1 => 1359561830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42865107d6406026c5-22293976',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510a79d2615286_66729246',
  'variables' => 
  array (
    'script' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510a79d2615286_66729246')) {function content_510a79d2615286_66729246($_smarty_tpl) {?>
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
	
	<script type="text/javascript" src="/script/pages/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js"></script>
</head>
<body>
	<div id="user_panel">
		<br/>
		User: Петров Степан
		<br/>
					Привет, Петров Степан!
			<a href="/index.php?page=proekt&logout=1">Выйти</a>
			</div>
	<div id="menu">
		<a href="/index.php?page=proekt">Проекти</a>
		<a href="/index.php?page=customers">Заказчики</a>
		<a href="/index.php?page=ispoln">Исполнители</a>
	</div>
	<div id="content">
		<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_content']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</body>
</html><?php }} ?>