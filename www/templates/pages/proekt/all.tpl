{if (isset($user.prava))}
	<script type="text/javascript">
		$(".delete").click(
						function() {
							var del_id = $(this).attr("data-id");
						}
					)

	</script>


	<a href="index.php?page=proekt&act=add">Добавить</a><br />
	{if isset($mess)}
		<div id="mess">
			{$mess}<br />
		</div>
	{/if}
	<table id="outputAll">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>status</th>
				<th>действие</th>
			</tr>
		</thead>
		<tbody>
		{foreach $res as $item}
			<tr>
				<td>{$item.id}</td>
				<td>{$item.name}</td>
				<td>{if $item.status == '0'}Выкл{else}Вкл{/if}</td>
				<td>
					<a href="index.php?page=proekt&amp;act=mod&amp;mod_id={$item.id}">Редакт</a>
					<span data-id="{$item.id}" class="delete">del</span>
				</td>
			</tr>
		{/foreach}
		</tbody>
	</table>
{/if}