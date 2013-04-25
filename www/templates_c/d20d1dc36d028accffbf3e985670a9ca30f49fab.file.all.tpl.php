<?php /* Smarty version Smarty-3.1.8, created on 2013-02-21 14:45:15
         compiled from "templates\pages\ispoln\all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164925107d642453052-59638019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20d1dc36d028accffbf3e985670a9ca30f49fab' => 
    array (
      0 => 'templates\\pages\\ispoln\\all.tpl',
      1 => 1361454219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164925107d642453052-59638019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107d64248f4b9_75342493',
  'variables' => 
  array (
    'user' => 0,
    'mess' => 0,
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107d64248f4b9_75342493')) {function content_5107d64248f4b9_75342493($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<?php if (isset($_smarty_tpl->tpl_vars['mess']->value)){?>
		<div id="mess">
			<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
<br />
		</div>
	<?php }?>
	<a href="index.php?page=ispoln&act=add">Добавить</a><br />

	<table id="outputAll">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>posada</th>
				<th>login</th>
				<th>info</th>
				<th>status</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['posada'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='0'){?>Выкл<?php }else{ ?>Вкл<?php }?></td>
				<td>
					<a href="index.php?page=ispoln&amp;act=mod&amp;mod_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редакт</a>
					<span data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="delete">del</span>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php }?><?php }} ?>