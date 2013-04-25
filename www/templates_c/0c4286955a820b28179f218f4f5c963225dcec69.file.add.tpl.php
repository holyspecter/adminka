<?php /* Smarty version Smarty-3.1.8, created on 2013-02-05 16:28:26
         compiled from "templates\pages\customers\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10395107ed3d800061-25528701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c4286955a820b28179f218f4f5c963225dcec69' => 
    array (
      0 => 'templates\\pages\\customers\\add.tpl',
      1 => 1360074467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10395107ed3d800061-25528701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107ed3d83da73_70748216',
  'variables' => 
  array (
    'user' => 0,
    'proj' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107ed3d83da73_70748216')) {function content_5107ed3d83da73_70748216($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<p>Добавление нового заказчика:</p>
	<form id="add_customer" method="post" action="#">
		<label for="customer-name">ФИО:</label> <input type="text" name="customer_name" id="customer-name" /><br />
		<label for="customer-status">Проекты:</label> <select name="customer_status" id="customer-status">
					<option value="1">Все проекты</option>
					<option value="0">Только выбраные</option>
				</select><br />
		<div id="proj-ids" style="display:none">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="proj<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  /><label for="proj<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
		<?php } ?> <br />
		</div>
		<label for="customer-login">Логин:</label> <input type="text" name="customer_login" id="customer-login"/><br />
		<label for="customer-pass">Пароль:</label> <input type="password" name="customer_pass" id="customer-pass" /><br />
		<label for="customer-info">Дополнительная  информация:</label><br /> <textarea name="customer_info" id="customer-info"></textarea><br />
		<input type="submit" value="Добавить" />
	</form>
<?php }?><?php }} ?>