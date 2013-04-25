<?php
function dbConnect($code) {
	if ($code == 12) {
		$host = 'localhost';
		$dbname = 'adminka';
		$user = 'root';
		$pass = '';
		
		global $dbh;
		$dbh = new PDO('mysql:host='. $host . ';dbname=' . $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
}

//достаем инфу о пользователе
function getUserInfo($user_login) {
	$user_login = trim($user_login);
	global $dbh;
	$sql = "SELECT * FROM `customers` WHERE `login`='" . $user_login .  "' LIMIT 1";
	$sth = $dbh->prepare($sql);	
	$sth->execute();
	$res = $sth->fetch( PDO :: FETCH_ASSOC);
	
	if (count($res) == 1) {
		$sql = "SELECT * FROM `ispoln` WHERE `login`='" . $user_login .  "' LIMIT 1";
		$sth = $dbh->prepare($sql);	
		$sth->execute();
		$res = $sth->fetch( PDO :: FETCH_ASSOC);
	}
	
	return $res;
}

?>