<?php
/* Smarty version 3.1.30, created on 2017-02-03 12:18:27
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\exesteps_dispay.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58946703ee61c2_06372061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee9766e72e2031e5aa3509def332c438cf67a2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\exesteps_dispay.tpl',
      1 => 1486120645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58946703ee61c2_06372061 (Smarty_Internal_Template $_smarty_tpl) {
?>


                        <!--h2>Exercise Steps for "<?php echo $_smarty_tpl->tpl_vars['exer_data']->value;?>
" <a href="exesteps.php?action=add_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['exercise_id']->value;?>
"> Add new Steps</a></h2-->
                        <div class="table-responsive">
			<table id="example" class="table table-bordered table-hover table-striped">
			  <tbody>
			  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps_data']->value['table_data'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
				<tr><td>Exercise Step ID</td><td><a href="exesteps.php?action=update_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['exercise_id'];?>
&steps_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['steps_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['row']->value['steps_id'];?>
</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remove Steps &nbsp;&nbsp;<a href="exesteps.php?action=delete_steps&exercise_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['exercise_id'];?>
&steps_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['steps_id'];?>
" ><i class="fa fa-trash-o"></i></a> </td></tr>
				<tr><td>Exercise Name</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['exercise'];?>
</td></tr>
				<tr><td>Description</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td></tr>
				<tr><td>Image</td><td><?php if ($_smarty_tpl->tpl_vars['row']->value['file_id']) {?><img src="uploads/steps/<?php echo get_image($_smarty_tpl->tpl_vars['row']->value['file_id']);?>
"  style="width:120px;height:50px;"/><?php }?></td></tr>
				<tr><td>English</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['english'];?>
</td></tr>
				<tr><td>Hindi</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['hindi'];?>
</td></tr>
				<tr><td>Urdu</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['urdu'];?>
</td></tr>
				<tr><td>Telugu</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['telugu'];?>
</td></tr>
				<tr><td>Tamil</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['tamil'];?>
</td></tr>
				<tr><td>Bengali</td><td><?php echo $_smarty_tpl->tpl_vars['row']->value['bengali'];?>
</td></tr>
			   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			  </tbody>
			</table>


<?php }
}
