<?php /* Smarty version Smarty-3.1.8, created on 2013-02-21 14:45:16
         compiled from "templates\pages\customers\all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10185107d670cca707-37032954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32355b0bfd487e89bc18b3f2cc5f2c61a5d96e9b' => 
    array (
      0 => 'templates\\pages\\customers\\all.tpl',
      1 => 1361454187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10185107d670cca707-37032954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107d670d07123_06337235',
  'variables' => 
  array (
    'user' => 0,
    'mess' => 0,
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107d670d07123_06337235')) {function content_5107d670d07123_06337235($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<?php if (isset($_smarty_tpl->tpl_vars['mess']->value)){?>
		<div id="mess">
			<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
<br />
		</div>
	<?php }?>
	<a href="index.php?page=customers&act=add">Добавить</a><br />


	<table id="outputAll">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				
				<th>login</th>
				<th>info</th>
				<th>действие</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</td>
				<td>
					<a href="index.php?page=customers&amp;act=mod&amp;mod_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редакт</a>
					<span data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="delete">del</span>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php }?><?php }} ?>