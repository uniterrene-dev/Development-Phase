<?php
/* Smarty version 3.1.30, created on 2017-02-07 07:15:41
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\get_subcategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5899660d202999_36880189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b51e2853dba851e6a1e4c5cde46a616af418ae02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\get_subcategory.tpl',
      1 => 1486448125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5899660d202999_36880189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="subcategory_wrap">
	<label class="col-sm-3 control-label" for="color"></label>
	<div class="col-sm-9">
		<select id="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['parent_id']->value;?>
]" class="category_list form-control">
			<option value="">Select Conditions</option>;
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_value']->value, 'val', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>;
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		
		</select>
	</div>
</div><?php }
}
