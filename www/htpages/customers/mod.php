<?php
if (isset($user['prava'])) {
	if (isset($_GET['mod_id'])) {
		//достаем все проекты
		$sql = "SELECT id, name FROM `projects`";
		$sth = $dbh->prepare($sql);
		$sth->execute();
		$proj = $sth->fetchAll( PDO :: FETCH_ASSOC);

		$smarty->assign('proj',$proj);
	
		$id = (int) $_GET['mod_id'];
		$sql = "SELECT * FROM `customers` WHERE `id`=".$id." LIMIT 1";
		$sth = $dbh->prepare($sql);
		$sth->execute();
		$res = $sth->fetch();
		$res['prava'] = unserialize($res['prava']);
		//print_r($res['prava']);
		
		foreach ($res as $val) {
			if (is_array($val)) {
				foreach ($val as $item)
					$item = getValid($item);
			} else
				$val = getValid($val);
		}
		
		$smarty->assign("res",$res);
		
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
		
			$customer_name = valid($_POST['customer_name']);
			$customer_status = serialize($projects);
			$customer_login = valid($_POST['customer_login']);
			$customer_pass = createHash(valid($_POST['customer_pass']));
			$customer_info = valid($_POST['customer_info']);
			$sql = "UPDATE `customers` SET `name`='" . $customer_name . "', `prava`='" . $customer_status . "', `login`='" . $customer_login . "', `pass`='" . $customer_pass .
					"', `info`='" . $customer_info . "' WHERE `id`=" . $id;
			var_dump($sql);
			$sth = $dbh->prepare($sql);
			$res = $sth->execute();
			
			if ($res) {
				$_SESSION['mess'] = 'Изменения сохранены!';
				header('Location: index.php?page=' . $page . '&act=all');
				exit();
			}
		}
	} else
		header('Location: index.php?page=' . $page . '&act=all');
}
	
	
	
?>