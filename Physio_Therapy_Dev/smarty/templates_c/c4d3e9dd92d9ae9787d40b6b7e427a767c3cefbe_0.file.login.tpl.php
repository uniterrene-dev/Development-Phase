<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:39:25
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895771dee0029_13359740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4d3e9dd92d9ae9787d40b6b7e427a767c3cefbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\login.tpl',
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
function content_5895771dee0029_13359740 (Smarty_Internal_Template $_smarty_tpl) {
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
