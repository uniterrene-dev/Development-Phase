<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>PhysioTherapy</title>
	<link rel="stylesheet" href="static/css/panel/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/panel/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/panel/custom_slide.css">
	<link rel="stylesheet" href="static/css/panel/responsive.css">
	<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
</head>
<body>
<span class="Hiddenspan"></span>
<!-- Hidden span -->
<span id="hid1" style="display: none"></span>
<!-- header -->
	<header id="main_Header">
		<div class="container">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="navbar-brand logoArea">
					<a href="#"><img src="static/images/panel/logo.png" alt=""></a>
					<p class="topAddress">
						345 Avon Road, Apt E 157,
						Devon, PA. 19333
					</p>
				</div>
			</div>
			<!-- logo section -->

			<!-- heading Section -->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="headingSection">
					<h1>Physical Therapy Home Exercise Program</h1>
				</div>
			</div>
			<!-- heading Section ends -->

			<!-- Header Right -->
				<div class="col-md-3 col-sm-3 col-xs-12 navbar-right text-right">
					<div class="headerRight">
						<ul class="list-inline">
									
							<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="fa fa-angle-down"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Action</a></li>					            
					          </ul>
					        </li>

					        <li class="dropdown language">Change Language:
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <span class="fa fa-angle-down"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>			            
					            <li><a href="#">Action</a></li>			            
					            <li><a href="#">Action</a></li>			            
					            <li><a href="#">Action</a></li>
					          </ul>
					        </li>
						</ul>
						<button class="btn btn-warning btn-signout"><img src="static/images/panel/signout.png" alt="">Signout</button>
					</div>
				</div>
			<!-- Header right Ends -->
			
		</div>
		<!-- container ends -->
	</header>
<!-- header Ends -->

<!-- user Status -->
	<section id="user_Status" class="">
		<div class="container">
			<div class="user_Details_container">
				<ul class="list-inline userDetails">
					<li class="user userName"><a href="javascript:void(0)"> Subhash Namini </a></li>
					<li class="user dob"><a href="javascript:void(0)"> DOB: <span> 12/22/1985 </span></a></li>
					<li class="user mrNumber"><a href="javascript:void(0)"> MR Number:<span> #12345 </span></a></li>
					<li class="user BalanceDysfunction"><a href="javascript:void(0)"> Balance Dysfunction </a></li>
				</ul>
			</div>
		</div>
		<!-- container ends -->
	</section>
<!-- End user Status  -->


<!-- search Area -->
	<section class="searchArea">
		<div class="container col-md-5 col-sm-6 coll-xs-12 customSearchBar">
			<form action="#" method="post" class="">
				<input type="text" class="form-control" placeholder="Search Exercises" name="searchbox">
				<button class="btn btn-success btn-search"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</section>
