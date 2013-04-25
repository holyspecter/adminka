{if (isset($user.prava))}
	<p>Добавление нового проекта:</p>
	<form id="add_proj" method="post" action="#">
		<label for="proj-name">Название:</label><input type="text" name="proj_name" id="proj-name" /><br />
		<label for="proj-status">Статус:</label> <select name="proj_status" id="proj-status">
					<option value="1">Вкл.</option>
					<option value="0">Выкл.</option>
				</select>
		<br />
		<input type="submit" value="Добавить" />
	</form>
{/if}