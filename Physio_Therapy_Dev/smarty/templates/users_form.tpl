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
                                        {foreach key=k item=val from=$clinic_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}

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

