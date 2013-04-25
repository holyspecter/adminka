<?php
session_start();

//
if (isset($_POST['file'])) {
	$smarty->assign('file',$_POST['file']);
	echo $_POST['file'];
}

//достаем список исполнителей
$sql = "SELECT id, name FROM `ispoln`";
$sth = $dbh->prepare($sql);
$sth->execute();
$res = $sth->fetchAll( PDO :: FETCH_ASSOC);
$smarty->assign('isp',$res);

//достаем список проектов
$sql = "SELECT id, name FROM `projects`";
$sth = $dbh->prepare($sql);
$sth->execute();
$res = $sth->fetchAll( PDO :: FETCH_ASSOC);
$smarty->assign('proj',$res);

//берем id текущего пользователя (заказчика)
if (isset($user))
	$smarty->assign('customer_id',$user['id']);

//добавляем задание
if (isset($_POST['zadanie_name'])) {
	$zadanie = array(				
				":file"			=>	valid($_POST['zadanie_file']),
				":zadanie_name"	=>	valid($_POST['zadanie_name']),
				":date_add"	=>	valid($_POST['date_add']),
				":date_finish"	=>	valid($_POST['date_finish']),
				":zadanie_descr"	=>	valid($_POST['zadanie_descr']),
				":zadanie_status"	=>	(int) valid($_POST['zadanie_status']),
				":zadanie_proc"	=>	(int) valid($_POST['zadanie_proc']),
				":project_id"	=>	(int) valid($_POST['proj_id']),
				":customer_id"	=>	(int) valid($_POST['customer_id']),
				":isp_id"	=>	(int) valid($_POST['isp_id']),
				);
	$sql = "INSERT INTO `zadania` VALUES(NULL, :file, :zadanie_name, :date_add, :date_finish, :zadanie_descr, :zadanie_status, :zadanie_proc, :project_id,:customer_id, :isp_id)";
	$sth = $dbh->prepare($sql);
	$res = $sth->execute($zadanie);
	
	if ($res) {
		$_SESSION['mess'] = 'Успешно добавлено!';
		header('Location: index.php?page=' . $page . '&act=all');
		exit();
	}
	
	
}


?>