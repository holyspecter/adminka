<?php /* Smarty version Smarty-3.1.8, created on 2013-02-21 14:45:36
         compiled from "templates\pages\zadania\all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19564510bb6b9e89080-64091769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44f331c360fc2ec7d71ae4dc8b519fdf95d57c13' => 
    array (
      0 => 'templates\\pages\\zadania\\all.tpl',
      1 => 1361454300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19564510bb6b9e89080-64091769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510bb6ba07cfc2_28150494',
  'variables' => 
  array (
    'mess' => 0,
    'limit' => 0,
    'filter_status' => 0,
    'user' => 0,
    'filter_isp' => 0,
    'ispolns' => 0,
    'ispoln' => 0,
    'res' => 0,
    'item' => 0,
    'max_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510bb6ba07cfc2_28150494')) {function content_510bb6ba07cfc2_28150494($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\projects\\adminka.ua\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
?><script type="text/javascript">
	$(".delete").click(
					function() {
						var del_id = $(this).attr("data-id");
					}
	
				)

</script>


<a href="index.php?page=zadania&act=add">Добавить</a><br />
<?php if (isset($_smarty_tpl->tpl_vars['mess']->value)){?>
	<div id="mess">
		<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
<br />
	</div>
<?php }?>
<p>Результатов на странице:&nbsp;
<select id="count-res">
	<option value="5" <?php if ($_smarty_tpl->tpl_vars['limit']->value=='5'){?>selected<?php }?>>5</option>
	<option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value=='10'){?>selected<?php }?>>10</option>
	<option value="all" <?php if ($_smarty_tpl->tpl_vars['limit']->value=='100000'){?>selected<?php }?>>Все</option>
</select>
</p>

<div id="filters">
	<label for="filter-status">Статус:</label>
	<select id="filter-status">
		<option value="all" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value==''){?>selected<?php }?>>Все</option>
		<option value="2" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value=='2'){?>selected<?php }?>>Завершенные</option>
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value=='0'){?>selected<?php }?>>Исполняются</option>
		<option value="1" <?php if ($_smarty_tpl->tpl_vars['filter_status']->value=='1'){?>selected<?php }?>>На доработке</option>
	</select>
	<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
		<br />
		<label for="filter-isp">Исполнитель:</label>
		<select id="filter-isp">
			<option value="all" <?php if ($_smarty_tpl->tpl_vars['filter_isp']->value==''){?>selected<?php }?>>Все</option>			
			<?php  $_smarty_tpl->tpl_vars['ispoln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ispoln']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ispolns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ispoln']->key => $_smarty_tpl->tpl_vars['ispoln']->value){
$_smarty_tpl->tpl_vars['ispoln']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['ispoln']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['filter_isp']->value==$_smarty_tpl->tpl_vars['ispoln']->value['name']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ispoln']->value['name'];?>
</option>			
			<?php } ?>
		</select>
	<?php }?>
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
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value['posada'])){?><th>button</th>
			<!--<th>end_butt</th>--><?php }?>
			<th>действие</th>
			<th>comment</th>
		</tr>
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
			<td><?php if (($_smarty_tpl->tpl_vars['item']->value['file']!='')){?> <a href="libs/files/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
">Файл</a><?php }else{ ?>Пусто<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['zad_name'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],"%d-%m-%Y");?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_finish'],"%d-%m-%Y");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
			<td><?php if (($_smarty_tpl->tpl_vars['item']->value['status']=='0')){?> Исполняется <?php }elseif(($_smarty_tpl->tpl_vars['item']->value['status']=='1')){?> <i>Доработать</i> <?php }else{ ?><b>Завершено</b><?php }?></td>
			<td><div class="for-pr-bar"><span><?php if ((($_smarty_tpl->tpl_vars['item']->value['procent_isp']=='100')&&($_smarty_tpl->tpl_vars['item']->value['status']==0))){?>Проверка
											  <?php }elseif((($_smarty_tpl->tpl_vars['item']->value['procent_isp']=='100')&&($_smarty_tpl->tpl_vars['item']->value['status']==1))){?>Доработать
											  <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['procent_isp'];?>
%<?php }?></span><div class="proc-isp" style="width:<?php echo $_smarty_tpl->tpl_vars['item']->value['procent_isp'];?>
%;
																										<?php if (($_smarty_tpl->tpl_vars['item']->value['status']=='0')){?> background-color: yellow;
																										<?php }elseif(($_smarty_tpl->tpl_vars['item']->value['status']=='1')){?> background-color: red;
																										<?php }elseif(($_smarty_tpl->tpl_vars['item']->value['status']=='2')){?>background-color: green;<?php }?>																						
																										"></div></div></td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['proj_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cust_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['isp_name'];?>
</td>
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value['posada'])&&($_smarty_tpl->tpl_vars['item']->value['status']!='2')){?>
				<?php if (isset($_smarty_tpl->tpl_vars['item']->value['zadanie_status'])){?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['zadanie_status']==2){?>
						<td><div class="start_butt"><input name="for_start" type="hidden" value="2"/>Закончить</div></td>
					<?php }else{ ?>
						<td><div class="start_butt"><input type="hidden" value="1"/>Начать</div></td>				
					<?php }?>									
				<?php }else{ ?><td><div class="start_butt"><input type="hidden" value="1"/>Начать</div></td>
				<?php }?>
			<?php }elseif(isset($_smarty_tpl->tpl_vars['user']->value['posada'])){?><td>&nbsp;</td>
			<?php }?>
			<td>
				<a href="index.php?page=zadania&amp;act=mod&amp;mod_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редакт</a>
				<span data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="delete">del</span>
			</td>
			<td><span class="comments_butt">Комментарии</span></td>
		</tr>		
	<?php } ?>
	</tbody>
</table>
<br />
<div id="pagination">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['name'] = "pagin";
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['max_page']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["pagin"]['total']);
?>
		<a href="index.php?page=zadania&amp;page_numb=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagin']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pagin']['index'];?>
</a>
	<?php endfor; endif; ?>
</div><?php }} ?>