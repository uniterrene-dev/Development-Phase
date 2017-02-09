
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>
<style>
.category_wrap,.subcategory_wrap {
  margin-bottom: 17px;
  overflow: hidden;
}
ul.keyword_list {
  padding: 0;
  background: #ededed none repeat scroll 0 0;
  border: 1px solid #cccccc;
}
ul.keyword_list {
  margin: 0;
  padding: 0;
}
#get_keyword ul.keyword_list li:last-child {
  border-bottom: 0 none;
  padding-bottom: 4px;
}
#get_keyword ul.keyword_list li {
  border-bottom: 1px solid #c3c3c3;
  padding: 5px 5px 5px 16px;
}
span.key-tag {
  background: #dfdfdf none repeat scroll 0 0;
  margin: 5px;
  padding: 5px;
}
.keyword-wrap > div#keyword-tag {
  display: block;
  overflow: hidden;
  padding-top: 12px;
}
</style>
<div id="response" name="response">
{if !empty($message)}
	{$message}
{/if}
</div>

<form id="myform" class="form-horizontal" role="form" method="post" action="exercises.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="createFaultReport">
            <h2>Exercises</h2>
            <div class="table-responsive">
				<a href="javascript:void(0);" onclick="resetForm();">Add Exercise </a>
            </div>
          </div>
		</div>
		<div id="exe_form" name="exe_form" class="row" style="display: none">
			{include file='exercises_form.tpl'}
		</div>
    </div>
</form>

<table class="table">
	<tr>
		<th>
			Name
		</th>
		<th>
			Description
		</th>
		<th>
			condition
		</th>
		<th>
			position
		</th>
		<th>
			purpose
		</th>
		<th>
			equipment
		</th>
		<th>
			bodypart_id
		</th>
		<th>
			keyword
		</th>
		<th>
			Option
		</th>
		
	</tr>
	{foreach item=row from=$exercise_data.drop_down}			

		<tr>
			<td>
				{$row.name}
			</td>
			<td>
				{$row.description}
			</td>
			<td>
				{$row.condition_id|get_name:"condition"}
			</td>
			<td>
				{$row.position_id|get_name:"position"}
			</td>
			<td>
				{$row.purpose_id|get_name:"purpose"}
			</td>
			<td>
				{$row.equipment_id|get_name:"equipment"}
			</td>
			<td>
				{$row.bodypart_id|get_name:"bodypart"}
			</td>
			<td>
				{$row.keyword}
			</td>
			<td>
				<a href="?action=edit_exercise&exercise_id={$row.exercise_id}">Edit </a>
				|
				<a href="?action=delete_exercise&exercise_id={$row.exercise_id}">Delete </a>
			</td>
		</tr>
	{/foreach}
	
		
</table>
        <script>
                $(document).ready(function(){
					$('#myform').on('change','.container-fluid #exe_form .col-md-4 .container-fluid .form-group .category_list',function(){
						var call_url = "exercises.php";
						var id = $(this).attr('id');
						var valuee = (($(this).parent().find('select option').length)-1);
						var parent_id = $(this).val();
						if(parent_id != ''){
							$.ajax({
								type: "POST",
								url: call_url,
								data: {
									parent_id: $(this).val(),
									type: id,
									action: 'sub_category'
								},
								success: function(result){									
									$('.'+id).append(result);
								},
								error: function(XMLHttpRequest, textStatus, errorThrown){
										alert("Error" +XMLHttpRequest);
										alert("test status :" + textStatus);
										alert(" error thrown" + errorThrown);
								}
						   });						 
						}
					});		
					
					$('#myform').on('click','.container-fluid #exe_form .col-md-4 .container-fluid .form-group .keyword_list li',function(){
						var key = $('#keyword').val();
						$('#keyword').val(key+$(this).text()+',');
						$('#get_keyword').html('');
						$('#dummy_keyword').val('');
						$('.keyword-wrap #keyword-tag').append('<span class="key-tag">'+$(this).text()+'<a href="javascript:void(0);" class="remove_tag"> x</a></span>')
					});
					
					$('#dummy_keyword').keyup(function (){
						var call_url = "exercises.php";
						$.ajax({
								type: "POST",
								url: call_url,
								data: {
									keyword: $('#dummy_keyword').val(),
									action: 'get_keyword'
								},
								success: function(result){									
									$('#get_keyword').html(result);
								},
								error: function(XMLHttpRequest, textStatus, errorThrown){
										alert("Error" +XMLHttpRequest);
										alert("test status :" + textStatus);
										alert(" error thrown" + errorThrown);
								}
						   });
					});
					
					$('#myform').on('click','.container-fluid #exe_form .col-md-4 .container-fluid .form-group #keyword-tag .key-tag .remove_tag',function(){
						$(this).parent().remove();
						$('#keyword').val('');
						//var a = [];
						$('.container-fluid #exe_form .col-md-4 .container-fluid .form-group #keyword-tag .key-tag').each(function () { 
							//a.push($(this).clone().children().remove().end().text());
							$('#keyword').val($('#keyword').val()+$(this).clone().children().remove().end().text()+',');
							//$('#keyword').val(a.join(', '));
						});
					});
				});
				
        </script>

        <script type="text/javascript">
                 function populateForm(sel){
					var data = sel.value;
					var str_array = data.split('|');
                        document.getElementById("exe_form").style.display = "block";
                        document.getElementById("exe_rem").style.display = "block";
                        document.getElementById("exercise_id").value= str_array[0];
                        document.getElementById("name").value= str_array[1];
                        document.getElementById("description").value=str_array[2];
                        document.getElementById("conditions").value=str_array[3];
                        document.getElementById("position").value=str_array[4];
                       	document.getElementById("purpose").value=str_array[5];
                       	document.getElementById("equipment").value=str_array[6];
                        document.getElementById("bodypart").value=str_array[9];
                        document.getElementById("keyword").value=str_array[10];
                }
                function resetForm(){
                        document.getElementById("exe_form").style.display = "block";
                        document.getElementById("exe_rem").style.display = "none";
                        document.getElementById("exercise_id").value='';
                        document.getElementById("name").value='';
                        document.getElementById("description").value='';
                        document.getElementById("conditions").value='';
                        document.getElementById("position").value='';
                        document.getElementById("purpose").value='';
                        document.getElementById("equipment").value='';
                        document.getElementById("bodypart").value='';
				} 
        </script>

{include file='footer.tpl'}
