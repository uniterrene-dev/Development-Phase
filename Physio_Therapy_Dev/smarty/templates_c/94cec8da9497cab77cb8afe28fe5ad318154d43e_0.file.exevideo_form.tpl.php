<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:47:31
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exevideo_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589579033afc63_94255681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cec8da9497cab77cb8afe28fe5ad318154d43e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exevideo_form.tpl',
      1 => 1486126098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589579033afc63_94255681 (Smarty_Internal_Template $_smarty_tpl) {
?>

		<form id="myform" class="form-horizontal" role="form" method="post" action="exesteps.php" enctype="multipart/form-data">
		    <div class="col-md-10">
				<h2>
					Add Exercise video for "<?php echo $_smarty_tpl->tpl_vars['exercise_name']->value;?>
" 
				</h2>
				<p>Please enter the Exercise steps details below</p>
				<div class="container-fluid">
					<input type="hidden" id="exercise_id" name="exercise_id" value="<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
">
					<input type="hidden" id="steps_id" name="steps_id" value="<?php if (!empty($_smarty_tpl->tpl_vars['steps_id']->value)) {
echo $_smarty_tpl->tpl_vars['steps_id']->value;
}?>">
					<div class="form-group">
						<label for="registration" class="col-sm-3 control-label">Choose Video Location</label>
						<div class="col-sm-9">
							<select name="type" id="changelocation">
								<option value="youtube">Youtube</option>
								<option value="local">Local </option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="registration" class="col-sm-3 control-label">Upload Form</label>
						<div class="col-sm-9">
						<div class="local_video">
							<label for="upload_video">Your Computer : </label>
							<input type="file" id="upload_video" name="upload_video" >
						</div>
						<div class="youtube_video">
							<label for="upload_youtube">Youtube : </label>
							<input type="text" id="upload_youtube" name="upload_video" >
						</div>	
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-9">					
							<input type="hidden" id="action" name="action" value="edit_video">
							<button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" value="edit_steps">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</form>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		$('.local_video').hide();
		$('#changelocation').change(function (){
			if($(this).val() == 'local'){
				$('.local_video').show();
				$('.youtube_video').hide();
			} else {
				$('.local_video').hide();
				$('.youtube_video').show();
			}
		});
	});
<?php echo '</script'; ?>
><?php }
}
