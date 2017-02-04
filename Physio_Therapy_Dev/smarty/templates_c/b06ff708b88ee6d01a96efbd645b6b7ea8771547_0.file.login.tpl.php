<?php
/* Smarty version 3.1.30, created on 2017-01-31 10:44:08
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58905c68663a69_74660503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06ff708b88ee6d01a96efbd645b6b7ea8771547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\login.tpl',
      1 => 1485855845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58905c68663a69_74660503 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?> <p> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 </p><?php }?>
<form action="" method="post">
	<label>UserName  :</label><input type="text" name="username" class="box"/><br /><br />
	<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
	<input type="submit" value=" Submit "/><br />
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
