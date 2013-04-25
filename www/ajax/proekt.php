<?php
require_once('../libs/db_connect.php');
session_start();
dbConnect(12);

if(isset($_POST['checker']) && $_POST['checker'] == 95){
	if (isset($_POST['id'])) {
		$del_id = (int) $_POST['id'];
		$sql = "DELETE FROM `projects` WHERE `id`=" . $del_id;
		$sth = $dbh->prepare($sql);
		$res = $sth->execute();
		
		if ($res) {
			echo 10;
		} else {
			$_SESSION['mess'] = "Ошибка удаления!";
		}
	}
} else {
	echo "Bad checker";
}
?>