<?php /* Smarty version Smarty-3.1.8, created on 2013-02-06 18:08:01
         compiled from "templates\pages\zadania\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8757510bc93a1a7714-77766988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53977d4b690292280288d64c718cb73ae24b7dd2' => 
    array (
      0 => 'templates\\pages\\zadania\\mod.tpl',
      1 => 1360166879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8757510bc93a1a7714-77766988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510bc93a220e13_35636869',
  'variables' => 
  array (
    'customer_id' => 0,
    'res' => 0,
    'user' => 0,
    'proj' => 0,
    'item' => 0,
    'isp' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510bc93a220e13_35636869')) {function content_510bc93a220e13_35636869($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'Z:\\home\\adminka.ua\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
?><p>Редактирование задания:</p>
<form id="add_zadanie" method="post" action="#">
	<input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" />
	<label for="zadanie-name">Название:</label><input type="text" name="zadanie_name" id="zadanie-name" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
" /><br />
	<label for="date-add">Дата добавления задания:</label><input type="text" name="date_add" id="date-add" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['res']->value['date_add'],'%d-%m-%Y');?>
"/><br />
	<label for="date-finish">Дата окончания работы:</label><input type="text" name="date_finish" id="date-finish" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['res']->value['date_finish'],'%d-%m-%Y');?>
" /><br/>
	<label for="zadanie-descr">Описание:</label><br /><textarea name="zadanie_descr" id="zadanie-descr"><?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
</textarea><br />
	<label for="proc-isp">Процент исполнения:</label><input type="<?php if (isset($_smarty_tpl->tpl_vars['user']->value['prava'])){?>hidden<?php }else{ ?>text<?php }?>" name="proc_isp" id="proc-isp" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['procent_isp'];?>
" /><br />
	<?php if (isset($_smarty_tpl->tpl_vars['user']->value['prava'])){?><label for="zadanie-status">Статус:</label><br /><input type="radio" name="zadanie_status" id="zadanie-status" value="0" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==0){?> checked<?php }?>>Исполняется<br />
												<input type="radio" name="zadanie_status" id="zadanie-status" value="1" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==1){?> checked<?php }?>>Доработать<br />
												<input type="radio" name="zadanie_status" id="zadanie-status" value="2" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==2){?> checked<?php }?>>Выполнено<br /><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['user']->value['posada'])){?><input type="hidden" name="zadanie_status" id="zadanie-status" value="0"/><?php }?>
	<label for="proj-id">Проект:</label><select name="proj_id" id="proj_id" />
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['res']->value['project_id'])){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
											<?php } ?>
										</select><br />
	<label for="isp-id">Исполнитель:</label><select name="isp_id" id="isp_id" />
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['isp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['res']->value['ispoln_id'])){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
											<?php } ?>
										</select><br />
	<!--<input type="hidden" name="zadanie_file" value="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />				
	<input type="submit" value="Сохранить" />-->
</form>
<br />
<div id="old-file" name="old_file">
		<?php if ($_smarty_tpl->tpl_vars['res']->value['file']!=''){?>
		Старый файл: <span id="name-old-file"><?php echo $_smarty_tpl->tpl_vars['res']->value['file'];?>
</span>
		<img src="img/del.png" id="file-del" />
		<?php }?>
</div>
	

<form id="file-form" target="file_frame" action="libs/download.php" method="post" enctype="multipart/form-data">
	<label for="zadanie-file">Файл:</label><br /><input type="file" name="file" id="zadanie-file" /><br />
	<input type="submit" value="Загрузить" />
</form>

<iframe name="file_frame" id="file-frame" src="libs/download.php"></iframe>

<div id="zadaniya-add">Сохранить</div><?php }} ?>