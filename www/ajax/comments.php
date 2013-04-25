<?php
session_start();
require_once('../libs/db_connect.php');
require_once('../libs/valid.php');
dbConnect(12);

if(isset($_POST['checker']) && $_POST['checker']==85){
	$id = (int) $_POST['zadanie_id'];
	//$sql = "SELECT * FROM `comments` WHERE `zadanie_id`='".$id."' ORDER BY `id`";
	$sql = "SELECT `comment`, `comments`.`id` as `comm_id`, `author`, `customers`.`name` as `cust_name`, `ispoln`.`name` as `ispoln_name`  FROM `comments` 
		LEFT JOIN `ispoln` ON `comments`.`ispoln_id`=`ispoln`.`id`
		LEFT JOIN `customers` ON `comments`.`customer_id`=`customers`.`id`
		LEFT JOIN `zadania` ON `comments`.`zadanie_id`=`zadania`.`id`
		WHERE `zadania`.`id`=" . $id;
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$comments = $sth->fetchAll(PDO :: FETCH_ASSOC);
	if(!empty($comments)){
		echo json_encode($comments);
	} else {
		echo 0;
	}
} 
/*if (isset($_POST['zadanie_id'])) {
$zad_id = (int) $_POST['zadanie_id'];
$sql = "SELECT `comment`, `comments`.`id` as `comm_id`, `author`, `customers`.`name` as `cust_name`, `ispoln`.`name` as `ispoln_name`  FROM `comments` 
		LEFT JOIN `ispoln` ON `comments`.`ispoln_id`=`ispoln`.`id`
		LEFT JOIN `customers` ON `comments`.`customer_id`=`customers`.`id`
		LEFT JOIN `zadania` ON `comments`.`zadanie_id`=`zadania`.`id`
		WHERE `zadania`.`id`=" . $zad_id;
		
$sth = $dbh->prepare($sql);
$sth->execute();
$comments = $sth->fetchAll();

print_r($comments);

}*/

//как определ€ть автор заказчик или испонитель, передача айдишников
if ((isset($_POST['cheker'])) && ($_POST['cheker'] == 63)) {	
	$input = array(
				":zad_id"		=>	(int) $_POST['zad_id'],
				":author_id"	=>	(int) $_SESSION['user']['id'],
				":author"		=>	(int) (isset($_SESSION['user']['prava'])) ? 1 : 0, //автор: 0 - исполн, 1 - заказчик
				":comment"		=>	valid($_POST['new_comment'])
			);	
	if (isset($_SESSION['user']['prava'])) {
		$sql = "INSERT INTO `comments`(`zadanie_id`, `customer_id`, `comment`, `author`) VALUES(:zad_id, :author_id, :comment, :author)";
	} else {
		$sql = "INSERT INTO `comments`(`zadanie_id`, `ispoln_id`, `comment`, `author`) VALUES(:zad_id, :author_id, :comment, :author)";
	}
	$sth = $dbh->prepare($sql);
	$res = $sth->execute($input);
	
	$back = array(
				"name"		=>	$_SESSION['user']['name'],
				"comment"	=>	valid($_POST['new_comment'])
				);
	if($res){
		echo json_encode($back);
	} else {
		echo 0;
	}

}

?>