<!-- End Search Area -->
<!-- Main content area Start -->
	<section class="main_Content_Container">
		<!-- slide section -->
			<section class="col-md-9 slideSection" >
			<div class="customSelect">
				<select class="popup_chng_lang">
				  <option value="En">Change Language</option>
				  <option value="english" selected>English</option>
				  <option value="hindi">Hindi</option>								  
				</select>
			</div>
			<!-- for english -->
				<div class="slidearea showEnglish clearfix">
					<span class="fa fa-times closePop"></span>
					<div class="col-md-6">
						<div class="photosAndVideosArea">
							<div class="tabArea">
								<ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">
									<i class="fa fa-camera"></i>
								    Photos</a></li>
								    <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">
								    <i class="fa fa-video-camera"></i>
								    Videos</a></li>
								</ul>
							</div>
							
							<div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="photos">
							    	<ul class="list-inline clearfix">							    	
							    		<li class="col-md-12"> <div class="imgWrap"><img src="static/images/panel/6_1png.jpg" class="stepImageOnPop" alt=""></div>
										<span><i class="fa fa-caret-right"></i> Image label 1</span>
							    		</li>
							    		
							    	</ul>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="videos">
							    	<ul class="list-inline clearfix">							    	
							    		<li class="col-md-12"> <div class="imgWrap"><img src="images/gif_video_1.gif" class="stepImageOnPop" alt=""></div>
										<span><i class="fa fa-caret-right"></i> video label 1</span>
							    		</li>
							    		
							    	</ul>
							    </div>							    
							</div>

							<div class="flipArea">
								<ul class="list-inline">
									<li><a href="javascript:void(0)" ><img src="static/images/panel/rotate.png" title="Flip Image"/></i></a>
									<span class="backView">Back View</span>
									</li>
								</ul>
							</div>
							<div class="thumbnailArea thumbsForImage">
								<ul class="list-inline">
									<!-- <li class="activeThumb"><a href="javascript:void(0)" ><img src="images/photos_thumb1.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="images/thumb2.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="images/thumb1.jpg" title="Thumbnail"></i></a></li> -->
								</ul>
							</div>

							<div class="thumbnailArea thumbsForVideos">
								<ul class="list-inline">
									<li class="activeThumb"><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb1.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb2.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb1.jpg" title="Thumbnail"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- photos and videos area ends -->
					</div>
					<div class="col-md-6 popDes">
						<h2>Step 1</h2>	
						<a href="javascript:void(0)" class="editExerciseName"><i class="fa fa-edit"></i> Edit Exercise Name</a>						
						<div class="options">
							<ul class="list-inline">
								<li><label><input type="radio" name="instructions_checkbox" checked value="original_inst" checked>Original Instructions</label></li>
								<li><label><input type="radio" name="instructions_checkbox" value="programmer_inst">Program's Instructions</label></li>
							</ul>
						</div>

						<div class="editArea">
							<div class="textEdit">	
								<div class="editNameOption">
								<label for="editName">Add Name </label>
								<input type="text" id="editName" >
								<a href="javascript:void(0)" class="addName btn btn-warning">Add</a>
								<ul class="appendNewName">
									<li><label><input type="radio" name="ExerciseName" checked value="original_inst"><span>Original Instructions</span></label></li>
								</ul>
								</div>							
								<div class="popupEditAble">
									<label> Frequency </label>
									<a href="javascript:void(0)" class="addNewItem"><i class="fa fa-plus"></i> Add new Parameter</a>
										<div class="ItemInfoEditable">
										<ul class="list-inline">
											<li><input placeholder="3" name="weekly" type="text"> x Weekly <span><i class="fa fa-times"></i></span></li>
											<li><input placeholder="5" name="daily" type="text"> x Daily  <span><i class="fa fa-times"></i></span></li><hr style="border-top: dotted 1px #ddd;" />
											<li><input placeholder="3" name="rips" type="text"> Rips  <span><i class="fa fa-times"></i></span></li>
											<li><input placeholder="8" name="sets" type="text"> Sets  <span><i class="fa fa-times"></i></span></li>
											<li><input placeholder="7" name="hold" type="text"> Hold <span><i class="fa fa-times"></i></span></li>
										</ul>
									</div>
									
								</div>
								<label for="inst"> Instructions </label>
								<textarea name="" id="inst"></textarea>
								<label for="myIns">
									<input type="checkbox" id="myIns">Set as my instructions
								</label>
								<button class="btn btn-success finishEdit"> Finish Editing</button>
								<button class="btn btn-primary finishEdit btn-save-popup"> Save</button>
							</div>
						</div>
						
					</div>
					<div class="col-md-12">
						
					</div>
				</div>
				<!-- For hindi -->
				<div class="slidearea showHindi clearfix">
					<span class="fa fa-times closePop"></span>
					<div class="col-md-6">
						<div class="photosAndVideosArea">
							<div class="tabArea">
								<ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">
									<i class="fa fa-camera"></i>
								    Photos</a></li>
								    <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">
								    <i class="fa fa-video-camera"></i>
								    Videos</a></li>
								</ul>
							</div>
							
							<div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="photos">
							    	<ul class="list-inline clearfix">							    	
							    		<li class="col-md-12"> <div class="imgWrap"><img src="static/images/panel/6_1png.jpg" class="stepImageOnPop" alt=""></div>
										<span><i class="fa fa-caret-right"></i> छवि लेबल 1</span>
							    		</li>
							    		
							    	</ul>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="videos">
							    	<ul class="list-inline clearfix">							    	
							    		<li class="col-md-12"> <div class="imgWrap"><img src="static/images/panel/gif_video_1.gif" class="stepImageOnPop" alt=""></div>
										<span><i class="fa fa-caret-right"></i> वीडियो लेबल 1</span>
							    		</li>
							    		
							    	</ul>
							    </div>							    
							</div>

							<div class="flipArea">
								<ul class="list-inline">
									<li><a href="javascript:void(0)" ><img src="static/images/panel/rotate.png" title="Flip Image"></i></a>
									<span class="backView">Back View</span>
									</li>
								</ul>
							</div>
							<div class="thumbnailArea thumbsForImage">
								<ul class="list-inline">
									<li class="activeThumb"><a href="javascript:void(0)" ><img src="static/images/panel/photos_thumb1.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/thumb2.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/thumb1.jpg" title="Thumbnail"></i></a></li>
								</ul>
							</div>

							<div class="thumbnailArea thumbsForVideos">
								<ul class="list-inline">
									<li class="activeThumb"><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb1.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb2.jpg" title="Thumbnail"></i></a></li>
									<li class=""><a href="javascript:void(0)" ><img src="static/images/panel/video_thumb1.jpg" title="Thumbnail"></i></a></li>
								</ul>
							</div>
						</div>
						<!-- photos and videos area ends -->
						
					</div>
					<div class="col-md-6 popDes">
						<h2>Step 1</h2>	

						<div class="options">
							<ul class="list-inline">
								<li><label><input type="radio" name="checkbox" checked value="value">मूल निर्देशों</label></li>
								<li><label><input type="radio" name="checkbox" value="value">कार्यक्रम के निर्देश</label></li>
							</ul>
						</div>

						<div class="editArea">
							<div class="textEdit">
								<!-- <div class="customSelect">
									<select class="popup_chng_lang">
									  <option value="En">Change Language</option>
									  <option value="english">English</option>
									  <option value="hindi">Hindi</option>								  
									</select>
								</div> -->
								<label for="editName"> नाम </label>
								<input type="text" id="editName">
								<label for="inst"> अनुदेश </label>
								<textarea name="" id="inst"></textarea>
								<label for="myIns">
									<input type="checkbox" id="myIns"> मेरे निर्देशों के रूप में सेट
								</label>
								<button class="btn btn-success finishEdit"> समाप्त संपादन</button>
								<button class="btn btn-primary finishEdit btn-save-popup"> बचाना</button>
							</div>
						</div>
						
					</div>
					<div class="col-md-12">
						
					</div>
				</div>


			</section>
		<!-- slide section ends -->
		<!-- main container -->
		<div class="container">
			<!-- point out area -->
			<section class="pointOut_Area navbar navbar-default">
				<div class="col-md-2">
				<!-- Blank -->
				</div>
				<div class="col-md-7 forDragAndDropIcon">
					<a href="javascript:void(0)" class="removeAll"><i class="fa fa-times"></i> Remmove All</a>
					<div class="curve"></div>
					<!-- <button class="btn btn-warning btn-pointOut">Streches <i class="fa fa-times"></i></button>
					<button class="btn btn-warning btn-pointOut">Resistance Band <i class="fa fa-times"></i></button> -->
				</div>
			</section>
			<!-- point out area ends-->
			<!-- left panel -->
			<div class="col-md-2 col-sm-3 NoPaddingLeft">
				<div class="list_Menus">
					<div class="mainItemswrapper">
						<ul class="mainItemLists">
							<li><a class="" href="javascript:void(0)">Condition<i class="fa fa-plus"></i></a>
								<ul class="child mainChild mainChild_hide">
									{$cond_data}									
								</ul>															
							</li>
							<!-- appendPoint area -->
								<div class="appendPoint"></div>
							<!-- appendPoint area -->	
							<li id="body_parts"><a class="" href="javascript:void(0)">Body Parts<i class="fa fa-plus"></i></a>
									<ul class="child mainChild mainChild_hide">
										{$bp_data}
									</ul>									
							</li>
							<!-- appendPoint area -->
								<div class="appendPoint"></div>
							<!-- appendPoint area -->	
							<li><a class="" href="javascript:void(0)">Position<i class="fa fa-plus"></i></a>
									<ul class="child mainChild mainChild_hide">
										{$pos_data}
									</ul>
							</li>
							<!-- appendPoint area -->
								<div class="appendPoint"></div>
							<!-- appendPoint area -->	
							<li><a class="" href="javascript:void(0)">Purpose<i class="fa fa-plus"></i></a>
								<ul class="child mainChild mainChild_hide">
									{$purpose_data}
								</ul>
							</li>
							<!-- appendPoint area -->
								<div class="appendPoint"></div>
							<!-- appendPoint area -->	
							<!-- Equipements li -->
							<li id="equip"><a class="" href="javascript:void(0)">Equipment<i class="fa fa-plus"></i></a>
								<ul class="child mainChild mainChild_hide">									
									{$equip_data}			
								</ul>
							</li>
							<!-- Equipements li ends -->
							<!-- appendPoint area -->
								<div class="appendPoint"></div>
							<!-- appendPoint area -->	
						</ul>
					</div>
				</div>
				<!-- for list Menus -->
				<!-- buttons -->
				<div class="buttonSets">
					<ul class="list-inline">
						<li class=""><a href="javascript:void(0)" class="btn btn-success btn-bottom-custom">Create Your Own Template </a></li>
						<li class="dropdown">
						<a  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)" class="btn btn-success btn-bottom-custom dropdown-toggle">Patient Education Handout <span class="fa fa-angle-down"></span></a>
						<ul class="dropdown-menu">
				            <li><a href="#">Dummy item 1</a></li>			            
				            <li><a href="#">Dummy item 2</a></li>			            
				            <li><a href="#">Dummy item 3</a></li>			            
				            <li><a href="#">Dummy item 4</a></li>
				          </ul>
						</li>
					</ul>
				</div>
				<!-- buttons end -->
			</div>
			<!-- left panel ends -->

			<!-- mid panel  -->
			<div class="col-md-7 col-sm-9">
				<div class="midTop forBorder">
					<div class="row minPanelWrapper">
						<ul class="list-inline clearfix">
							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/6_1png.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">												
												<i class="fa fa-times"></i>
											</div>
											<div class="videoPlaceholder">
											<ul>
												<li><img src="static/images/panel/6_1png.jpg" alt="#">
													<div class="SlideInfo">
														<span>Step 1: </span> Sit in a chair, lean forward to reach for left ankle
													</div>
												</li>												
												<li><img src="static/images/panel/6_2png.jpg" alt="#">
													<div class="SlideInfo">
														<span>Step 2: </span> Hold your left ankle with right hand.
													</div>
												</li>
												
												<li><img src="static/images/panel/6_3png.jpg" alt="#">
													<div class="SlideInfo">
													<span>Step 3: </span> Pick your left ankle with right hand, lean back to place the left foot on the right thigh, making a figure 4 with left leg.
												</div>
												</li>												
												<li><img src="static/images/panel/6_4png.jpg" alt="#">
													<div class="SlideInfo">
													<span>Step 4: </span> Lean forward, holding the left ankle with right hand, until you feel a stretch in your left buttock muscle.
												</div>
												</li>
												<li><img src="static/images/panel/6_1png.jpg" alt="#">
													<div class="SlideInfo">
														<span>चरण 1: </span> एक कुर्सी पर बैठो, आगे झुक बाएं टखने तक पहुँचने के लिए 
													</div>
												</li>
												<li><img src="static/images/panel/6_2png.jpg" alt="#">
													<div class="SlideInfo">
														<span>चरण 2: </span> दाहिने हाथ के साथ अपने बाएं टखने पकड़ो।
													</div>
												</li>
												<li><img src="static/images/panel/6_3png.jpg" alt="#">
													<div class="SlideInfo">
													<span>चरण 3: </span> दाहिने हाथ के साथ अपने बाएं टखने बाएं पैर के साथ एक आंकड़ा 4 बनाने उठाओ, दुबला वापस दाहिनी जांघ पर बाएं पैर जगह है,।
												</div>
												</li>
												<li><img src="static/images/panel/6_4png.jpg" alt="#">
													<div class="SlideInfo">
													<span>चरण 4: </span>आगे झुक, दाहिने हाथ के साथ बाएं टखने पकड़ रहा है, जब तक आप अपने बाएं कूल्हे की मांसपेशी में खिंचाव महसूस होता है।,।
												</div>
												</li>

											</ul>
												
											</div>
											<!-- <ul class="list-inline thumb_holder_pop">
												<li class="currnetPopThumb"><img src="static/images/panel/thumb1.jpg" alt="">
													<span>Step 1</span>
												</li>
												<li><img src="static/images/panel/thumb2.jpg" alt="">
													<span>Step 2</span>
												</li>
												<li><img src="static/images/panel/thumb1.jpg" alt="">
													<span>Step 3</span>
												</li>
											</ul> -->
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 1 -->
							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item2.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>This is a Dummy text</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">												
												<i class="fa fa-times"></i>
											</div>
											<div class="videoPlaceholder">
											<ul>
												<li><img src="static/images/panel/6_1png.jpg" alt="#">
													<div class="SlideInfo">
														<span>Step 1: </span> Sit in a chair, lean forward to reach for left ankle
													</div>
												</li>												
												<li><img src="static/images/panel/6_2png.jpg" alt="#">
													<div class="SlideInfo">
														<span>Step 2: </span> Hold your left ankle with right hand.
													</div>
												</li>
												
												<li><img src="static/images/panel/6_3png.jpg" alt="#">
													<div class="SlideInfo">
													<span>Step 3: </span> Pick your left ankle with right hand, lean back to place the left foot on the right thigh, making a figure 4 with left leg.
												</div>
												</li>												
												<li><img src="static/images/panel/6_4png.jpg" alt="#">
													<div class="SlideInfo">
													<span>Step 4: </span> Lean forward, holding the left ankle with right hand, until you feel a stretch in your left buttock muscle.
												</div>
												</li>
												<li><img src="static/images/panel/6_1png.jpg" alt="#">
													<div class="SlideInfo">
														<span>चरण 1: </span> एक कुर्सी पर बैठो, आगे झुक बाएं टखने तक पहुँचने के लिए 
													</div>
												</li>
												<li><img src="static/images/panel/6_2png.jpg" alt="#">
													<div class="SlideInfo">
														<span>चरण 2: </span> दाहिने हाथ के साथ अपने बाएं टखने पकड़ो।
													</div>
												</li>
												<li><img src="static/images/panel/6_3png.jpg" alt="#">
													<div class="SlideInfo">
													<span>चरण 3: </span> दाहिने हाथ के साथ अपने बाएं टखने बाएं पैर के साथ एक आंकड़ा 4 बनाने उठाओ, दुबला वापस दाहिनी जांघ पर बाएं पैर जगह है,।
												</div>
												</li>
												<li><img src="static/images/panel/6_4png.jpg" alt="#">
													<div class="SlideInfo">
													<span>चरण 4: </span>आगे झुक, दाहिने हाथ के साथ बाएं टखने पकड़ रहा है, जब तक आप अपने बाएं कूल्हे की मांसपेशी में खिंचाव महसूस होता है।,।
												</div>
												</li>

											</ul>
												
											</div>
											<!-- <ul class="list-inline thumb_holder_pop">
												<li class="currnetPopThumb"><img src="static/images/panel/thumb1.jpg" alt="">
													<span>Step 1</span>
												</li>
												<li><img src="static/images/panel/thumb2.jpg" alt="">
													<span>Step 2</span>
												</li>
												<li><img src="static/images/panel/thumb1.jpg" alt="">
													<span>Step 3</span>
												</li>
											</ul> -->
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 2 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item3.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">												
												<i class="fa fa-times"></i>
											</div>
											<div class="videoPlaceholder">
												<img src="static/images/panel/gif_placeholder.png" alt="#">
											</div>
											<button class="btn btn-success btn-play"><i class="fa fa-play"></i> Play</button>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 3 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item4.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">												
												<i class="fa fa-times"></i>
											</div>
											<div class="videoPlaceholder">
												<img src="static/images/panel/gif_placeholder.png" alt="#">
											</div>
											<button class="btn btn-success btn-play"><i class="fa fa-play"></i> Play</button>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 4 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item5.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">												
												<i class="fa fa-times"></i>
											</div>
											<div class="videoPlaceholder">
												<img src="static/images/panel/gif_placeholder.png" alt="#">
											</div>
											<button class="btn btn-success btn-play"><i class="fa fa-play"></i> Play</button>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 5 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item6.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 6 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item1.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 1 -->
							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item2.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 2 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item3.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 3 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item4.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 4 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item5.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 5 -->

							<li class="col-md-2 items dragable_Items" title="Click and drag">
								<div class="itemWrap items">
									<div class="imageArea">
										<img src="static/images/panel/item6.jpg" alt="">
									</div>
									<div class="ExName">
										<ul class="list-inline customList">
											<li><h4>Supine Hamstring Stretch with Strap</h4>
												<div class="customSelect">
													<select>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													  <option value="En">En</option>
													</select>
												</div>
												
											</li>										
										</ul>
									</div>
									<!-- Name and select box -->

									<!-- description -->
										<div class="itemDescription">
											<div class="HeadIng">
												<h4>Exercise Name</h4>
											</div>
											<h4>Step 1</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 2</h4>
											<p>Lorem ipsum dolor sit amet.</p>
											<h4>Step 3</h4>
											<p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
										</div>
									<!-- description ends -->

								</div>
							</li>
							<!-- items item 6 -->
						</ul>
					</div>
				</div>
				<!-- main mid panel erapper -->
			</div>
			<!-- mid panel  ends-->

			<!-- dropable area right panel-->
				<div class="col-md-3 col-xs-12 ">
					<!-- main drop area -->
					<div class="dropable_Area_wraper photosDropAble">

						<div class="areaRow dropedAreaNew">
							<div class="head">
								<h4> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Instructions</h4>
							</div>
							<ul class="list-inline mainDropUl">
								<li class="placeholderForDrop">
									<div class="">
										<!-- <i class="fa fa-picture-o" aria-hidden="true"> --></i>
										<i class="fa fa-plus"></i> Drop Here
									</div>
								</li>
								<li id="preDefined">
									<div class="allwrap clearfix">
										<div class="close" title="Remove">
											<i class="fa fa-times"></i>
										</div>
										<div class="drop">
												<img src="http://www.placehold.it/60x60" alt="">
										</div>
										<div class="ItemInfoEditable" style="white-space: nowrap;">
											<h4>Exercise Name</h4>
											<input type="text" placeholder="3" name="weekly"> x Weekly <input type="text"  placeholder="5" name="daily"> x Daily <input type="text"  placeholder="3" name="rips"> Rips <br/><input type="text"  placeholder="8" name="sets"> Sets <input type="text"  placeholder="7" name="hold"> Hold
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- <div class="areaRow">
							<h4>Exercise 1</h4>
							<div class="mainDorpHolder photosDrop">
								<ul class="list-inline ">
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 1</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 2</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 3</span>
									</li>
									<div style="clear: both;"></div>
								</ul>
							</div>
						</div> -->
						<!-- area row -->


						<!-- <div class="areaRow">
							<h4>Exercise 2</h4>
							<div class="mainDorpHolder photosDrop">
								<ul class="list-inline ">
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 1</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 2</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Image 3</span>
									</li>
									<div style="clear: both;"></div>
								</ul>
							</div>
						</div> -->
						<!-- area row -->

					</div>
					<!-- main drop area ends -->

					<!-- buttons area -->
					<div class="buttonsAreaWrap">
						<div class="buttonsArea">
							<ul class="list-inline">
								<li class="col-md-12 col-sm-12 col-xs-12">
									<a class="btn btn-primary btn-save">Save</a>
								</li>	
								<li class="col-md-6 col-sm-6 col-xs-12">
									<a class="btn btn-warning btn-bottom-custom btn-save-template">Save as Template</a>
								</li>
								<li class="col-md-6 col-sm-6 col-xs-12">
									<a class="btn btn-warning btn-bottom-custom btn-preview">Preview</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- buttons area ends -->

				</div>
			<!-- dropable area ends-->

			<!-- videos section  -->
			
			<section class="videos">
				<div class="col-md-2">
					<!-- blank -->
				</div>
				<div class="col-md-7 ">
					<!-- videos area -->
					<div class="videos_area">
						<h3>VIDEOS</h3>

						<div class="gifHolder forDragAndDropIcon">
							<div class="curve"></div>
							<ul class="list-inline forBorder">
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>

								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<div class="gifItems">
										<img src="static/images/panel/gif_placeholder.png" alt="">
									</div>
								</li>

								<div style="clear: both;"></div>
							</ul>
							<div style="clear: both;"></div>
						</div>
					</div>
					<!-- videos area ends-->
				</div>


				<div class="col-md-3">
					<div class="dropable_Area_wraper videosDropable">
						<div class="areaRow">							
							<div class="mainDorpHolder">
								<ul class="list-inline ">
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Video 1</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Video 2</span>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-12">
										<div class="drop">
											<p>Image or video Place holder</p>
										</div>
										<span>Video 3</span>
									</li>
									<div style="clear: both;"></div>
								</ul>
							</div>
						</div>
						<!-- area row -->

						

					</div>
				</div>
			</section>
			<!-- videos section ends -->			
		</div>
		<!-- main container ends -->
	</section>
<!-- Main content area End -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="static/js/panel/bootstrap.min.js"></script>	
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="static/js/panel/custom_slide.js"></script>
	<script src="static/js/panel/functions.js"></script>
	<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea',force_p_newlines : true });
	</script>
</body>