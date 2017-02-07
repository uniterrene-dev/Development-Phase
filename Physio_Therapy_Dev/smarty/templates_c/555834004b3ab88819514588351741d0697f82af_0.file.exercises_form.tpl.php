<?php
/* Smarty version 3.1.30, created on 2017-02-07 07:15:27
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exercises_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589965ffb65dc9_04367532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '555834004b3ab88819514588351741d0697f82af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exercises_form.tpl',
      1 => 1486448107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589965ffb65dc9_04367532 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cond_data']->value, 'val', false, 'k');
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
                            </div>

                            <div class="form-group position">
                                <label for="color" class="col-sm-3 control-label">Position</label>
                                <div class="col-sm-9">
									<select id="position" name="position[]" class="category_list form-control">
                                        <option value="">Select Position</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pos_data']->value, 'val', false, 'k');
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

                            <div class="form-group bodypart">
							   <div class="category_wrap">
                                <label for="color" class="col-sm-3 control-label">Bodyparts</label>
                                <div class="col-sm-9">
                                    <select id="bodypart" name="bodypart[]" class="category_list form-control">
										<option value="">Select Bodypart</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bp_data']->value, 'val', false, 'k');
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
                            </div>
                            <div class="form-group purpose">
                                <label for="color" class="col-sm-3 control-label">Purpose</label>
                                <div class="col-sm-9">
                                    <select id="purpose" name="purpose[]" class="category_list form-control">
										<option value="">Select Purpose</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purpose_data']->value, 'val', false, 'k');
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
                            <div class="form-group equipment">
							  <div class="category_wrap">
                                <label for="color" class="col-sm-3 control-label">Equipments</label>
                                <div class="col-sm-9">
                                    <select id="equipment" name="equipment[]" class="category_list form-control">
										<option value="">Select Equipment</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equip_data']->value, 'val', false, 'k');
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
                            </div>
                            <!--div class="form-group muscle">
                                <label for="color" class="col-sm-3 control-label">Muscle</label>
                                <div class="col-sm-9">
                                    <select id="muscle" name="muscle" class="form-control">
                                        <option value="">Select Muscle</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['muscle_data']->value, 'val', false, 'k');
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
                            <div class="form-group movement">
                                <label for="color" class="col-sm-3 control-label">Movement</label>
                                <div class="col-sm-9">
                                    <select id="movement" name="movement" class="form-control">
                                        <option value="">Select Movement</option>;
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movement_data']->value, 'val', false, 'k');
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
                            </div -->
							<div class="form-group">
                                <label for="color" class="col-sm-3 control-label">Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" class='tags' id="keyword" name="keyword">
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
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/js/jquery.tagsinput.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />

<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		$('#keyword').tagsInput({
			width: 'auto',
			autocomplete_url:'static/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
		});
	});
<?php echo '</script'; ?>
> -->
<?php }
}
