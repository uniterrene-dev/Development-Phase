
{include file='header.tpl'}

<form action="" method="post">
	<div class="form-group">
        	<label for="color" class="col-sm-3 control-label">Role</label>
                <div class="col-sm-2">
                	<select id="role" name="role" class="form-control">
				{foreach key=user_id item=name from=$user_data}
                        	<option value="{$user_id}">{$name}</option>
				{/foreach}
                        </select>
                </div>
        </div>

	<input type="submit" value=" Submit "/><br />
</form>

{include file='footer.tpl'}
