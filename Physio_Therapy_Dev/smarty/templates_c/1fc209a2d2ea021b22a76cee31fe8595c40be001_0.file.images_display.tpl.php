<?php
/* Smarty version 3.1.30, created on 2017-02-04 12:14:27
  from "C:\xampp\htdocs\Physio_Therapy_Dev\smarty\templates\images_display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895b7939bee45_23349964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fc209a2d2ea021b22a76cee31fe8595c40be001' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Physio_Therapy_Dev\\smarty\\templates\\images_display.tpl',
      1 => 1484053246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895b7939bee45_23349964 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link href="static/css/style_img.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


		<div class="container margin-top-20">
			<div class="row">
				<div class="col-xs-12  col-md-9 col-md-push-3" role="main">
					<div class="content-container">
						<article>
							<div class="panel-grid row DragAndDrop">
								<div class="col-md-7 panel-grid-cell" id="dvSource" name="dvSource">
									<div class="so-panel panel-first-child panel-last-child" id="image_content" name="image_content">
										<img src="uploads/steps/stretch-1.png" alt="" style="position: relative;" class="ui-draggable ui-draggable-handle">
										<img src="uploads/steps/stretch-1.png" alt="" style="position: relative;" class="ui-draggable ui-draggable-handle">
										<img src="uploads/steps/1_1png.jpg" alt="" style="position: relative; width:120px;height:50px;" class="ui-draggable ui-draggable-handle">
									</div>
								</div>
								<div class="col-md-5 panel-grid-cell ui-droppable" id="dvDest" name="dvDest">
									<div class="so-panel panel-first-child panel-last-child">
										
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
				<div class="col-xs-12  col-md-3  col-md-pull-9">
					<div class="sidebar">
						<nav id="main-navigation" class="main-navigation__container">
							<ul id="menu-main-menu" class="main-navigation">
								<li class="menu-item menu-item-has-children"><a href="#">Condition</a>
									<ul class="sub-menu">
									<?php echo $_smarty_tpl->tpl_vars['cond_data']->value;?>

									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Body Part</a>
									<ul class="sub-menu">
									<?php echo $_smarty_tpl->tpl_vars['bp_data']->value;?>

									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Position</a>
									<ul class="sub-menu">
									<?php echo $_smarty_tpl->tpl_vars['pos_data']->value;?>

									</ul>
								</li>

								<li class="menu-item menu-item-has-children"><a href="#">Purpose</a>
									<ul class="sub-menu">
									<?php echo $_smarty_tpl->tpl_vars['purpose_data']->value;?>

									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Equipment</a>
									<ul class="sub-menu">
									<?php echo $_smarty_tpl->tpl_vars['equip_data']->value;?>

									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
                        </div>
                </div>

    <?php echo '<script'; ?>
>
        var canodition = '';
        var bodyparts = '';
        var positions = '';
        var purpose = '';
        var equipment = '';
        function image_select(type, value){
                var call_url = "images.php";
                //alert("url : " + call_url);
                //alert("type is : " + type + " value: " + value);
                if(type == 'conditions'){
                        canodition = value;
                } else if(type == 'bodyparts'){
                        bodyparts = value;
                } else if(type == 'positions'){
                        positions = value;
                } else if(type == 'purpose'){
                        purpose = value;
                } else if(type == 'equipment'){
                        equipment = value;
                }
                $.ajax({
                        type: "POST",
                        url: call_url,
                        data: {
                                conditions: canodition,
                                bodyparts: bodyparts,
                                positions: positions,
                                purpose: purpose,
                                equipment: equipment,
                                action: 'search'
                        },
                        success: function(result){
                                console.log(result);
                                var newObject = JSON.parse(result);
                                //alert(newObject.output);
                                document.getElementById("image_content").innerHTML = newObject.output;
				asdf();
                                //window.location.reload(true);
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown){
                                //alert("Error" +XMLHttpRequest);
                                //alert("test status :" + textStatus);
                                //alert(" error thrown" + errorThrown);
                        }
                });
        }
    <?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="static/js/drag.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/drag-ui.js" type="text/javascript"><?php echo '</script'; ?>
>


				<?php echo '<script'; ?>
 type="text/javascript">
				function asdf(){
				alert("CAlled asdf");
				//jQuery(window).on("load", function(){
				//alert("I Am in!!!");
                                $("#dvSource img").draggable({
                                revert: "invalid",
                                refreshPositions: true,
                                drag: function (event, ui) {
					//alert("After drg!!!");
                                ui.helper.addClass("draggable");
                                },
                                stop: function (event, ui) {
                                ui.helper.removeClass("draggable");
                                var image = this.src.split("/")[this.src.split("/").length - 1];
                                if ($.ui.ddmanager.drop(ui.helper.data("draggable"), event)) {
                                alert(image + " dropped.");
                                }
                                else {
                                alert(image + " not dropped.");
                                }
                                }
                                });
                                $("#dvDest").droppable({
                                drop: function (event, ui) {
                                if ($("#dvDest img").length == 0) {
                                $("#dvDest").html("");
                                }
                                ui.draggable.addClass("dropped");
                                $("#dvDest").append(ui.draggable);
                                }
                                });
                               // });
				}
				<?php echo '</script'; ?>
>

<?php }
}
