

                        <!--h2>Exercise Steps for "{$exer_data}" <a href="exesteps.php?action=add_steps&exercise_id={$exercise_id}"> Add new Steps</a></h2-->
                        <div class="table-responsive">
			<table id="example" class="table table-bordered table-hover table-striped">
			  <tbody>
			  {foreach item=row from=$steps_data.table_data}
				<tr><td>Exercise Step ID</td><td><a href="exesteps.php?action=update_steps&exercise_id={$row.exercise_id}&steps_id={$row.steps_id}" >{$row.steps_id}</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remove Steps &nbsp;&nbsp;<a href="exesteps.php?action=delete_steps&exercise_id={$row.exercise_id}&steps_id={$row.steps_id}" ><i class="fa fa-trash-o"></i></a> </td></tr>
				<tr><td>Exercise Name</td><td>{$row.exercise}</td></tr>
				<tr><td>Description</td><td>{$row.description}</td></tr>
				<tr><td>Image</td><td>{if $row.file_id }<img src="uploads/steps/{$row.file_id|get_image}"  style="width:120px;height:50px;"/>{/if}</td></tr>
				<tr><td>English</td><td>{$row.english}</td></tr>
				<tr><td>Hindi</td><td>{$row.hindi}</td></tr>
				<tr><td>Urdu</td><td>{$row.urdu}</td></tr>
				<tr><td>Telugu</td><td>{$row.telugu}</td></tr>
				<tr><td>Tamil</td><td>{$row.tamil}</td></tr>
				<tr><td>Bengali</td><td>{$row.bengali}</td></tr>
			   {/foreach}
			  </tbody>
			</table>


