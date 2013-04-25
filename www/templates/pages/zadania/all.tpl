<script type="text/javascript">
	$(".delete").click(
					function() {
						var del_id = $(this).attr("data-id");
					}
	
				)

</script>


<a href="index.php?page=zadania&act=add">Добавить</a><br />
{if isset($mess)}
	<div id="mess">
		{$mess}<br />
	</div>
{/if}
<p>Результатов на странице:&nbsp;
<select id="count-res">
	<option value="5" {if $limit == '5'}selected{/if}>5</option>
	<option value="10" {if $limit == '10'}selected{/if}>10</option>
	<option value="all" {if $limit == '100000'}selected{/if}>Все</option>
</select>
</p>

<div id="filters">
	<label for="filter-status">Статус:</label>
	<select id="filter-status">
		<option value="all" {if $filter_status == ''}selected{/if}>Все</option>
		<option value="2" {if $filter_status == '2'}selected{/if}>Завершенные</option>
		<option value="0" {if $filter_status == '0'}selected{/if}>Исполняются</option>
		<option value="1" {if $filter_status == '1'}selected{/if}>На доработке</option>
	</select>
	{if (isset($user.prava))}
		<br />
		<label for="filter-isp">Исполнитель:</label>
		<select id="filter-isp">
			<option value="all" {if $filter_isp == ''}selected{/if}>Все</option>			
			{foreach $ispolns as $ispoln}
				<option value="{$ispoln.name}" {if $filter_isp == $ispoln.name}selected{/if}>{$ispoln.name}</option>			
			{/foreach}
		</select>
	{/if}
</div>
<table id="outputAll">
	<thead>
		<tr>
			<th class="order" value="`id`">id</th>
			<th>file</th>
			<th class="order" value="`zad_name`">name</th>
			<th class="order" value="`date_add`">date_add</th>
			<th class="order" value="`date_finish`">date_finish</th>
			<th>description</th>
			<th>status</th>
			<th>procent_isp</th>
			<th>project</th>
			<th>customer</th>
			<th>ispoln</th>
			{if isset($user.posada)}<th>button</th>
			<!--<th>end_butt</th>-->{/if}
			<th>действие</th>
			<th>comment</th>
		</tr>
	</thead>
	<tbody>
	{foreach $res as $item}
		<tr>
			<td>{$item.id}</td>
			<td>{if ($item.file != "")} <a href="libs/files/{$item.file}">Файл</a>{else}Пусто{/if}</td>
			<td>{$item.zad_name}</td>
			<td>{$item.date_add|date_format:"%d-%m-%Y"}</td>
			<td>{$item.date_finish|date_format:"%d-%m-%Y"}</td>
			<td>{$item.description}</td>
			<td>{if ($item.status == '0')} Исполняется {elseif ($item.status == '1')} <i>Доработать</i> {else}<b>Завершено</b>{/if}</td>
			<td><div class="for-pr-bar"><span>{if (($item.procent_isp == '100') && ($item.status == 0))}Проверка
											  {elseif (($item.procent_isp == '100') && ($item.status == 1))}Доработать
											  {else}{$item.procent_isp}%{/if}</span><div class="proc-isp" style="width:{$item.procent_isp}%;
																										{if ($item.status == '0')} background-color: yellow;
																										{elseif ($item.status == '1')} background-color: red;
																										{elseif ($item.status == '2')}background-color: green;{/if}																						
																										"></div></div></td>
			<td>{$item.proj_name}</td>
			<td>{$item.cust_name}</td>
			<td>{$item.isp_name}</td>
			{if isset($user.posada) && ($item.status != '2')}
				{if isset($item.zadanie_status)}
					{if $item.zadanie_status == 2}
						<td><div class="start_butt"><input name="for_start" type="hidden" value="2"/>Закончить</div></td>
					{else}
						<td><div class="start_butt"><input type="hidden" value="1"/>Начать</div></td>				
					{/if}									
				{else}<td><div class="start_butt"><input type="hidden" value="1"/>Начать</div></td>
				{/if}
			{elseif isset($user.posada)}<td>&nbsp;</td>
			{/if}
			<td>
				<a href="index.php?page=zadania&amp;act=mod&amp;mod_id={$item.id}">Редакт</a>
				<span data-id="{$item.id}" class="delete">del</span>
			</td>
			<td><span class="comments_butt">Комментарии</span></td>
		</tr>		
	{/foreach}
	</tbody>
</table>
<br />
<div id="pagination">
	{section name="pagin" start=1 loop=$max_page + 1}
		<a href="index.php?page=zadania&amp;page_numb={$smarty.section.pagin.index}">{$smarty.section.pagin.index}</a>
	{/section}
</div>