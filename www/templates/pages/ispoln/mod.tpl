{if (isset($user.prava))}
	<p>Редактирование исполнителя:</p>
	<form id="mod_ispoln" method="post" action="#">
		<label for="ispoln-name">ФИО:</label> <input type="text" name="ispoln_name" id="ispoln-name" value="{$res.name}" /><br />
		<label for="ispoln-posada">Посада:</label> <input type="text" name="ispoln_posada" id="ispoln-posada" value="{$res.posada}"/><br />
		<label for="ispoln-login">Логин:</label> <input type="text" name="ispoln_login" id="ispoln-login" value="{$res.login}"/><br />
		<label for="ispoln-pass">Пароль:</label> <input type="password" name="ispoln_pass" id="ispoln-pass" /><br />
		<label for="ispoln-info">Дополнительная  информация:</label><br /> <textarea name="ispoln_info" id="ispoln-info">{$res.info}</textarea><br />
		<label for="ispoln-status">Статус:</label> <select name="ispoln_status" id="ispoln-status">
					<option value="1" {if $res.status == 1}selected{/if}>Вкл</option>
					<option value="0" {if $res.status == 0}selected{/if}>Выкл</option>
				</select><br />
		<input type="submit" value="Сохранить" />
	</form>

{/if}