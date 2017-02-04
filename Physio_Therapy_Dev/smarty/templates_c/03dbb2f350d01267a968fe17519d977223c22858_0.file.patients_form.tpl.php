<?php
/* Smarty version 3.1.30, created on 2017-01-31 10:38:35
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\patients_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58905b1b051d37_86469764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03dbb2f350d01267a968fe17519d977223c22858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\patients_form.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58905b1b051d37_86469764 (Smarty_Internal_Template $_smarty_tpl) {
?>
                    <div class="col-md-4">

                        <h2>Add / Edit Patient </h2>
                        <p>Please enter the patient details below</p>
                        <div class="container-fluid">
                            <input type="hidden" id="patient_id" name="patient_id" value="">
                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control" >
				</div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Disease</label>
                                <div class="col-sm-9">
                                    <input type="text" id="disease" name="disease" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">DOB</label>
                                <div class="col-sm-9">
                                        <input type='date' id="dob" name="dob" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Gender</label>
                                <div class="col-sm-9">
				    <select id="gender" name="gender" class="form-control">
                                        <option value="1">Male</option>;
                                        <option value="2">Female</option>;
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" id="email" name="email" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mobile" name="mobile" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" id="address" name="address" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="button" value="add_patient">Submit</button>
                                </div>
                            </div>
			</div>
		    </div>
	  <div class="col-md-2" id="createFaultReport">
            <h2>Patient History</h2>
            <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Comment </td> <td> Treated By</td>
                </tr>
            </table>
            </div>
          </div>


<?php }
}
