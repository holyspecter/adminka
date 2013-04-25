<?php
require_once('../libs/db_connect.php');
session_start();
dbConnect(12);

//удаление задания
if(isset($_POST['checker']) && $_POST['checker'] == 95){
	if (isset($_POST['id'])) {
		$del_id = (int) $_POST['id'];
		$sql = "DELETE FROM `zadania` WHERE `id`=" . $del_id;
		$sth = $dbh->prepare($sql);
		$res = $sth->execute();
		
		if ($res) {
			echo 10;
		} else {
			$_SESSION['mess'] = "Ошибка удаления!";
		}
	}
} 

//кол-во результатов на странице
if (isset($_POST['row_count'])) {
	$_SESSION['row_count'] = $_POST['row_count'];
	echo "1";
}

//фильтр  по статусу
if (isset($_POST['checker']) && $_POST['checker'] == 11) {
	$_SESSION['filter_status'] = $_POST['status'];
	echo "1";
}

//фильтр  по исполнителю
if (isset($_POST['checker']) && $_POST['checker'] == 12) {
	$_SESSION['filter_isp'] = $_POST['isp'];
	echo "1";
}

//упорядочть
if (isset($_POST['checker']) && $_POST['checker'] == 20) {
	if (isset($_SESSION['order_by'])) {
		switch ($_SESSION['order_by']) {
			case $_POST['order_by']:
				$_SESSION['order_by'] = $_POST['order_by'] . " DESC ";
				break;
			case $_POST['order_by'] . " DESC":
				$_SESSION['order_by'] = $_POST['order_by'];
				break;
			default:
				$_SESSION['order_by'] = $_POST['order_by'];
		}
	} else {
		$_SESSION['order_by'] = $_POST['order_by'];
	}
	echo 1;
}

//начало/конец работы
if (isset($_POST['zadanie_id'])) {
	$id = (int) $_POST['zadanie_id'];
	
	$sql = "SELECT * FROM `worktime` WHERE `zadanie_id`=" . $id . " LIMIT 1";
		
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$res = $sth->fetch();
	
	if (empty($res['status'])) { //первое начало работы - нажата кнопка "начать"		
		$status = 2;
		
		$last_work = array();
		
		$last_work[0] = date("Y-m-d H:i:s");
		$time = array($last_work);
		
		$input = array(
					":isp_id"	=>	(int)$_SESSION['user']['id'],
					":zad_id"	=>	$id,
					":time"		=>	serialize($time),
					":status"	=>	$status
				);
		
		$sql = "INSERT INTO `worktime`(`ispoln_id`, `zadanie_id`, `time`, `status`) VALUES(:isp_id, :zad_id, :time, :status)";
		
		$sth = $dbh->prepare($sql);
		$res = $sth->execute($input);
		
		
		if ($res == false) {
			echo "Error occuried!";
		} else {
			echo "ok";
		}
	} else if ($res['status'] == '1'){ //продолжение работы - нажата кнопка "начать"		
		$status = 2;
		$time = unserialize($res['time']);
		
		$last_work = array();
		
		$last_work[0] = date("Y-m-d H:i:s");
		$time[] = $last_work;
		
		$input = array(
					":isp_id"	=>	(int)$_SESSION['user']['id'],
					":time"		=>	serialize($time),
					":status"	=>	$status
				);
		
		$sql = "UPDATE `worktime` SET `ispoln_id`=:isp_id, `time`=:time, `status`=:status WHERE `zadanie_id`=" . $id;
		$sth = $dbh->prepare($sql);
		$res = $sth->execute($input);	
		
		if ($res != false) {
			echo "ok";
		} else {
			echo "Error occuried!";
		}		
	} else if ($res['status'] == '2'){	//окончание работы - нажата кнопка "закончить"
		$status = 1;
		$time = unserialize($res['time']);		
		$last_work = array_pop($time);
		
		$last_work[1] = date("Y-m-d H:i:s");
		$time[] = $last_work;
		
		$input = array(
					":isp_id"	=>	(int)$_SESSION['user']['id'],
					":time"		=>	serialize($time),
					":status"	=>	$status
				);
		
		$sql = "UPDATE `worktime` SET `ispoln_id`=:isp_id, `time`=:time, `status`=:status WHERE `zadanie_id`=" . $id;
		$sth = $dbh->prepare($sql);
		$res = $sth->execute($input);
		
		if (isset($_POST['proc_isp'])) {
			$proc = (int) $_POST['proc_isp'];
			$sql = "UPDATE `zadania` SET `procent_isp`=" . $proc . " WHERE `id`=" . $id;
			$sth = $dbh->prepare($sql);
			$sth->execute();
		}
				
		
		if ($res != false) {
			echo "end";
		} else {
			echo "Error occuried!";
		}		
	}
	
}
?>