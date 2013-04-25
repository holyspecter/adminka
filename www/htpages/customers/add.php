<?php
session_start();

if (isset($user['prava'])) {
	$sql = "SELECT id, name FROM `projects`";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$proj = $sth->fetchAll( PDO :: FETCH_ASSOC);

	$smarty->assign('proj',$proj);

	if (isset($_POST['customer_name'])) {
		//сохранение доступных заказчику проектов
		$projects = array();
		if ($_POST['customer_status'] == 1)	{
			foreach ($proj as $val)
				$projects[] = $val['id'];
		} else {
			foreach ($_POST as $key => $val) {
				if ($val == "on") {
					$projects[] = $key;
				}
			}
		}
		//var_dump($projects);
		
		$proj = array(
				":customer_name"	=>	valid($_POST['customer_name']),
				":customer_status"	=>	serialize($projects),
				":customer_login"	=>	valid($_POST['customer_login']),
				":customer_pass"	=>	createHash(valid($_POST['customer_pass'])),
				":customer_info"	=>	valid($_POST['customer_info']),
				);
		
	
		$sql = "INSERT INTO `customers` VALUES(NULL,:customer_name,:customer_status,:customer_login,:customer_pass,:customer_info)";
		$sth = $dbh->prepare($sql);
	
		$res = $sth->execute($proj);
		//var_dump($res);
	
		if ($res) {
			$_SESSION['mess'] = 'Успешно добавлено!';
			header('Location: index.php?page=' . $page . '&act=all');
			exit();
		}
	}
}
?>