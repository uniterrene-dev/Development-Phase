<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:42:14
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exesteps_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589577c6b601f5_97244765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5a1318ca9deaddd4d01abd0dd6a5e67336b31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exesteps_form.tpl',
      1 => 1486035727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589577c6b601f5_97244765 (Smarty_Internal_Template $_smarty_tpl) {
?>

		<form id="myform" class="form-horizontal" role="form" method="post" action="exesteps.php" enctype="multipart/form-data">
		    <div class="col-md-10">
                        <h2>
							Add/Edit Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exercise_name']->value;?>
" 
								<?php if (!empty($_smarty_tpl->tpl_vars['step_id']->value)) {?> 
									<?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['steps_id'])) {?>
										Step - <?php echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['steps_id'];?>

									<?php }?>
								<?php }?>
						</h2>
                        <p>Please enter the Exercise steps details below</p>
                        <div class="container-fluid">
                            <input type="hidden" id="exercise_id" name="exercise_id" value="<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
">
                            <input type="hidden" id="steps_id" name="steps_id" value="<?php if (!empty($_smarty_tpl->tpl_vars['steps_id']->value)) {
echo $_smarty_tpl->tpl_vars['steps_id']->value;
}?>">
                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['img_loc'])) {?>
										<img src="uploads/steps/<?php echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['img_loc'];?>
"  style="width:120px;height:50px;"/>
									<?php }?>
                                    <input type="file" id="upload_img" name="upload_img" onchange="displayPreview(this.files);"/>
									<span id="preview"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" id="description" name="description" value="<?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['description'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['description'];?>
 <?php }?>" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">English</label>
                                <div class="col-sm-9">
                                    <textarea id="english" name="english" rows="4" cols="50" class="form-control"><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['english'])) {?> $steps_data.table_data.1.english) <?php }?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Hindi</label>
                                <div class="col-sm-9">
                                    <textarea id="hindi" name="hindi" rows="4" cols="50" class="form-control" ><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['hindi'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['hindi'];?>
 <?php }?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Urdu</label>
                                <div class="col-sm-9">
                                    <textarea id="urdu" name="urdu" rows="4" cols="50" class="form-control" ><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['urdu'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['urdu'];
}?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Telugu</label>
                                <div class="col-sm-9">
                                    <textarea id="telugu" name="telugu" rows="4" cols="50" class="form-control" ><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['telugu'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['telugu'];
}?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Tamil</label>
                                <div class="col-sm-9">
                                    <textarea id="tamil" name="tamil" rows="4" cols="50" class="form-control" ><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['tamil'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['tamil'];?>
 <?php }?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="registration"  class="col-sm-3 control-label">Bengali</label>
                                <div class="col-sm-9">
                                    <textarea id="bengali" name="bengali" rows="4" cols="50" class="form-control" ><?php if (!empty($_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['bengali'])) {
echo $_smarty_tpl->tpl_vars['steps_data']->value['table_data'][1]['bengali'];?>
 <?php }?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-9">
								<input type="hidden" id="action" name="action" value="edit_steps">
                                    <button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" value="edit_steps">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
		</form>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi">
    <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var _URL = window.URL || window.webkitURL;
function displayPreview(files) {
   var file = files[0]
   var img = new Image();
   var sizeKB = file.size / 1024;
   document.getElementById("preview").innerHTML="";
   img.onload = function() {
     
       $('#preview').append(img);
       //alert("Size: " + sizeKB + "KB\nWidth: " + img.width + "\nHeight: " + img.height);
   }
   img.src = _URL.createObjectURL(file);
}
<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

      google.load("elements", "1", {
            packages: "transliteration"
          });

      function translate_hi() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['hi'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        var ids = [ "hindi" ];
        control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(translate_hi);

      function translate_ur() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['ur'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        var ids = [ "urdu" ];
        control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(translate_ur);

      function translate_te() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['te'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        var ids = [ "telugu" ];
        control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(translate_te);

      function translate_ta() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['ta'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        var ids = [ "tamil" ];
        control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(translate_ta);

      function translate_bn() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['bn'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        var control = new google.elements.transliteration.TransliterationControl(options);
        var ids = [ "bengali" ];
        control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(translate_bn);

    <?php echo '</script'; ?>
>

<?php }
}
