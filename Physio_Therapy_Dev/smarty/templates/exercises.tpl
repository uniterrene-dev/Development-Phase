
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>
<style>
.category_wrap,.subcategory_wrap {
  margin-bottom: 17px;
  overflow: hidden;
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
				<!--table id="example" class="table table-bordered table-hover table-striped">
					<tr>
						<td> 
						<select id="exer_dropdown" name="exer_dropdown" onchange="populateForm(this);">
							<option value="-1">Select Exercise </option>
							{foreach item=row from=$exercise_data.drop_down}
							<option value="{$row.exercise_id}|{$row.name}|{$row.description}|{$row.condition_id}|{$row.position_id}|{$row.purpose_id}|{$row.equipment_id}|{$row.muscle_id}|{$row.movement_id}|{$row.bodypart_id}|{$row.keyword}">{$row.name} </option>
							{/foreach}
						</select>
						</td>
						<td>
						  
						</td>
					</tr>
				</table -->
				<a href="javascript:void(0);" onclick="resetForm();">Add Exercise </a>
            </div>
          </div>
		</div>
		<!-- div id="exe_rem" name="exe_rem" class="row" style="display: none">
		  <div class="col-md-4">
			<table id="exer_table" class="table table-bordered table-hover table-striped">
				<tr>
						<td> Remove selected Exesrcise</td>
							<td> <a href="javascript:void(0)" onClick="deleteExe();"><i class="fa fa-trash-o"></i></a> </td>
					</tr>
				</table>
		  </div>
		</div -->
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
				{$row.condition_id}
			</td>
			<td>
				{$row.position_id}
			</td>
			<td>
				{$row.purpose_id}
			</td>
			<td>
				{$row.equipment_id}
			</td>
			<td>
				{$row.bodypart_id}
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
					/* $("#submitNewBtn").click(function(){
						if($('#name').val() == ''){
							alert("Please provide Exercise Name!!");
							return false;
						}
						if($('#conditions').val() == ''){
								alert("Please select Conditions!!");
								return false;
						}
						if($('#position').val() == ''){
								alert("Please select Position!!");
								return false;
						}
						if($('#bodypart').val() == ''){
								alert("Please select Bodyparts!!");
								return false;
						}
						if($('#purpose').val() == ''){
								alert("Please select Purpose!!");
								return false;
						}
						if($('#equipment').val() == ''){
								alert("Please select Equipments!!");
								return false;
						}

						var URL = $("#myform").attr("action");
						$.ajax({
							type: "POST",
							url: URL,
							data: {
									exercise_id: $('#exercise_id').val(),
									name: $('#name').val(),
									description: $('#description').val(),
									conditions: $('#conditions').val(),
									position: $('#position').val(),
									bodypart: $('#bodypart').val(),
									purpose: $('#purpose').val(),
									equipment: $('#equipment').val(),
									keyword: $('#keyword').val(),
									action: $("#submitNewBtn").val()
							},
							success: function(result){
									var newObject = JSON.parse(result);
									alert(newObject.output);
									window.location.reload(true);
							},
							error: function(XMLHttpRequest, textStatus, errorThrown){
									alert("Error" +XMLHttpRequest);
									alert("test status :" + textStatus);
									alert(" error thrown" + errorThrown);
							}
					   });
					}); */
                
					$('#myform').on('change','.container-fluid #exe_form .col-md-4 .container-fluid .form-group .category_list',function(){
						
						
						var call_url = "exercises.php";
						var id = $(this).attr('id');
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
				
				
				
				
				
				});
        </script>
        <script type="text/javascript">
               /*  function deleteExe(){
					var call_url = "exercises.php";
					var exercise_id = document.getElementById("exercise_id").value;
					if(exercise_id){
	                        alert("exercise_id is : " + exercise_id);
					}else{
						return false;
					}
					$.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                exercise_id: exercise_id,
							action: 'delete_exercise'
                        },
                        success: function(result){
                                console.log(result);
                                var newObject = JSON.parse(result);
                                alert(newObject.output);
                                window.location.reload(true);
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown){
                                alert("Error" +XMLHttpRequest);
                                alert("test status :" + textStatus);
                                alert(" error thrown" + errorThrown);
                        }
				    });
                } */
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
