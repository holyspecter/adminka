<?php /* Smarty version Smarty-3.1.8, created on 2013-02-04 15:04:55
         compiled from "templates\pages\ispoln\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25803510917fe1f4580-74951844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8c9f009e70f09320c909891354c294a17bcca01' => 
    array (
      0 => 'templates\\pages\\ispoln\\mod.tpl',
      1 => 1359983091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25803510917fe1f4580-74951844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_510917fe25c417_11400333',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510917fe25c417_11400333')) {function content_510917fe25c417_11400333($_smarty_tpl) {?><p>Редактирование исполнителя:</p>
<form id="mod_ispoln" method="post" action="#">
	<label for="ispoln-name">ФИО:</label> <input type="text" name="ispoln_name" id="ispoln-name" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
" /><br />
	<label for="ispoln-posada">Посада:</label> <input type="text" name="ispoln_posada" id="ispoln-posada" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['posada'];?>
"/><br />
	<label for="ispoln-login">Логин:</label> <input type="text" name="ispoln_login" id="ispoln-login" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['login'];?>
"/><br />
	<label for="ispoln-pass">Пароль:</label> <input type="password" name="ispoln_pass" id="ispoln-pass" /><br />
	<label for="ispoln-info">Дополнительная  информация:</label><br /> <textarea name="ispoln_info" id="ispoln-info"><?php echo $_smarty_tpl->tpl_vars['res']->value['info'];?>
</textarea><br />
	<label for="ispoln-status">Статус:</label> <select name="ispoln_status" id="ispoln-status">
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==1){?>selected<?php }?>>Вкл</option>
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==0){?>selected<?php }?>>Выкл</option>
			</select><br />
	<input type="submit" value="Сохранить" />
</form>

<?php }} ?>