<?php

// функция проверки валидности входных данных
function valid($str) {
	if (get_magic_quotes_gpc())
		$str = stripslashes($str);
	$str = trim($str);
	$str = htmlspecialchars($str);
	$str = strip_tags($str);
	return $str;
}

//проверка
function getValid($str) {
	if (get_magic_quotes_gpc())
		$str = stripslashes($str);
	$str = htmlspecialchars_decode($str);
	return $str;
}

//создание хеш-кода пароля
function createHash($pass) {
	$salt_before = "*h%^jk#4" . strlen($pass); 
	$salt_after = "3k)>i^t@" . strlen($pass);
	$hash = sha1($salt_before . $pass . $salt_after);
	return $hash;
}

//сверяем пароль пользователя
function checkUser($user, $pass) {
	
	if (createHash($pass) == $user['pass']) 
		return true;	
	return false;
}