<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:42:14
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\edit_exesteps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589577c6acf956_42752425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a522278d2e24c3cdcf24c97706af347ed6b34028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\edit_exesteps.tpl',
      1 => 1486124083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:exesteps_form.tpl' => 2,
    'file:exevideo_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_589577c6acf956_42752425 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>


<?php if ($_smarty_tpl->tpl_vars['action']->value == 'step') {?>
    <?php if ($_smarty_tpl->tpl_vars['show_steps_form']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:exesteps_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['show_steps']->value)) {?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value)) {?>
		  <?php if ($_smarty_tpl->tpl_vars['steps_data']->value['count'] > 0) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:exesteps_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		  <?php } else { ?>
			<p> Exercise Steps not found</p>
		  <?php }?>
	  <?php }?>
	<?php }
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:exevideo_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>


	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
