<p>Добавление нового задания:</p>
<form id="add_zadanie" method="post" action="#">
	<input type="hidden" name="customer_id" value="{$customer_id}" />
	<label for="zadanie-name">Название:</label><input type="text" name="zadanie_name" id="zadanie-name" /><br />
	<input type="hidden" name="date_add" value="{$smarty.now|date_format:'%Y-%m-%d'}"/>
	<label for="date-finish">Дата окончания работы:</label><input type="text" name="date_finish" id="date-finish" /><br/>
	<label for="zadanie-descr">Описание:</label><br /><textarea name="zadanie_descr" id="zadanie-descr"></textarea><br />
	<input type="hidden" name="zadanie_status" value="0" />
	<input type="hidden" name="zadanie_proc" value="0" />
	<label for="proj-id">Проект:</label><select name="proj_id" id="proj_id" />
											{foreach $proj as $item}
												<option value="{$item.id}" >{$item.name}</option>
											{/foreach}
										</select><br />
	<label for="isp-id">Исполнитель:</label><select name="isp_id" id="isp_id" />
											{foreach $isp as $item}
												<option value="{$item.id}" >{$item.name}</option>
											{/foreach}
										</select><br />
	
	
	
	<!--<input type="hidden" name="zadanie_file" value="{$file}" />-->
</form>
<br />
<form id="file_form" target="file_frame" action="libs/download.php" method="post" enctype="multipart/form-data">
	<label for="zadanie-file">Файл:</label><input type="file" name="file" id="zadanie-file" /><br />
	<input type="submit" value="Загрузить" />
</form>

<iframe name="file_frame" id="file-frame" src="libs/download.php"></iframe>

<div id="zadaniya-add">Добавить</div>