

			<!--h2>Exercise Steps for "{$exer_data}" <a href="exesteps.php?action=add_steps&exercise_id={$exercise_id}"> Add new Steps</a></h2-->
			<div class="table-responsive">
				{if !empty($video_data)}
				<div class="left col-md-4">
					{if $video_data.type eq "youtube"}
						<iframe width="430" height="350" src={$video_data.path}" frameborder="0" allowfullscreen></iframe>
					{else}					
						<video width="400" controls>
						  <source src="http://{$smarty.server.HTTP_HOST}/Physio_Therapy_Dev/uploads/videos/{$video_data.name}" type="video/mp4">
						  Your browser does not support HTML5 video.
						</video>
					{/if}
				</div>
				<div class="right col-md-4">
					<!-- <a href="" class="btn btn-primary" >Edit Video</a> -->
					<a href="exesteps.php?action=delete_video&exercise_id={$exercise_id}&video_id={$video_data.video_id}" class="btn btn-danger" >Remove Video</a>
				</div>	
				{else}
					<h3> no record found </h3>
					<a href="exesteps.php?action=add_video&exercise_id={$exercise_id}"> Add new Video</a>
				{/if}
			</div>


