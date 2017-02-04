<?php
/* Smarty version 3.1.30, created on 2017-01-31 11:44:10
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\clinics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58906a7aa777e5_12639638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f2d058b709137d47cdce546b445d5f0555f61b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\clinics.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:clinics_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58906a7aa777e5_12639638 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>


<form id="myform" class="form-horizontal" role="form" method="post" action="clinics.php" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8" id="createFaultReport">
            <h2>Clinic Details</h2>
            <div class="table-responsive">
	    <?php if ($_smarty_tpl->tpl_vars['clinic_data']->value['next'] > 0) {?> <a id="next" name="next" href="clinics.php?next=<?php echo $_smarty_tpl->tpl_vars['clinic_data']->value['next'];?>
&rows=<?php echo $_smarty_tpl->tpl_vars['clinic_data']->value['page_rows'];?>
" style="float: left;">Next</a><?php }?>
	     &nbsp;&nbsp;&nbsp;Rows :<select id="rows" name="rows" onchange="changeFunc();" style="float: center;">
		<option value="10" <?php if ($_smarty_tpl->tpl_vars['clinic_data']->value['page_rows'] == 10) {?> selected <?php }?>>10</option>
		<option value="20" <?php if ($_smarty_tpl->tpl_vars['clinic_data']->value['page_rows'] == 20) {?> selected <?php }?>>20</option>
		<option value="30" <?php if ($_smarty_tpl->tpl_vars['clinic_data']->value['page_rows'] == 30) {?> selected <?php }?>>30</option></select>
	    <?php if ($_smarty_tpl->tpl_vars['clinic_data']->value['prev'] > 0) {?> <a href="clinics.php?prev=<?php echo $_smarty_tpl->tpl_vars['clinic_data']->value['prev'];?>
&rows=<?php echo $_smarty_tpl->tpl_vars['clinic_data']->value['page_rows'];?>
" style="float: right;">Prev</a><?php }?>
            <table id="example" class="table table-bordered table-hover table-striped">
	      <thead>
	        <tr>
	          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clinic_data']->value['cols'], 'col_name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col_name']->value) {
?>
	            <th class="header"> <?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
</th>
	          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	        </tr>
	      </thead>
	      <tbody>
	      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clinic_data']->value['data'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	      <tr>
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clinic_data']->value['cols'], 'col_name', false, 'db_col');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['db_col']->value => $_smarty_tpl->tpl_vars['col_name']->value) {
?>
		  <?php if ($_smarty_tpl->tpl_vars['db_col']->value == 'clinic_id') {?>
		    <td> <a href="#" onClick="populateForm(<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_email'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_address'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_site'];?>
');"> <?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
 </a> </td>
		  <?php } elseif ($_smarty_tpl->tpl_vars['db_col']->value == 'clinic_logo_path') {?>
		    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
"  style="width:120px;height:50px;"/> </td>
		    <!--td style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
);background-repeat:no-repeat;background-size:120px 50px;   width: 120px; height: 50px;"></td-->
		  <?php } else { ?>
	            <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
</td>
		  <?php }?>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<td><a href="#" onClick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_id'];?>
);"><i class="fa fa-trash-o"></i></a></td>
	      </tr>
	      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	      </tbody>
	    </table>
            </div>
          </div>
	  <?php $_smarty_tpl->_subTemplateRender("file:clinics_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	  </div>
	</div>
    </div>
</form>
        <?php echo '<script'; ?>
>
                $(document).ready(function(){
                $("#submitNewBtn").click(function(){
                alert("Hi!!!!");
                var URL = $("#myform").attr("action");
		var formData = new FormData();
		formData.append('clinic_id', $('#clinic_id').val());
		formData.append('name', $('#name').val());
		formData.append('email', $('#email').val());
		formData.append('phone', $('#phone').val());
		formData.append('address', $('#address').val());
		formData.append('site', $('#site').val());
		formData.append('action', 'add_clinic');
		formData.append('logo', $('#logo')[0].files[0]);

                $.ajax({
			type: "POST",
                        url: URL,
                        data: formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false, 
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
                });
                });
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
		function changeFunc() {
    			var selectBox = document.getElementById("rows");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;
			alert(selectedValue);
			document.getElementById("next").href = "clinics.php?next=0&rows="+selectedValue;
		}
                function deleteUser(clinic_id){
                        var call_url = "clinics.php";
                        alert("clinic id is : " + clinic_id);
                        $.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                user_id: user_id,
				action: 'delete_clinic'
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
                function populateForm(clinic_id, name, email, phone, address, site){
                        document.getElementById("clinic_id").value=clinic_id;
                        document.getElementById("name").value=name;
                        document.getElementById("email").value=email;
                        document.getElementById("phone").value=phone;
                        document.getElementById("address").value=address;
                        document.getElementById("site").value=site;
                }
        <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
