{if (isset($user.prava))}
	<p>Добавление нового исполнителя:</p>
	<form id="add_proj" method="post" action="#">
		<label for="ispoln-name">ФИО:</label> <input type="text" name="ispoln_name" id="ispoln-name" /><br />
		<label for="ispoln-posada">Посада:</label> <input type="text" name="ispoln_posada" id="ispoln-posada" /><br />
		<label for="ispoln-login">Логин:</label> <input type="text" name="ispoln_login" id="ispoln-login"/><br />
		<label for="ispoln-pass">Пароль:</label> <input type="password" name="ispoln_pass" id="ispoln-pass" /><br />
		<label for="ispoln-info">Дополнительная  информация:</label><br /> <textarea name="ispoln_info" id="ispoln-info"></textarea><br />
		<label for="ispoln-status">Статус: </label><select name="ispoln_status" id="ispoln-status">
					<option value="1">Вкл</option>
					<option value="0">Выкл</option>
				</select><br />
		<input type="submit" value="Добавить" />
	</form>
{/if}