<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:33:46
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\tab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589575ca5aeca1_74913454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da441788c438bfd89c61fefc718e976bb5d14417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\tab.tpl',
      1 => 1485856334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589575ca5aeca1_74913454 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="form_list" class="form-horizontal" role="form" action="index.php" method="post">
        <div class="row">
			<div class="col-sm-9">
			<?php if ($_smarty_tpl->tpl_vars['role_id']->value == 1) {?>
				<button class="btn-primary" value="Users" type="submit" name="submitButton">Users</button>
				<button class="btn-primary" value="Clinics" type="submit" name="submitButton">Clinics</button>
				<button class="btn-primary" value="UserInfo" type="submit" name="submitButton">Users Info</button>
				<button class="btn-primary" value="Reports" type="submit" name="submitButton">Reports</button>
				<button class="btn-primary" value="Exercises" type="submit" name="submitButton">Exercises</button>
				<button class="btn-primary" value="ExeSteps" type="submit" name="submitButton">Exe - Steps</button>
			<?php }?>
		
			<button class="btn-primary" value="Images" type="submit" name="submitButton">Images</button>
			<button class="btn-primary" value="Patients" type="submit" name="submitButton">Patients</button>
			</div>
        </div>
</form>

<?php }
}
