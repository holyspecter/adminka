{if (isset($user.prava))}
	<p>Добавление нового заказчика:</p>
	<form id="add_customer" method="post" action="#">
		<label for="customer-name">ФИО:</label> <input type="text" name="customer_name" id="customer-name" /><br />
		<label for="customer-status">Проекты:</label> <select name="customer_status" id="customer-status">
					<option value="1">Все проекты</option>
					<option value="0">Только выбраные</option>
				</select><br />
		<div id="proj-ids" style="display:none">
		{foreach $proj as $item}
			<input type="checkbox" name="{$item.id}" id="proj{$item.id}"  /><label for="proj{$item.id}">{$item.name}</label>
		{/foreach} <br />
		</div>
		<label for="customer-login">Логин:</label> <input type="text" name="customer_login" id="customer-login"/><br />
		<label for="customer-pass">Пароль:</label> <input type="password" name="customer_pass" id="customer-pass" /><br />
		<label for="customer-info">Дополнительная  информация:</label><br /> <textarea name="customer_info" id="customer-info"></textarea><br />
		<input type="submit" value="Добавить" />
	</form>
{/if}