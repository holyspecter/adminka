<?php /* Smarty version Smarty-3.1.8, created on 2013-02-05 16:46:59
         compiled from "templates\pages\customers\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205865109153a8f0ed6-00488392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ccd61c1f9198bc659c566e09b072a01f036485' => 
    array (
      0 => 'templates\\pages\\customers\\mod.tpl',
      1 => 1360075614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205865109153a8f0ed6-00488392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5109153a92e315_94521101',
  'variables' => 
  array (
    'user' => 0,
    'res' => 0,
    'proj' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5109153a92e315_94521101')) {function content_5109153a92e315_94521101($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<p>Редактирование заказчика:</p>
	<form id="mod_customer" method="post" action="#">
		<label for="customer-name">ФИО:</label> <input type="text" name="customer_name" id="customer-name" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
" /><br />
		<label for="customer-status">Проекты: </label><br /><select name="customer_status" id="customer-status">
					<option value="1" >Все проекты</option>
					<option value="0" >Только выбраные</option>
				</select><br />
		<div id="proj-ids" style="display:none">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['proj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="proj<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ((in_array($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['res']->value['prava']))){?>checked<?php }?> /><label for="proj<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
		<?php } ?> <br />
		</div>
		<label for="customer-login">Логин:</label> <input type="text" name="customer_login" id="customer-login" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['login'];?>
"/><br />
		<label for="customer-pass">Пароль:</label> <input type="password" name="customer_pass" id="customer-pass"  /><br />
		<label for="customer-info">Дополнительная  информация:<br /> <textarea name="customer_info" id="customer-info"><?php echo $_smarty_tpl->tpl_vars['res']->value['info'];?>
</textarea><br />
		<input type="submit" value="Сохранить" />
	</form>
<?php }?>

<?php }} ?>