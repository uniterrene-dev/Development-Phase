<?php
/* Smarty version 3.1.30, created on 2017-02-06 13:26:01
  from "C:\xampp\htdocs\Physio_Therapy_Dev\add_category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58986b598e9992_11209870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a76c938964cdd8121f44220bf42d2d630ecfd01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\add_category.tpl',
      1 => 1486375233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tab.tpl' => 1,
  ),
),false)) {
function content_58986b598e9992_11209870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br/>
<?php $_smarty_tpl->_subTemplateRender("file:tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br/>

<form id="myform" class="form-horizontal" role="form" method="post" action="categories.php">
	<div class="col-md-4">
		<h2>Add Category </h2>
		<div class="container-fluid">
			<div class="form-group">
				<label for="main_category" class="col-sm-3 control-label">main Category</label>
				<div class="col-sm-9">
					<select type="text" id="main_category" name="main_category" class="form-control" >
						<option value="" >Select One</option>
						<option value="conditions" >Conditions</option>
						<option value="positions" >Positions</option>
						<option value="bodyparts" >Bodyparts</option>
						<option value="purpose" >Purpose</option>
						<option value="equipment" >Equipment</option>
					</select>
				</div>
			</div>
			 <div class="form-group">
				<label for="parent" class="col-sm-3 control-label">Parent Category</label>
				<div class="col-sm-9">
					<select type="text" id="parent" name="parent" class="form-control" >
						<option value="0" >Select One</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="category_name"  class="col-sm-3 control-label">Name :</label>
				<div class="col-sm-9">
					<input type="text" id="category_name" name="category_name" class="form-control" >
				</div>
			</div>
			<div class="form-group">
				<label for="category_name"  class="col-sm-3 control-label">Desciption :</label>
				<div class="col-sm-9">
					<textarea id="category_name" name="description" class="form-control" ></textarea>
				</div>
			</div>
			<input type="hidden" name="action" value="add_category">
			<div class="form-group">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-9">
					<button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" >Submit</button>
				</div>
			</div>
			</div>
	</div>
</form>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function (){
		$('#main_category').change(function(){
			var call_url = "categories.php";
			$.ajax({
				type: "POST",
				url: call_url,
				data: {
						main: $(this).val(),
						action: 'get_child'
				},
				success: function(result){
					//alert(result)
						$('#parent').html(result);
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
><?php }
}
