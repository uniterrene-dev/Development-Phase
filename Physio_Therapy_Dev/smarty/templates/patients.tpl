
{include file='header.tpl'}

<br/>
{include file='tab.tpl'}
<br/>

	<div id="response" name="response"></div>
	  <a href="javascript:void(0)" onclick="resetForm();">Add Patient </a>
	<form id="myform" class="form-horizontal" role="form" method="post" action="patients.php">
		<div id="exe_rem" name="exe_rem" class="row" style="display: none">
		  <div class="col-md-4">
			<table id="exer_table" class="table table-bordered table-hover table-striped">
				<tr>
						<td> Remove selected Patient details</td>
							<td> <a href="#" onClick="deleteExe();"><i class="fa fa-trash-o"></i></a> </td>
					</tr>
				</table>
		  </div>
		</div>
		<div id="exe_form" name="exe_form" class="row" style="display: none">
			{include file='patients_form.tpl'}
		</div>
		</div>
	</form>
<h2>Patients</h2>
 <div class="col-lg-6 list-user">
	<table class="table">
	<tr>
		<th>
			Name
		</th>
		<th>
			Disease
		</th>
		<th>
			Date of Birth
		</th>
		<th>
			Gender
		</th>
		<th>
			Contact no
		</th>
		<th>
			Email
		</th>
		<th>
			Address
		</th>
		<th>
			Option
		</th>
		
	</tr>
	{foreach item=row from=$patient_data.drop_down}			
		<tr>
			<td>
				{$row.name}
			</td>
			<td>
				{$row.disease}
			</td>
			<td>
				{$row.DOB}
			</td>
			<td>
				{$row.gender}
			</td>
			<td>
				{$row.mobile}
			</td>
			<td>
				{$row.email}
			</td>
			<td>
				{$row.address}
			</td>
			<td>
				<a href="?action=edit_exercise&exercise_id={$row.patient_id}">Edit </a>
				|
				<a href="?action=delete_exercise&exercise_id={$row.patient_id}">Delete </a>
				|
				<a href="task_panel.php?patient={$row.patient_id}">GoTo Exercise Builder </a>
				
			</td>
		</tr>
	{/foreach}
	
		
</table>
</div>
	<script>
			$(document).ready(function(){
				/* $("#submitNewBtn").click(function(){
				alert("Hi!!!!");

				var URL = $("#myform").attr("action");
				$.ajax({
						type: "POST",
						url: URL,
						data: {
								patient_id: $('#patient_id').val(),
								name: $('#name').val(),
								disease: $('#disease').val(),
								dob: $('#dob').val(),
								gender: $('#gender').val(),
								mobile: $('#mobile').val(),
								email: $('#email').val(),
								address: $('#address').val(),
				action: $("#submitNewBtn").val()
						},
						success: function(result){
								//console.log(result);
								var newObject = JSON.parse(result);
								alert(newObject.output);
				//document.getElementById("response").innerHTML = '<i>'+ newObject.output + '</i>';
								window.location.reload(true);
						},
						error: function(XMLHttpRequest, textStatus, errorThrown){
								alert("Error" +XMLHttpRequest);
								alert("test status :" + textStatus);
								alert(" error thrown" + errorThrown);
						}
					   });
				}); */
			});
	</script>
	<script type="text/javascript">
			function deleteExe(){
					var call_url = "patients.php";
		var patient_id = document.getElementById("patient_id").value;
		if(patient_id){
						alert("patient_id is : " + patient_id);
		}else{
			return false;
		}
					$.ajax({
					type: "POST",
					url: call_url,
					data: {
							patient_id: patient_id,
			action: 'delete_patient'
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
			}
	</script>
	<script type="text/javascript">
			/* function populateForm(sel){
					var data = sel.value;
					//alert(data);
					var str_array = data.split('|');
					//alert(str_array[1]);
					//{$row.patient_id}|{$row.name}|{$row.disease}|{$row.DOB}|{$row.gender}|{$row.mobile}|{$row.email}|{$row.address}
					document.getElementById("exe_form").style.display = "block";
					document.getElementById("exe_rem").style.display = "block";
					document.getElementById("patient_id").value=str_array[0];
					document.getElementById("name").value=str_array[1];
					document.getElementById("disease").value=str_array[2];
					document.getElementById("dob").value=str_array[3];
					document.getElementById("gender").value=str_array[4];
					document.getElementById("mobile").value=str_array[5];
					document.getElementById("email").value=str_array[6];
					document.getElementById("address").value=str_array[7];
			} */
			function resetForm(){
					document.getElementById("exe_form").style.display = "block";
					document.getElementById("exe_rem").style.display = "none";
					document.getElementById("patient_id").value='';
					document.getElementById("name").value='';
					document.getElementById("disease").value='';
					document.getElementById("dob").value='';
					document.getElementById("gender").value='';
					document.getElementById("mobile").value='';
					document.getElementById("email").value='';
					document.getElementById("address").value='';
	}
	</script>

{include file='footer.tpl'}
