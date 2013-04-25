<?php
session_start();
if (isset($user['prava'])) {
	if (isset($_POST['ispoln_name'])) {
		$proj = array(
					":ispoln_name"	=>	valid($_POST['ispoln_name']),
					":ispoln_posada"=>	valid($_POST['ispoln_posada']),
					":ispoln_login"	=>	valid($_POST['ispoln_login']),
					":ispoln_pass"	=>	createHash(valid($_POST['ispoln_pass'])),
					":ispoln_info"	=>	valid($_POST['ispoln_info']),
					":ispoln_status"=>	(int) valid($_POST['ispoln_status'])
					);
		//var_dump($proj);
		
		$sql = "INSERT INTO `ispoln` VALUES(NULL,:ispoln_name,:ispoln_posada,:ispoln_login,:ispoln_pass,:ispoln_info,:ispoln_status)";
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