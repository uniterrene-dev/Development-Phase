<?php
/* Smarty version 3.1.30, created on 2017-02-04 07:33:52
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\exercises_dropdown.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589575d0199325_53527332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7009ed64ea4cd2faf3cccf3de1ca441b646d0f59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\exercises_dropdown.tpl',
      1 => 1486187070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589575d0199325_53527332 (Smarty_Internal_Template $_smarty_tpl) {
?>


<form id="myform" class="form-horizontal" role="form" method="get" action="exesteps.php">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="createFaultReport">
            <h2>Exercises Steps</h2>
            <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover table-striped">
                <tr>
                    <td>
                    <select id="exer_dropdown" name="exer_dropdown" >
                            <option value="-1">Select Exercise </option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exercise_data']->value['drop_down'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['exercise_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
					<input type="hidden" id="action" name="action" value="search">
					<input type="hidden" id="type" name="type" value="step">
                    </td>
                    <td><button class="btn btn-lg btn-success" id="submitNewBtn" type="submit" value="search">Submit</button></td>
                </tr>
            </table>
            </div>
          </div>
        </div>
    </div>
</form>

<?php }
}
