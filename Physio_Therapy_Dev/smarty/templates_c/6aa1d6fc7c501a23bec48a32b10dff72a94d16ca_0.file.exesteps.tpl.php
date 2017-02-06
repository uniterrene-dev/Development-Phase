<?php
/* Smarty version 3.1.30, created on 2017-02-04 08:53:12
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exesteps.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589588681a2033_37314334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa1d6fc7c501a23bec48a32b10dff72a94d16ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exesteps.tpl',
      1 => 1486194620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:exercises_dropdown.tpl' => 1,
    'file:exesteps_dispay.tpl' => 1,
    'file:exesteps_video.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_589588681a2033_37314334 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>

<?php $_smarty_tpl->_subTemplateRender("file:exercises_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!empty($_smarty_tpl->tpl_vars['return_info']->value)) {?>
  <p><?php echo $_smarty_tpl->tpl_vars['return_info']->value;?>
</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['exercise_id']->value)) {?>
<h3><a href="?exer_dropdown=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
&action=search&type=step">View Steps</a></h3>
<h3><a href="?exer_dropdown=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
&action=search&type=video">View Video Tutorial</a></h3>
	<?php if (!empty($_smarty_tpl->tpl_vars['type']->value) && $_smarty_tpl->tpl_vars['type']->value == "step") {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['show_steps']->value)) {?>
			<h2>Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exer_data']->value;?>
" <a href="exesteps.php?action=add_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Steps</a>
			|
			<a href="exesteps.php?action=pdf&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Generate PDF</a> </h2>
			<?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value) && $_smarty_tpl->tpl_vars['steps_data']->value['count'] > 0) {?>
				<?php $_smarty_tpl->_subTemplateRender("file:exesteps_dispay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php } else { ?>
				<p> Exercise Steps not found</p>
			<?php }?>
		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:exesteps_video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }
}?>	

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
