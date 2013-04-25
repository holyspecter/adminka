<?php /* Smarty version Smarty-3.1.8, created on 2013-02-05 16:57:14
         compiled from "templates\pages\proekt\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308125107ffa3cb4819-78833516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df52418bf18997d78f602c8a3d80d5443baf3b6b' => 
    array (
      0 => 'templates\\pages\\proekt\\mod.tpl',
      1 => 1360069795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308125107ffa3cb4819-78833516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5107ffa3cf2d81_78709103',
  'variables' => 
  array (
    'user' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5107ffa3cf2d81_78709103')) {function content_5107ffa3cf2d81_78709103($_smarty_tpl) {?><?php if ((isset($_smarty_tpl->tpl_vars['user']->value['prava']))){?>
	<p>Редактирование проекта:</p>

	<form id="mod_proj" method="post" action="#">
		<label for="proj-name">Название:</label><input type="text" name="proj_name" id="proj-name" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
" /><br />
		<label for="proj-status">Статус:</label> <select name="proj_status" id="proj-status">
					<option value="1"<?php if ($_smarty_tpl->tpl_vars['res']->value['status']==1){?> selected <?php }?>>Вкл.</option>
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['res']->value['status']==0){?> selected <?php }?>>Выкл.</option>
				</select>
		<br />
		<input type="submit" value="Сохранить" />
	</form>
<?php }?><?php }} ?>