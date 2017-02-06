<?php
/* Smarty version 3.1.30, created on 2017-02-04 12:14:25
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\patients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895b791b35773_74668909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813548081ab2bba747a9fe982c2f815de34d1ef7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\patients.tpl',
      1 => 1486028159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:patients_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5895b791b35773_74668909 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>

<div id="response" name="response"></div>
<form id="myform" class="form-horizontal" role="form" method="post" action="patients.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="createFaultReport">
            <h2>Patients</h2>
            <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover table-striped">
		<tr>
		    <td> 
		    <select id="exer_dropdown" name="exer_dropdown" onchange="populateForm(this);">
			    <option value="-1">Select Patient </option>
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patient_data']->value['drop_down'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
			    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['patient_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['disease'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['DOB'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['gender'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
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
		      <a href="javascript:void(0)" onclick="resetForm();">Add Patient </a>
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
                	<td> Remove selected Patient details</td>
                        <td> <a href="#" onClick="deleteExe();"><i class="fa fa-trash-o"></i></a> </td>
                </tr>
            </table>
	  </div>
	</div>
	<div id="exe_form" name="exe_form" class="row" style="display: none">
	    <?php $_smarty_tpl->_subTemplateRender("file:patients_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
    </div>
</form>

        <?php echo '<script'; ?>
>
                $(document).ready(function(){
                $("#submitNewBtn").click(function(){
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
                });
                });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
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
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
                function populateForm(sel){
			var data = sel.value;
			//alert(data);
			var str_array = data.split('|');
			//alert(str_array[1]);
			//<?php echo $_smarty_tpl->tpl_vars['row']->value['patient_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['disease'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['DOB'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['gender'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
|<?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>

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
                }
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
        <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
