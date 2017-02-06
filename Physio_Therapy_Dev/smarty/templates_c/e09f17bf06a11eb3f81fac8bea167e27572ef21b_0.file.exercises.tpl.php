<?php
/* Smarty version 3.1.30, created on 2017-02-06 11:29:28
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exercises.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58985008db83a9_91820587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09f17bf06a11eb3f81fac8bea167e27572ef21b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exercises.tpl',
      1 => 1486376962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:exercises_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58985008db83a9_91820587 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>

<div id="response" name="response"></div>
<form id="myform" class="form-horizontal" role="form" method="post" action="exercises.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="createFaultReport">
            <h2>Exercises</h2>
            <div class="table-responsive">
				<table id="example" class="table table-bordered table-hover table-striped">
					<tr>
						<td> 
						<select id="exer_dropdown" name="exer_dropdown" onchange="populateForm(this);">
							<option value="-1">Select Exercise </option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exercise_data']->value['drop_down'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('foo', implode(', ',unserialize($_smarty_tpl->tpl_vars['row']->value['keyword'])));
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['exercise_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['condition_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['position_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['purpose_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['equipment_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['muscle_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['movement_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['bodypart_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 </option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</select>
						</td>
						<td>
						  <a href="javascript:void(0);" onclick="resetForm();">Add Exercise </a>
						</td>
					</tr>
				</table>
            </div>
          </div>
		</div>
		<div id="exe_rem" name="exe_rem" class="row" style="display: none">
		  <div class="col-md-4">
			<table id="exer_table" class="table table-bordered table-hover table-striped">
				<tr>
						<td> Remove selected Exesrcise</td>
							<td> <a href="javascript:void(0)" onClick="deleteExe();"><i class="fa fa-trash-o"></i></a> </td>
					</tr>
				</table>
		  </div>
		</div>
		<div id="exe_form" name="exe_form" class="row" style="display: none">
			<?php $_smarty_tpl->_subTemplateRender("file:exercises_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
    </div>
</form>
        <?php echo '<script'; ?>
>
                $(document).ready(function(){
					$("#submitNewBtn").click(function(){
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
					});
                
					$('.category_list').change(function(){
						var call_url = "exercises.php";
						var id = $(this).attr('id');
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
					});		
				
				
				
				
				
				});
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
                function deleteExe(){
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
                }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
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
        <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
