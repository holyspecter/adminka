<?php /* Smarty version Smarty-3.1.8, created on 2013-02-21 14:45:14
         compiled from "templates\pages\proekt\all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138615107d66fa2ad67-54176525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ae65638691e9697e71812f24003d1be95f2846' => 
    array (
      0 => 'templates\\pages\\proekt\\all.tpl',
      1 => 1361454253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138615107d66fa2ad67-54176525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107d66fa68186_61817463',
  'variables' => 
  array (
    'user' => 0,
    'mess' => 0,
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107d66fa68186_61817463')) {function content_5107d66fa68186_61817463($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<script type="text/javascript">
		$(".delete").click(
						function() {
							var del_id = $(this).attr("data-id");
						}
					)

	</script>


	<a href="index.php?page=proekt&act=add">Добавить</a><br />
	<?php if (isset($_smarty_tpl->tpl_vars['mess']->value)){?>
		<div id="mess">
			<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
<br />
		</div>
	<?php }?>
	<table id="outputAll">
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
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
				<td><?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='0'){?>Выкл<?php }else{ ?>Вкл<?php }?></td>
				<td>
					<a href="index.php?page=proekt&amp;act=mod&amp;mod_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редакт</a>
					<span data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="delete">del</span>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php }?><?php }} ?>