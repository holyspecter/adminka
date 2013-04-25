<p>Редактирование задания:</p>
<form id="add_zadanie" method="post" action="#">
	<input type="hidden" name="customer_id" value="{$customer_id}" />
	<label for="zadanie-name">Название:</label><input type="text" name="zadanie_name" id="zadanie-name" value="{$res.name}" /><br />
	<label for="date-add">Дата добавления задания:</label><input type="text" name="date_add" id="date-add" value="{$res.date_add|date_format:'%d-%m-%Y'}"/><br />
	<label for="date-finish">Дата окончания работы:</label><input type="text" name="date_finish" id="date-finish" value="{$res.date_finish|date_format:'%d-%m-%Y'}" /><br/>
	<label for="zadanie-descr">Описание:</label><br /><textarea name="zadanie_descr" id="zadanie-descr">{$res.description}</textarea><br />
	<label for="proc-isp">Процент исполнения:</label><input type="{if isset($user.prava)}hidden{else}text{/if}" name="proc_isp" id="proc-isp" value="{$res.procent_isp}" /><br />
	{if isset($user.prava)}<label for="zadanie-status">Статус:</label><br /><input type="radio" name="zadanie_status" id="zadanie-status" value="0" {if $res.status == 0} checked{/if}>Исполняется<br />
												<input type="radio" name="zadanie_status" id="zadanie-status" value="1" {if $res.status == 1} checked{/if}>Доработать<br />
												<input type="radio" name="zadanie_status" id="zadanie-status" value="2" {if $res.status == 2} checked{/if}>Выполнено<br />{/if}
	{if isset($user.posada)}<input type="hidden" name="zadanie_status" id="zadanie-status" value="0"/>{/if}
	<label for="proj-id">Проект:</label><select name="proj_id" id="proj_id" />
											{foreach $proj as $item}
												<option value="{$item.id}" {if ($item.id == $res.project_id)} selected {/if} >{$item.name}</option>
											{/foreach}
										</select><br />
	<label for="isp-id">Исполнитель:</label><select name="isp_id" id="isp_id" />
											{foreach $isp as $item}
												<option value="{$item.id}" {if ($item.id == $res.ispoln_id)} selected {/if} >{$item.name}</option>
											{/foreach}
										</select><br />
	<!--<input type="hidden" name="zadanie_file" value="{$file}" />				
	<input type="submit" value="Сохранить" />-->
</form>
<br />
<div id="old-file" name="old_file">
		{if $res.file != ""}
		Старый файл: <span id="name-old-file">{$res.file}</span>
		<img src="img/del.png" id="file-del" />
		{/if}
</div>
	

<form id="file-form" target="file_frame" action="libs/download.php" method="post" enctype="multipart/form-data">
	<label for="zadanie-file">Файл:</label><br /><input type="file" name="file" id="zadanie-file" /><br />
	<input type="submit" value="Загрузить" />
</form>

<iframe name="file_frame" id="file-frame" src="libs/download.php"></iframe>

<div id="zadaniya-add">Сохранить</div>