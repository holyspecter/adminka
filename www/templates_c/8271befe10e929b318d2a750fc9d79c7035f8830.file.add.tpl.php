<?php /* Smarty version Smarty-3.1.8, created on 2013-02-01 18:37:56
         compiled from "templates\pages\zadania\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21351510bbf62ed2154-52007689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8271befe10e929b318d2a750fc9d79c7035f8830' => 
    array (
      0 => 'templates\\pages\\zadania\\add.tpl',
      1 => 1359736551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21351510bbf62ed2154-52007689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510bbf62f32038_44089516',
  'variables' => 
  array (
    'customer_id' => 0,
    'proj' => 0,
    'item' => 0,
    'isp' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510bbf62f32038_44089516')) {function content_510bbf62f32038_44089516($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'Z:\\home\\adminka.ua\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
?><p>Добавление нового задания:</p>
<form id="add_zadanie" method="post" action="#">
	<input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" />
	<label for="zadanie-name">Название:</label><input type="text" name="zadanie_name" id="zadanie-name" /><br />
	<input type="hidden" name="date_add" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>
"/>
	<label for="date-finish">Дата окончания работы:</label><input type="text" name="date_finish" id="date-finish" /><br/>
	<label for="zadanie-descr">Описание:</label><br /><textarea name="zadanie_descr" id="zadanie-descr"></textarea><br />
	<input type="hidden" name="zadanie_status" value="0" />
	<input type="hidden" name="zadanie_proc" value="0" />
	<label for="proj-id">Проект:</label><select name="proj_id" id="proj_id" />
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
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
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
											<?php } ?>
										</select><br />
	
	
	
	<!--<input type="hidden" name="zadanie_file" value="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />-->
</form>
<br />
<form id="file_form" target="file_frame" action="libs/download.php" method="post" enctype="multipart/form-data">
	<label for="zadanie-file">Файл:</label><input type="file" name="file" id="zadanie-file" /><br />
	<input type="submit" value="Загрузить" />
</form>

<iframe name="file_frame" id="file-frame" src="libs/download.php"></iframe>

<div id="zadaniya-add">Добавить</div><?php }} ?>