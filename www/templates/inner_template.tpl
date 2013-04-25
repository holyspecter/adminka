{* Smarty *}

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
	
	
	<script type="text/javascript" src="/script/pages/{$script nocache}.js"></script>
</head>
<body>
	<div id="user_panel">
			Привет, {$user.name}!
			<a href="{$smarty.server.REQUEST_URI}&logout=1">Выйти</a>			
	</div>
	<div id="menu">
		{if (isset($user.prava))}
			<a href="index.php?page=proekt">Проекти</a>
			<a href="index.php?page=customers">Заказчики</a>
			<a href="index.php?page=ispoln">Исполнители</a>
		{/if}
		<a href="index.php?page=zadania">Задания</a>
	</div>
	<div id="content">
		{include file="$tpl_content.tpl" nocache}
	</div>
</body>
</html>