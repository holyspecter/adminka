<?php
if (isset($user['prava'])) {
	if (isset($_GET['mod_id'])) {
		$id = (int) $_GET['mod_id'];
		$sql = "SELECT * FROM `projects` WHERE `id`=".$id." LIMIT 1";
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
		
		if (isset($_POST['proj_name'])) {
			$proj_name = $_POST['proj_name'];
			$proj_status = (int) $_POST['proj_status'];
			$sql = "UPDATE `projects` SET `name`='" . $proj_name . "', `status`='" . $proj_status . "' WHERE `id`=" . $id;
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