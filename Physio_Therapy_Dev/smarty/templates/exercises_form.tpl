                    <div class="col-md-4">
                        <h2>Add / Edit Exercise </h2>
                        <p>Please enter the exercise details below</p>
                        <div class="container-fluid">
                            <input type="hidden" id="exercise_id" name="exercise_id">
                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control" >
								</div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" id="description" name="description" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group condition">
							 <div class="category_wrap">
                                <label for="color" class="col-sm-3 control-label">Conditions</label>
                                <div class="col-sm-9">
                                    <select id="condition" name="condition[]" class="category_list form-control">
                                        <option value="">Select Conditions</option>;
											{foreach key=k item=val from=$cond_data}
												<option value="{$k}">{$val}</option>;
											{/foreach}
                                    </select>
                                </div>
							  </div> 	
                            </div>

                            <div class="form-group position">
                                <label for="color" class="col-sm-3 control-label">Position</label>
                                <div class="col-sm-9">
									<select id="position" name="position[]" class="category_list form-control">
                                        <option value="">Select Position</option>;
                                        {foreach key=k item=val from=$pos_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}

                                    </select>
                                </div>
                            </div>

                            <div class="form-group bodypart">
							   <div class="category_wrap">
                                <label for="color" class="col-sm-3 control-label">Bodyparts</label>
                                <div class="col-sm-9">
                                    <select id="bodypart" name="bodypart[]" class="category_list form-control">
										<option value="">Select Bodypart</option>;
                                        {foreach key=k item=val from=$bp_data}
											<option value="{$k}">{$val}</option>;
                                        {/foreach}
                                    </select>
                                </div>
                               </div>
                            </div>
                            <div class="form-group purpose">
                                <label for="color" class="col-sm-3 control-label">Purpose</label>
                                <div class="col-sm-9">
                                    <select id="purpose" name="purpose[]" class="category_list form-control">
										<option value="">Select Purpose</option>;
                                        {foreach key=k item=val from=$purpose_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group equipment">
							  <div class="category_wrap">
                                <label for="color" class="col-sm-3 control-label">Equipments</label>
                                <div class="col-sm-9">
                                    <select id="equipment" name="equipment[]" class="category_list form-control">
										<option value="">Select Equipment</option>;
                                        {foreach key=k item=val from=$equip_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}

                                    </select>
                                </div>
                              </div>								
                            </div>
                            <!--div class="form-group muscle">
                                <label for="color" class="col-sm-3 control-label">Muscle</label>
                                <div class="col-sm-9">
                                    <select id="muscle" name="muscle" class="form-control">
                                        <option value="">Select Muscle</option>;
                                        {foreach key=k item=val from=$muscle_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}

                                    </select>
                                </div>
                            </div>
                            <div class="form-group movement">
                                <label for="color" class="col-sm-3 control-label">Movement</label>
                                <div class="col-sm-9">
                                    <select id="movement" name="movement" class="form-control">
                                        <option value="">Select Movement</option>;
                                        {foreach key=k item=val from=$movement_data}
                                                <option value="{$k}">{$val}</option>;
                                        {/foreach}

                                    </select>
                                </div>
                            </div -->
							<div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Keywords</label>
                                <div class="col-sm-9 keyword-wrap">
                                    <input type="text" class="form-control" class='tags' id="dummy_keyword" name="dummy_keyword" autocomplete="off">
                                    <input type="hidden" id="keyword" name="keyword">
									<div id="get_keyword"></div>
									<div id="keyword-tag"></div>
                                </div>
                            </div>
							<input type="hidden" name="action" value="add_exercise">
                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="submit">Submit</button>
                                </div>
                            </div>
						</div>
					</div>
			
<!-- <link rel="stylesheet" type="text/css" href="static/css/jquery.tagsinput.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="static/js/jquery.tagsinput.js"></script>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />

<script type="text/javascript">
	$(function() {
		$('#keyword').tagsInput({
			width: 'auto',
			autocomplete_url:'static/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
		});
	});
</script> -->
