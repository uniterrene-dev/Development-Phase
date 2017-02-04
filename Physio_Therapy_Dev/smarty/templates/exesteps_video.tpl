

			<!--h2>Exercise Steps for "{$exer_data}" <a href="exesteps.php?action=add_steps&exercise_id={$exercise_id}"> Add new Steps</a></h2-->
			<div class="table-responsive">
				{if !empty($video_data)}					
					<iframe width="854" height="480" src={$video_data.path}" frameborder="0" allowfullscreen></iframe>
				{else}
				<h3> no record found </h3>
				<a href="exesteps.php?action=add_video&exercise_id={$exercise_id}"> Add new Video</a>
				{/if}
			</div>


