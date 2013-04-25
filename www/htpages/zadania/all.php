<?php
//вывод сообщения
if (isset($_SESSION['mess'])) {
	$smarty->assign("mess",$_SESSION['mess']);
	unset($_SESSION['mess']);
}

//кол-во результатов на странице
if (isset($_SESSION['row_count'])) {
	if ($_SESSION['row_count'] == 'all') {
		$limit = 100000;
	} else {
		$limit = (int) $_SESSION['row_count'];
	}
	$smarty->assign("limit",$limit);
} else {
	$limit = 5; //записей на странице
}

//фильтр по статусу
$filter_status = "";
if (isset($_SESSION['filter_status'])) {
	$filter_status = ($_SESSION['filter_status'] == 'all') ? "" : $_SESSION['filter_status'];
	$smarty->assign("filter_status", $filter_status);
}

//фильтр по исполнителю (только для заказчика)
$filter_isp = "";
if (isset($_SESSION['filter_isp'])) {
	$filter_isp = ($_SESSION['filter_isp'] == 'all') ? "" : $_SESSION['filter_isp'];
	$smarty->assign("filter_isp", $filter_isp);
}

//упорядочивание
$order_by = " ORDER BY `id` DESC";
$asc_or_desc = "";
if (isset($_SESSION['order_by'])) {
	$order_by = " ORDER BY " . $_SESSION['order_by'];
}


if (isset($_GET['page_numb'])) { //номер страницы
	$page_numb = (int)$_GET['page_numb'];
} else {
	$page_numb = 1;
}


//если залогинен исполнитель, то только его задания
if (isset($user["posada"])) {
	$sql = "SELECT `zadania`.`id`, `zadania`.`file`, `zadania`.`name` as `zad_name`, `zadania`.`date_add`, `zadania`.`date_finish`, `zadania`.`description`, `zadania`.`procent_isp`, `zadania`.`status`, 
				`projects`.`name` as `proj_name`, `customers`.`name` as `cust_name`, `ispoln`.`name` as `isp_name`, `worktime`.`status` as `zadanie_status`    
		FROM  `zadania` 
		LEFT JOIN  `projects` ON  `project_id` =  `projects`.`id` 
		LEFT JOIN  `customers` ON  `customer_id` =  `customers`.`id` 
		LEFT JOIN  `ispoln` ON  `ispoln_id` =  `ispoln`.`id`
		LEFT JOIN  `worktime` ON  `zadanie_id` =  `zadania`.`id`
		WHERE `zadania`.`ispoln_id` = " . $user["id"];
		
		if ($filter_status != "") {
			$where = ($filter_status != 'all') ? " AND `zadania`.`status`=" . (int)$filter_status  : "";
			$sql .= $where;
		}

		$sql .= $order_by . 
		" LIMIT " . ($page_numb - 1) * $limit . ", " . $limit;		
	$sql_count = "SELECT COUNT(*) FROM `zadania` WHERE `ispoln_id` = " . $user["id"] . $where;
} else { //иначе - все
	$sql = "SELECT `zadania`.`id`, `zadania`.`file`, `zadania`.`name` as `zad_name`, `zadania`.`date_add`, `zadania`.`date_finish`, `zadania`.`description`, `zadania`.`procent_isp`, `zadania`.`status`, 
				`projects`.`name` as `proj_name`, `customers`.`name` as `cust_name`, `ispoln`.`name` as `isp_name`, `worktime`.`status` as `zadanie_status`   
		FROM  `zadania` 
		LEFT JOIN  `projects` ON  `project_id` =  `projects`.`id` 
		LEFT JOIN  `customers` ON  `customer_id` =  `customers`.`id` 
		LEFT JOIN  `ispoln` ON  `ispoln_id` =  `ispoln`.`id` 
		LEFT JOIN  `worktime` ON  `zadanie_id` =  `zadania`.`id`";
		
		if ($filter_status != "") {
			if ($filter_isp != "") {
				$where = " WHERE `zadania`.`status`=" . (int)$filter_status . " AND `ispoln`.`name`='" . $filter_isp . "'";
				$sql .= $where;
			} else {
				$where = " WHERE `zadania`.`status`=" . (int)$filter_status;
				$sql .= $where;
			}
		} elseif ($filter_isp != "") {
			$where = " WHERE `ispoln`.`name`='" . $filter_isp . "'";
			$sql .= $where;
		}
		$sql .= $order_by . 
		" LIMIT " . ($page_numb - 1) * $limit . ", " . $limit;
	$sql_count = "SELECT COUNT(*) FROM `zadania`" . $where;
}
	//echo $sql;
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$res = $sth->fetchAll( PDO :: FETCH_ASSOC);
	
	
	$sth = $dbh->prepare($sql_count);
	$sth->execute();
	$row_count = $sth->fetch();
	
	$max_page = ceil($row_count[0] / $limit); //последняя страница
	

//проверяем данные на валидность
foreach ($res as $val) {
	if (is_array($val)) {
		foreach ($val as $item) 
			$item = getValid($item);
		$val['date_add'] = date("d-m-Y",strtotime($val['date_add']));
		$val['date_finish'] = date("d-m-Y",strtotime($val['date_finish']));
		
	} else
		$val = getValid($val);
}

//достаем статус исполнения задания: 1 - в процессе работы, 2 - работа закончена
$sql = "SELECT `zadanie_id`, `status` FROM `worktime` ORDER BY `zadanie_id` DESC";
$sth = $dbh->prepare($sql);
$sth->execute();
$stat = $sth->fetchAll();

//если заказчик, то достаем исполнителей для фильтрации
if (isset($user['prava'])) {
	$sql = "SELECT `id`, `name` FROM `ispoln`";
	$sth = $dbh->prepare($sql);
	$sth->execute();
	$ispolns = $sth->fetchAll(PDO :: FETCH_ASSOC);
	$smarty->assign("ispolns",$ispolns);
}

//print_r($stat);
$smarty->assign("stat",$stat);
$smarty->assign("res",$res);
$smarty->assign("max_page",$max_page);
?>