
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>

{include file='exercises_dropdown.tpl'}

{if !empty($return_info)}
  <p>{$return_info}</p>
{/if}

{if !empty($exercise_id)}
<h3><a href="?exer_dropdown={$exercise_id}&action=search&type=step">View Steps</a></h3>
<h3><a href="?exer_dropdown={$exercise_id}&action=search&type=video">View Video Tutorial</a></h3>
	{if !empty($type) && $type eq "step"}

		{if !empty($show_steps)}
			<h2>Exercise Steps for "{$exer_data}" <a href="exesteps.php?action=add_steps&exercise_id={$exercise_id}"> Add new Steps</a>
			|
			<a href="exesteps.php?action=pdf&exercise_id={$exercise_id}"> Generate PDF</a> </h2>
			{if !empty($steps_data) && $steps_data.count > 0}
				{include file='exesteps_dispay.tpl'}
			{else}
				<p> Exercise Steps not found</p>
			{/if}
		{/if}
	{else}
		{include file='exesteps_video.tpl'}
	{/if}
{/if}	

{include file='footer.tpl'}
