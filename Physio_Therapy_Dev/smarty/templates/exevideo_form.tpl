
		<form id="myform" class="form-horizontal" role="form" method="post" action="exesteps.php" enctype="multipart/form-data">
		    <div class="col-md-10">
				<h2>
					Add Exercise video for "{$exercise_name}" 
				</h2>
				<p>Please enter the Exercise steps details below</p>
				<div class="container-fluid">
					<input type="hidden" id="exercise_id" name="exercise_id" value="{$exercise_id}">
					<input type="hidden" id="steps_id" name="steps_id" value="{if !empty($steps_id)}{$steps_id}{/if}">
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

<script>
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
</script>