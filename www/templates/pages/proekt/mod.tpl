{if (isset($user.prava))}
	<p>Редактирование проекта:</p>

	<form id="mod_proj" method="post" action="#">
		<label for="proj-name">Название:</label><input type="text" name="proj_name" id="proj-name" value="{$res.name}" /><br />
		<label for="proj-status">Статус:</label> <select name="proj_status" id="proj-status">
					<option value="1"{if $res.status == 1} selected {/if}>Вкл.</option>
					<option value="0" {if $res.status == 0} selected {/if}>Выкл.</option>
				</select>
		<br />
		<input type="submit" value="Сохранить" />
	</form>
{/if}