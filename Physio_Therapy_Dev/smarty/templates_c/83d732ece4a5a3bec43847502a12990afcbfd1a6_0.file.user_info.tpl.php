<?php
/* Smarty version 3.1.30, created on 2017-01-31 11:07:27
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\user_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589061df77e936_02865676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d732ece4a5a3bec43847502a12990afcbfd1a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\user_info.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_589061df77e936_02865676 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="" method="post">
	<div class="form-group">
        	<label for="color" class="col-sm-3 control-label">Role</label>
                <div class="col-sm-2">
                	<select id="role" name="role" class="form-control">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value, 'name', false, 'user_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user_id']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
                        	<option value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                </div>
        </div>

	<input type="submit" value=" Submit "/><br />
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
