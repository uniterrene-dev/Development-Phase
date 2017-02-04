<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:47:26
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exesteps_video.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589578fe6527a1_55424963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a28705a9bbb4fc6a2322ccb1545bdb1cc94eaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exesteps_video.tpl',
      1 => 1486190845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589578fe6527a1_55424963 (Smarty_Internal_Template $_smarty_tpl) {
?>


			<!--h2>Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exer_data']->value;?>
" <a href="exesteps.php?action=add_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Steps</a></h2-->
			<div class="table-responsive">
				<?php if (!empty($_smarty_tpl->tpl_vars['video_data']->value)) {?>					
					<iframe width="854" height="480" src=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['path'];?>
" frameborder="0" allowfullscreen></iframe>
				<?php } else { ?>
				<h3> no record found </h3>
				<a href="exesteps.php?action=add_video&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Video</a>
				<?php }?>
			</div>


<?php }
}
