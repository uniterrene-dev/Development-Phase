<?php
/* Smarty version 3.1.30, created on 2017-02-06 07:01:55
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\list_categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5898115343e6e3_34001516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680f8393adfba25109e6802b58a5e4b91a51b4be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\list_categories.tpl',
      1 => 1486360912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
  ),
),false)) {
function content_5898115343e6e3_34001516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>

<a href="?action=add_category">Add New Category</a><?php }
}
