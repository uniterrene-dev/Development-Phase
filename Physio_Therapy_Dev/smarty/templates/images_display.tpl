
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
									{$cond_data}
									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Body Part</a>
									<ul class="sub-menu">
									{$bp_data}
									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Position</a>
									<ul class="sub-menu">
									{$pos_data}
									</ul>
								</li>

								<li class="menu-item menu-item-has-children"><a href="#">Purpose</a>
									<ul class="sub-menu">
									{$purpose_data}
									</ul>
								</li>
								<li class="menu-item menu-item-has-children"><a href="#">Equipment</a>
									<ul class="sub-menu">
									{$equip_data}
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
                        </div>
                </div>

    <script>
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
    </script>


<script type="text/javascript" src="static/js/drag.js"></script>
<script src="static/js/drag-ui.js" type="text/javascript"></script>


				<script type="text/javascript">
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
				</script>

