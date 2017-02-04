<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:17:47
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\exesteps_video.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895720ba1c3f7_57975954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1942e94523b5cdb38cfce09ce89dac9ca28316b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\exesteps_video.tpl',
      1 => 1486189053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895720ba1c3f7_57975954 (Smarty_Internal_Template $_smarty_tpl) {
?>


			<!--h2>Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exer_data']->value;?>
" <a href="exesteps.php?action=add_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Steps</a></h2-->
			<div class="table-responsive">
				Uploded video
				<?php echo var_dump($_smarty_tpl->tpl_vars['video_data']->value);?>

			</div>


<?php }
}
