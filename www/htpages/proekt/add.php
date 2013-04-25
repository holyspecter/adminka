<?php
session_start();

if (isset($user['prava'])) {
	if (isset($_POST['proj_name'])) {
		$proj = array(
					":proj_name"	=>	valid($_POST['proj_name']),
					":proj_status"	=>	(int) valid($_POST['proj_status']),
					);
		$sql = "INSERT INTO `projects` VALUES(NULL,:proj_name,:proj_status)";
		$sth = $dbh->prepare($sql);
		$res = $sth->execute($proj);
		
		if ($res) {
			$_SESSION['mess'] = 'Успешно добавлено!';
			header('Location: index.php?page=' . $page . '&act=all');
			exit();
		}
	}
}

?>