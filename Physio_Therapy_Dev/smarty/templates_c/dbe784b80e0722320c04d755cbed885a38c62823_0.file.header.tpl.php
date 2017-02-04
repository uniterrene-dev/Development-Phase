<?php
/* Smarty version 3.1.30, created on 2017-01-31 11:53:29
  from "C:\xampp\htdocs\prabhu3482\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58906ca987e8f0_52843308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe784b80e0722320c04d755cbed885a38c62823' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prabhu3482\\smarty\\templates\\header.tpl',
      1 => 1485860008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58906ca987e8f0_52843308 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="MyHealth">
    <meta name="author" content="MyHealth">
    <title>My Health </title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">


    <?php echo '<script'; ?>
 src="static/js/bootstrap.min.new.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>    

  </head>
  <body>
                <header>
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-8">
                                                <p class="form-signin-heading">Welcome to My Health</p>
                                                <?php if ($_smarty_tpl->tpl_vars['logout_no_show']->value > 0) {
} else { ?> <a class="pad_left0" href="logout.php" role="button">Logout</a></br>
                                                <a class="pad_left0" href="index.php" role="button">Home</a><?php }?>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="logoImg">My Health</div>
                                                <!-- <img src="images/logo2.png" class="img-responsive" alt="Responsive image"> -->
                                        </div>
                                </div>
                        </div>
                </header>

<?php }
}
