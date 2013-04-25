<?php
ob_start();
session_start();
require_once('configs/u_setup.php');
require_once('libs/db_connect.php');
require_once('libs/valid.php');

dbConnect(12);

$smarty = new Smarty_Setup();

	$page = $_GET['page'];
	$act = $_GET['act'];
	$script = $page;
	if ($act == NULL) $act = 'all';
	
//логинизация
if ($_GET['logout'] == 1)
		unset($_SESSION['user']);

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
} else {
	if (isset($_POST['user_login'])) {
		
		$user = getUserInfo(valid($_POST['user_login']));
		if (!checkUser($user,valid($_POST['user_pass']))) {
			$_SESSION['login_error'] = 'Неверный логин и/или пароль.';
			unset($user);
		} else {
			if (isset($user['prava']))
				$user['prava'] = unserialize($user['prava']);
			$_SESSION['user'] = $user;
		}
		
		header('Location: index.php?page=' . $page . '&act=all');
		exit();
	}
}

if (isset($_SESSION['login_error'])) {
	$smarty->assign("error", $_SESSION['login_error']);
	unset($_SESSION['login_error']);
}
	
	//выбор отображаемой страницы
	if ($_GET['page'] == 'proekt'){
		include('htpages/'.$page.'/'.$act.'.php');
		$template = "pages/".$page."/".$act;		
	}elseif ($_GET['page'] == 'customers'){
		include('htpages/'.$page.'/'.$act.'.php');
		$template = "pages/".$page."/".$act;
	}elseif ($_GET['page'] == 'zadania'){
		include('htpages/'.$page.'/'.$act.'.php');
		$template = "pages/".$page."/".$act;
	}elseif ($_GET['page'] == 'ispoln'){
		include('htpages/'.$page.'/'.$act.'.php');
		$template = "pages/".$page."/".$act;
	} else {
		$template = "pages/main";
	}
	





$smarty->caching = false;	
$smarty->assign("script", $script);

if (isset($user)) {
	$smarty->assign("user", $user);
	$smarty->assign("tpl_content", $template);
	$smarty->display("inner_template.tpl");
} else 
	$smarty->display("login_form.tpl");

	
ob_end_flush();
?>