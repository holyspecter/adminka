<?php

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

if (isset($_GET['mod_id'])) {
	$id = (int) $_GET['mod_id'];
	$sql = "SELECT * FROM `zadania` WHERE `id`=".$id." LIMIT 1";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$res = $sth->fetch();
	//print_r($res);
	
	foreach ($res as $val) {
		if (is_array($val)) {
			foreach ($val as $item)
				$item = getValid($item);
		} else
			$val = getValid($val);
	}
	
	$smarty->assign("res",$res);
	
	
	
	if (isset($_POST['zadanie_name'])) {
	
		if ((isset($_POST['change_file'])) && ($_POST['change_file'] != "")) {
			unlink('libs/files/' . $_POST['change_file']);
		}
		
		if ($_POST['zadanie_file'] == "")
			$_POST['zadanie_file'] = $res['file'];
		$zadanie = array(				
				":file"			=>	valid($_POST['zadanie_file']),
				":zadanie_name"	=>	valid($_POST['zadanie_name']),
				":date_add"	=>	valid($_POST['date_add']),
				":date_finish"	=>	valid($_POST['date_finish']),
				":zadanie_descr"	=>	valid($_POST['zadanie_descr']),
				":zadanie_status"	=>	(int) valid($_POST['zadanie_status']),
				//":zadanie_proc"	=>	(int) valid($_POST['zadanie_proc']),
				":project_id"	=>	(int) valid($_POST['proj_id']),
				":customer_id"	=>	(int) valid($_POST['customer_id']),
				":isp_id"	=>	(int) valid($_POST['isp_id']),
				":proc_isp" => (int) valid($_POST['proc_isp'])
				);
		$proj_name = $_POST['proj_name'];
		$proj_status = (int) $_POST['proj_status'];
		$sql = "UPDATE `zadania` SET `name`=:zadanie_name, `file`=:file, `project_id`=:project_id, `customer_id`=:customer_id,`ispoln_id`=:isp_id, `date_add`=:date_add, `date_finish`=:date_finish,
				`description`=:zadanie_descr, `status`=:zadanie_status, `procent_isp`=:proc_isp  WHERE `id`=" . $id;
		$sth = $dbh->prepare($sql);
		$res = $sth->execute($zadanie);
		
		if ($res) {
			$_SESSION['mess'] = 'Изменения сохранены!';
			header('Location: index.php?page=' . $page . '&act=all');
			exit();
		}
	}
} else
	header('Location: index.php?page=' . $page . '&act=all');
	
	
	
	
?>