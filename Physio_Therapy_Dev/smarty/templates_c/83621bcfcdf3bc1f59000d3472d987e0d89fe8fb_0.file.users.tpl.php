<?php
/* Smarty version 3.1.30, created on 2017-01-31 11:44:08
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58906a78602d77_33313314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83621bcfcdf3bc1f59000d3472d987e0d89fe8fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\users.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
    'file:users_form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58906a78602d77_33313314 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>


<form id="myform" class="form-horizontal" role="form" method="post" action="users.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-8" id="createFaultReport">
            <h2>Users</h2>
            <div class="table-responsive">
	    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['next'] > 0) {?> <a id="next" name="next" href="users.php?next=<?php echo $_smarty_tpl->tpl_vars['user_data']->value['next'];?>
&rows=<?php echo $_smarty_tpl->tpl_vars['user_data']->value['page_rows'];?>
" style="float: left;">Next</a><?php }?>
	     &nbsp;&nbsp;&nbsp;Rows :<select id="rows" name="rows" onchange="changeFunc();" style="float: center;">
		<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['page_rows'] == 10) {?> selected <?php }?>>10</option>
		<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['page_rows'] == 20) {?> selected <?php }?>>20</option>
		<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['page_rows'] == 30) {?> selected <?php }?>>30</option></select>
	    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['prev'] > 0) {?> <a href="users.php?prev=<?php echo $_smarty_tpl->tpl_vars['user_data']->value['prev'];?>
&rows=<?php echo $_smarty_tpl->tpl_vars['user_data']->value['page_rows'];?>
" style="float: right;">Prev</a><?php }?>
            <table id="example" class="table table-bordered table-hover table-striped">
	      <thead>
	        <tr>
	          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['cols'], 'col_name');
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['data'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	      <tr>
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['cols'], 'col_name', false, 'db_col');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['db_col']->value => $_smarty_tpl->tpl_vars['col_name']->value) {
?>
		  <?php if ($_smarty_tpl->tpl_vars['db_col']->value == 'user_id') {?>
		    <td> <a href="#" onClick="populateForm(<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['first_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['last_name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['active'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['row']->value['clinic_id'];?>
');"> <?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
 </a> </td>
		  <?php } elseif ($_smarty_tpl->tpl_vars['db_col']->value == 'active') {?>
		    <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value] == 1) {?>
		    <td> Active </td>
		    <?php } else { ?>
		    <td> Inactive </td>
		    <?php }?>
		  <?php } else { ?>
	            <td><?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['db_col']->value];?>
</td>
		  <?php }?>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<td><a href="#" onClick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
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
	  <?php $_smarty_tpl->_subTemplateRender("file:users_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                var user_id = $('#user_id').val();
                var pass = $('#password').val();
                var c_pass = $('#c_password').val();
                var role = $('#role').val();
                var clinic = $('#clinic').val();

                if(user_id == '' && pass == ''){
                        alert("for new user Password is mondatory");
                        return false;
                }

                if( pass ){
                        if( c_pass == ''){
                                alert("Please provide Confirmation Password");
                                return false;
                        } else if (pass != c_pass){
                                alert("Password and Confirmation password should be same");
                                return false;
                        }
                }

		if(role != 1 && clinic == ''){
                        alert("Please map Clinic");
                        return false;
		}

                var URL = $("#myform").attr("action");
                $.ajax({
                        type: "POST",
                        url: URL,
                        data: {
                                user_id: $('#user_id').val(),
                                name: $('#name').val(),
                                email: $('#email').val(),
                                phone: $('#phone').val(),
                                password: $('#password').val(),
                                first_name: $('#first_name').val(),
                                last_name: $('#last_name').val(),
                                active: $('#status').val(),
                                role: $('#role').val(),
                                clinic: $('#clinic').val(),
				action: $("#submitNewBtn").val()
                        },
                        success: function(result){
                                //console.log(result);
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
			document.getElementById("next").href = "users.php?next=0&rows="+selectedValue;
		}
                function deleteUser(user_id){
                        var call_url = "users.php";
                        alert("user id is : " + user_id);
                        $.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                user_id: user_id,
				action: 'delete_user'
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
                function populateForm(user_id, user_name, email, phone, first_name, last_name, active, role, clinic){
                        document.getElementById("user_id").value=user_id;
                        document.getElementById("name").value=user_name;
                        document.getElementById("email").value=email;
                        document.getElementById("phone").value=phone;
                        document.getElementById("first_name").value=first_name;
                        document.getElementById("last_name").value=last_name;
                       	document.getElementById("status").value=active;
                       	document.getElementById("role").value=role;
                       	document.getElementById("clinic").value=clinic;
	
                }
        <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
