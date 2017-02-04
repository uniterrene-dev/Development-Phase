<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:33:46
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589575ca568794_95272924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c239a514bdedf14d58e3d9af19580ad99e9ea7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\index.tpl',
      1 => 1485856296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_589575ca568794_95272924 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


Hello, <?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['l_name']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
)
<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
