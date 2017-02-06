<?php
/* Smarty version 3.1.30, created on 2017-02-04 12:14:10
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\users_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895b782cc47b6_94704643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee493b886325023eae3cc43535e048b554db2c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\users_form.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895b782cc47b6_94704643 (Smarty_Internal_Template $_smarty_tpl) {
?>
                    <div class="col-md-4">
                        <h2>Add/Edit User </h2>
                        <p>Please enter ther user details below</p>
                        <div class="container-fluid">
                            <input type="hidden" id="user_id" name="user_id">
                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" id="password" name="password" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" id="c_password" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="first_name" name="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="last_name" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Role</label>
                                <div class="col-sm-9">
                                    <select id="role" name="role" class="form-control">
                                      <option value="1">Admin</option>
                                      <option value="2">Therapist</option>
                                      <option value="3">Doctor</option>
                                      <option value="4">Patient</option>
                                      <option value="5">Group Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Clinic</label>
                                <div class="col-sm-9">
                                    <select id="clinic" name="clinic" class="form-control">
					<option value="">Select Clinic</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clinic_data']->value, 'val', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>;
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
				    <select id="status" name="status" class="form-control">
                                      <option value="1">Active</option>
                                      <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="button" value="add_user">Submit</button>
                                </div>
                            </div>
			</div>
		    </div>

<?php }
}
