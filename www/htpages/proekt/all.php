<?php
if (isset($user['prava'])) {
	if (isset($_SESSION['mess'])) {
		$smarty->assign("mess",$_SESSION['mess']);
		unset($_SESSION['mess']);
	}
	
	//достаем права пользователя на просмотр проектов
	$sql = "SELECT `prava` FROM `customers` WHERE `id`=" . $user['id'] ." LIMIT 1";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$row = $sth->fetch();
	$prava = unserialize($row[0]);

	
	$sql = "SELECT * FROM `projects` WHERE `id`=? LIMIT 1";
	foreach ($prava as $val) {
		$sth = $dbh->prepare($sql);
		$sth->execute(array($val));
		$proj = $sth->fetch();
		if (!empty($proj))
			$res[] = $proj;
	}
	


	foreach ($res as $val) {
		if (is_array($val)) {
			foreach ($val as $item)
				$item = getValid($item);
		} else
			$val = getValid($val);
	}

	$smarty->assign("res",$res);
}
?>