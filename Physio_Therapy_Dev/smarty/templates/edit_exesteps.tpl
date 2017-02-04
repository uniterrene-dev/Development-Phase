
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>


{if $action eq 'step'}
    {if $show_steps_form}
		{include file='exesteps_form.tpl'}
	{/if}
	{if !empty($show_steps)}
	  {if !empty($steps_data)}
		  {if $steps_data.count > 0}
			{include file='exesteps_form.tpl'}
		  {else}
			<p> Exercise Steps not found</p>
		  {/if}
	  {/if}
	{/if}
{else}
    {include file='exevideo_form.tpl'}
{/if}


	
{include file='footer.tpl'}
