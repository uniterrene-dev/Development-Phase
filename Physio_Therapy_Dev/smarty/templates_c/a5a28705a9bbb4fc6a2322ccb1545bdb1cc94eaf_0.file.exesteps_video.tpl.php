<?php
/* Smarty version 3.1.30, created on 2017-02-04 09:29:56
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exesteps_video.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895910497e164_99804584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a28705a9bbb4fc6a2322ccb1545bdb1cc94eaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exesteps_video.tpl',
      1 => 1486196898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895910497e164_99804584 (Smarty_Internal_Template $_smarty_tpl) {
?>


			<!--h2>Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exer_data']->value;?>
" <a href="exesteps.php?action=add_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Steps</a></h2-->
			<div class="table-responsive">
				<?php if (!empty($_smarty_tpl->tpl_vars['video_data']->value)) {?>
				<div class="left col-md-4">
					<?php if ($_smarty_tpl->tpl_vars['video_data']->value['type'] == "youtube") {?>
						<iframe width="430" height="350" src=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['path'];?>
" frameborder="0" allowfullscreen></iframe>
					<?php } else { ?>					
						<video width="400" controls>
						  <source src="http://<?php echo $_SERVER['HTTP_HOST'];?>
/Physio_Therapy_Dev/uploads/videos/<?php echo $_smarty_tpl->tpl_vars['video_data']->value['name'];?>
" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
					<?php }?>
				</div>
				<div class="right col-md-4">
					<!-- <a href="" class="btn btn-primary" >Edit Video</a> -->
					<a href="exesteps.php?action=delete_video&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
&video_id=<?php echo $_smarty_tpl->tpl_vars['video_data']->value['video_id'];?>
" class="btn btn-danger" >Remove Video</a>
				</div>	
				<?php } else { ?>
					<h3> no record found </h3>
					<a href="exesteps.php?action=add_video&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Video</a>
				<?php }?>
			</div>


<?php }
}
