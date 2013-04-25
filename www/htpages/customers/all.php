<?php
if (isset($_SESSION['mess'])) {
	$smarty->assign("mess",$_SESSION['mess']);
	unset($_SESSION['mess']);
}

if (isset($user['prava'])) {
	$sql = "SELECT * FROM `customers`";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$res = $sth->fetchAll( PDO :: FETCH_ASSOC);
	//var_dump($res);

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