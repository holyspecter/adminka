<?php
if (isset($user['prava'])) {
	if (isset($_GET['mod_id'])) {
		$id = (int) $_GET['mod_id'];
		$sql = "SELECT * FROM `ispoln` WHERE `id`=".$id." LIMIT 1";
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
		
		if (isset($_POST['ispoln_name'])) {
			$ispoln_name = valid($_POST['ispoln_name']);
			$ispoln_posada = valid($_POST['ispoln_posada']);
			$ispoln_login = valid($_POST['ispoln_login']);
			$ispoln_pass = createHash(valid($_POST['ispoln_pass']));
			$ispoln_info = valid($_POST['ispoln_info']);
			$ispoln_status = valid($_POST['ispoln_status']);
			$sql = "UPDATE `ispoln` SET `name`='" . $ispoln_name . "', `posada`='" . $ispoln_posada . "', `login`='" . $ispoln_login . "', `pass`='" . $ispoln_pass .
					"', `info`='" . $ispoln_info . "', `status`='" . $ispoln_status . "' WHERE `id`=" . $id;
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