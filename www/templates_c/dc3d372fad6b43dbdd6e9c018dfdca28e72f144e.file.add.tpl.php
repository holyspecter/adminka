<?php /* Smarty version Smarty-3.1.8, created on 2013-02-05 15:12:05
         compiled from "templates\pages\ispoln\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:514451080597680754-26748103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc3d372fad6b43dbdd6e9c018dfdca28e72f144e' => 
    array (
      0 => 'templates\\pages\\ispoln\\add.tpl',
      1 => 1360069894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514451080597680754-26748103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51080597682b10_75211853',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51080597682b10_75211853')) {function content_51080597682b10_75211853($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
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
<?php }?><?php }} ?>