{if (isset($user.prava))}
	{if isset($mess)}
		<div id="mess">
			{$mess}<br />
		</div>
	{/if}
	<a href="index.php?page=customers&act=add">Добавить</a><br />


	<table id="outputAll">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				
				<th>login</th>
				<th>info</th>
				<th>действие</th>
			</tr>
		</thead>
		<tbody>
		{foreach $res as $item}
			<tr>
				<td>{$item.id}</td>
				<td>{$item.name}</td>
				
				<td>{$item.login}</td>
				<td>{$item.info}</td>
				<td>
					<a href="index.php?page=customers&amp;act=mod&amp;mod_id={$item.id}">Редакт</a>
					<span data-id="{$item.id}" class="delete">del</span>
				</td>
			</tr>
		{/foreach}
		</tbody>
	</table>
{/if}