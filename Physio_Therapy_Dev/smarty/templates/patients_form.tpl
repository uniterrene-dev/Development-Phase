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
							<input type="hidden" name="action" value="add_patient">
							<input type="hidden" name="clinic_id" value="{$user_data.user_id}" />
                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" value="">Submit</button>
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


