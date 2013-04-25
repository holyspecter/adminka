<?php /* Smarty version Smarty-3.1.8, created on 2013-02-05 15:09:34
         compiled from "templates\pages\proekt\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80135107e4a9c32903-77036850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c3e9b4883250e8470a1c6c80d91a4bc2669df4' => 
    array (
      0 => 'templates\\pages\\proekt\\add.tpl',
      1 => 1360069767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80135107e4a9c32903-77036850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107e4a9c70205_25239863',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107e4a9c70205_25239863')) {function content_5107e4a9c70205_25239863($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
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
<?php }?><?php }} ?>