<div class="subcategory_wrap" >
	<label class="col-sm-3 control-label" for="color"></label>
	<div class="col-sm-9">
		<select id="{$type}" name="{$type}[{$parent_id}]" class="category_list form-control">
			<option value="">Select Conditions</option>;
			{foreach key=k item=val from=$category_value}
				<option value="{$k}">{$val}</option>
			{/foreach}		
		</select>
	</div>
</div>