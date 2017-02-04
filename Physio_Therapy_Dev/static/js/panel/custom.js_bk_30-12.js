$(document).ready(function () {
			$('[data-toggle="tooltip"]').tooltip(); 
			var imageLink;
			var videoLink;
			var allDetailsVideo;
			var allDetails;
			var hoverEditem = 0;
			var hoverEditItemArray = [];
			var reArrangedArray = [];
			var mainItemHovered = 0;
			var needToAppendHere = '';
			var arrayIndexCount = 0;
			$('.mainItemLists > li > a').mouseenter(function() {			
				mainItemHovered = $(this).text();			
			});

			//closeing a popup
			$('.closePop').bind('click',function(){
				$(this).parent().parent().fadeOut();
			});
			

			$(document).on('click', '.btn-pointOut', function(){			
				$(this).remove();
				var btnTxt = $(this).text();		
				$('.appended').each(function(index){
					var liText = $(this).find('a').text();					
					if(btnTxt == liText){
						$(this).remove();				
					}
				});

			});

			$(document).on('click','.appended a i', function(){				
				$(this).parent().parent().remove();

				var deletedText = $(this).parent().text();

				//for upper section remove
				$('.btn-pointOut ').each(function(index){
					var btnTxt = $(this).text();

					if(deletedText == btnTxt){
						$(this).remove();
					}
				});

			});
					
			$(document).on('click', '.dropped', function(){
				var aD = allDetails;
				var thisIs = $(this).attr('id');
				onDropProcessing(aD , thisIs);
			});

			$('.minPanelWrapper li .items .imageArea >img').mousedown( function(){
					var bb = fullData(this);
					var aa = clickedOnDragableItems(this);
					imageLink = aa;
					allDetails = bb;
			});

			//videos area image link

			$('.gifHolder  li .gifItems >img').mousedown( function(){				
				    videoLink = $(this).attr('src');
					console.log(videoLink);				
			});

			$('.minPanelWrapper li .items .imageArea >img').mouseup(function(){
				//do nothing
				console.log(allDetails.stepImage);
			});

			//draggable photos
			$('.minPanelWrapper li .items .imageArea >img').draggable({				
					containment: 'document',
					revert: true,
					 zIndex: 900,				
					start: function(event){					
						var content = imageLink;					 	
					}
			});	

			//draggable videos
			$('.videos_area .gifItems >img').draggable({				
					containment: 'document',
					revert: true,
					 zIndex: 900,				
					start: function(event){					
						var content = imageLink;					 	
					}
			});		

			//droppable images
			$('.photosDrop li').droppable({
					drop: function(){
						var content = imageLink;
						$(this).find('.drop').addClass('dropped');
						$(this).find('.drop').find('p').hide();
						$(this).find('.drop').addClass('hoverOnDrop');
						var imgLink = content.split("/");
						$(this).find('.drop').attr('id', imgLink[1]);
						$(this).find('.drop').css({'background':'url('+ content +') center center no-repeat','background-size':'cover'});
						
					},
					accept: '.minPanelWrapper li .items .imageArea >img',
					hoverClass: 'hoverOnDrop',
			});

			//droppable videos
			$('.videosDropable li').droppable({
					drop: function(){
						var content = videoLink;
						$(this).find('.drop').addClass('dropped');
						$(this).find('.drop').find('p').hide();
						$(this).find('.drop').addClass('hoverOnDrop');
						var imgLink = content.split("/");
						$(this).find('.drop').attr('id', imgLink[1]);
						$(this).find('.drop').css({'background':'url('+ content +') center center no-repeat','background-size':'cover'});
						
					},
					accept: '.videos_area .gifItems >img',
					hoverClass: 'hoverOnDrop',
			});


			var l = $('.minPanelWrapper > ul > li').length
			for(i=0; i< l; i++){
				var customId = 'dragItem'+i;
				$('.minPanelWrapper > ul > li').eq(i).attr('id', customId);
			}

			//getting the value on hidden span
			$('#equip li ul a').mouseenter(function(){
				var parentText = $(this).parent().parent().parent().find('a').eq(0).text();
				parentText = $.trim(parentText);			
				console.log("Parent Text Hidden span value : "+parentText);
				$('#hid1').text(parentText);
			});
			



			$('.mainChild  li a').bind('click',function(){

					checkToResize();			
					$('.mainItemLists > li >a').each(function(){
						var currentText = $(this).text();
						if(currentText == mainItemHovered){					
							needToAppendHere = $(this).parent().next();
							console.log('Need to append: '+needToAppendHere);
						}
					});


					if($(this).next().hasClass('childs') == true){	
						//do nothing				
						}

					else{
							var nV = $.trim($('#hid1').text());
							if(nV){
								//alert(nV);
								hoverEditem = nV;
							}
							var xxx = $('.mainItemLists li').html();				
							$('.mainItemLists li ul').each(function(){
								if($(this).attr('data-id') != undefined){					
								reArrangedArray.push($(this).attr('data-id'));
								}
							});
							console.log("Rearranged Array: "+reArrangedArray);

							//ranit 29-12
							if($(this).parent().parent().hasClass('mainChild') == true){
								console.log('You clicked on a item, that has no child and its an mainchild item');
								reArrangedArray = [];
								hoverEditem = 0;
							}

							var mylist = $(this).parent().parent().parent();
							var text = $(this).text();
							

							var btnText = $('.forDragAndDropIcon button').each(function(index){
								var xx = $(this).text();
								var yy = hoverEditem;
								xx = $.trim(xx);
								tex = $.trim(text);	
								zz = $.trim(yy);
								if(tex == xx){						
									$(this).remove();						
								}
								if(zz == xx){
									// $(this).remove();
								}

							});

							var btnText = needToAppendHere.find('li').each(function(index){								
								var xx = $(this).find('a').text();
								var yy = hoverEditem;
								var rr = text;
								ww = $.trim(rr);
								xx = $.trim(xx);										
								zz = $.trim(yy);
								if(xx == zz){
									//$(this).remove();						
								}
								if(xx == ww){					
									$(this).remove();
								}				

							});
							
							if(hoverEditem != 0){
								var btnText = $('.forDragAndDropIcon button').each(function(index){
								var xx = hoverEditem;
								xx = $.trim(xx);
								tex = $.trim(text);					
								if(tex == xx){
									 $(this).remove();
								}
							});								
								if(reArrangedArray.length > 0){
									for(i=0;i<reArrangedArray.length;i++){
										$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ reArrangedArray[i] +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
									}
								}

								//$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditem +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
								$('<button class="btn btn-warning btn-pointOut itsAparent">'+ hoverEditem +' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');
							}

							$('<button class="btn btn-warning btn-pointOut">'+ text +' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');			
							$('<li class="active appended itsAnotherParent"><a href="javascript:void(0)">'+ text +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
							
							hoverEditem = 0;
							hoverEditItemArray = [];
							reArrangedArray = [];
							$('.mainItemLists li ul').each(function(){
								$(this).removeAttr('data-id');
							});
							
							$('.appendPoint:last-child li.itsAparent').each(function(){
								if($(this).next().hasClass('itsAparent')){
									$(this).remove();
								}
								//alert();
							})
							// if($('.appendPoint li').hasClass('itsAparent').next().hasClass('itsAparent')){
							// 	alert
							// }


							//ranit test
							var btnVal = [];
							var btnText = $('.forDragAndDropIcon button').each(function () {
								btnVal.push($(this).text());
							});
							console.log("Btn Val : "+btnVal);
							var sorted_arr = btnVal.slice().sort();
							var results = [];
							for (var i = 0; i < btnVal.length - 1; i++) {
							    if (sorted_arr[i + 1] == sorted_arr[i]) {
							        results.push(sorted_arr[i]);
							    }
							}
							console.log("Result length : "+ results.length);
							var btnText = $('.forDragAndDropIcon button').each(function () {
								var xxxx = $(this).text();
								if(results[0] == xxxx){
									$(this).addClass('delete');
								}
							});
							var xxxxxx = $('.forDragAndDropIcon button.delete').length;
							for(i=1;i<xxxxxx;i++){
								$('.forDragAndDropIcon button.delete').eq(i).remove();
							}



							var btnVal2 = [];
							var btnText = needToAppendHere.find('li').each(function () {
								btnVal2.push($(this).text());
							});
							console.log("Btn val 2 : "+btnVal2);
							var sorted_arr = btnVal2.slice().sort();
							var results = [];
							for (var i = 0; i < btnVal2.length - 1; i++) {
							    if (sorted_arr[i + 1] == sorted_arr[i]) {
							        results.push(sorted_arr[i]);
							    }
							}
							console.log("btn val 2 length: "+results.length);
							var btnText = needToAppendHere.find('li').each(function () {
								var xxxx = $(this).text();
								if(results[0] == xxxx){
									$(this).addClass('delete');
								}
							});
							var xxxxxx = needToAppendHere.find('li.delete').length;
							for(i=1;i<xxxxxx;i++){
								needToAppendHere.find('li.delete').eq(i).remove();
							}
							//removeing the hidden span value
							$('#hid1').text('');

						}

					
			});
				
				


			//pushing on hover arrays

			$('.mainItemLists li a').mouseenter(function() {
				
				if($(this).next().hasClass('childs') == true){								
					hoverEditem = $(this).text();
					$(this).parent().parent().attr('data-id',hoverEditem);
					hoverEditItemArray.push(hoverEditem);
					arrayIndexCount = arrayIndexCount +1;
				}

			});

			//ranit 30-12

			$('#equip li ul a').mouseenter(function(){
				hoverEditItemArray = [];
				var texxx = $('#hid1').text();
				$(this).parent().parent().attr('data-id',texxx);
				console.log("New data id of ul: "+texxx);
					hoverEditItemArray.push(texxx);
					arrayIndexCount = arrayIndexCount +1;
			});

			$('#equip>ul>li').mouseleave(function(){
				hoverEditItemArray = [];
			});

			$('#equip li ul a').mouseleave(function(){				
				$(this).parent().parent().removeAttr('data-id');
			})




			$('.mainItemLists > li > a').mouseenter(function() {
				$(this).find('i').removeClass('fa-plus');
				$(this).find('i').addClass('fa-minus');			
			});

			$('.mainItemLists > li li').mouseenter(function(){
				$('.mainItemLists > li > a').find('i').removeClass('fa-plus');
				$('.mainItemLists > li > a').find('i').addClass('fa-minus');
			});

			$('.mainItemLists > li li').mouseleave(function(){
				$('.mainItemLists > li > a').find('i').addClass('fa-plus');
				$('.mainItemLists > li > a').find('i').removeClass('fa-minus');
			});			
					

			$('.mainItemLists > li > a').mouseleave(function(){
				$(this).find('i').addClass('fa-plus');
				$(this).find('i').removeClass('fa-minus');
			});



			//tooltip

			$('.minPanelWrapper li.items p').mouseenter(function() {			
				var tolText = $(this).text();
				$(this).parent().parent().parent().prepend('<div class="tltip">'+tolText +'</div>')
			});
			$('.minPanelWrapper li.items p').mouseleave(function() {		
				var tolText = '';
				$(this).parent().parent().parent().find('.tltip').remove();
			});

			//checking the buttion's length

			$(document).on('click',checkToResize);


			function checkToResize() {
				
				var totalBtn = $('.forDragAndDropIcon button').length;
				if(totalBtn >= 5){				
					$('.forDragAndDropIcon .curve').css({'width':'130px'});
				}else{
					$('.forDragAndDropIcon .curve').css({'width':'200px'});	
				}
			}

			$('.mainChild >li').mouseleave(function(){
				hoverEditItemArray = [];
				reArrangedArray = [];
			});	

			//rotate the pop images

			$('.flipArea li a img').bind('click',function(){
				$('.photosAndVideosArea img').toggleClass('rotated');		
			});


			//hide on click

			$('.mainItemLists li a').mouseenter(function(){
				if($('.mainItemLists ul').hasClass('forceHide')){
					$('.mainItemLists ul').removeClass('forceHide')
				}
			});


			$('.mainItemLists li a').on('click',function(){
				$('.mainItemLists ul').addClass('forceHide');
			});


			

});

// End