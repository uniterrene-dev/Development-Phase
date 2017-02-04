
$(document).ready(function () {


alert('xxxxxxxxxxxxx');
	$('li a').each(function(){
var aname = $(this).text();

$(this).parent('li').attr({'data-id': aname});
});

			$('[data-toggle="tooltip"]').tooltip(); 
			var imageLink;
			var allDetails;
			var hoverEditem = 0;
			var hoverEditItemArray = [];
			var mainItemHovered = 0;
			var needToAppendHere = '';
			$('.mainItemLists > li > a').mouseenter(function() {			
				mainItemHovered = $(this).text();			
			});
		$('.closePop').bind('click',function(){
			$(this).parent().parent().fadeOut();
		});
		$('.mainItemLists li a').bind('click', mainListItemClicked);
		$('.mainChild li a').bind('click',openInnerChild);	

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

		$('.minPanelWrapper li .items .imageArea >img').mouseup(function(){
			//do nothing
			console.log(allDetails.stepImage);
		});


		$('.minPanelWrapper li .items .imageArea >img').draggable({				
				containment: 'document',
				revert: true,
				 zIndex: 900,				
				start: function(event){					
					var content = imageLink;					 	
				}
			});		

		$('.mainDorpHolder li').droppable({
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


		var l = $('.minPanelWrapper > ul > li').length
		for(i=0; i< l; i++){
			var customId = 'dragItem'+i;
			$('.minPanelWrapper > ul > li').eq(i).attr('id', customId);
		}
		$('.mainChild  li a').bind('click',function(){

   var path = [];
    var el = $(this);

    do {
        path.unshift(el.parent().attr('data-id'));

        el = el.parent();
         //console.log(el.attr("id"));
    } while(el.length != 0);


    alert(path.join('/'));
   //e.stopPropagation();



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
			}else{

				var mylist = $(this).parent().parent().parent();
				var text = $(this).text();
				$(this).parent().siblings().removeClass('childHide');
				$(this).parent().parent().addClass('childHide');
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
						 $(this).remove();
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
						$(this).remove();						
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
					if(hoverEditItemArray.length > 0){
						for(i=0;i<hoverEditItemArray.length;i++){
							$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditItemArray[i] +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
						}
					}

					//$('<li class="active appended itsAparent"><a href="javascript:void(0)">'+ hoverEditem +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
					$('<button class="btn btn-warning btn-pointOut itsAparent">'+ hoverEditem +' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');
				}
				$('<button class="btn btn-warning btn-pointOut">'+ text +' <i class="fa fa-times"></i></button>').appendTo('.pointOut_Area .forDragAndDropIcon');			
				$('<li class="active appended itsAnotherParent"><a href="javascript:void(0)">'+ text +' <i class="fa fa-times"></i></a></li>').appendTo(needToAppendHere);
				
				hoverEditem = 0;
				hoverEditItemArray = [];
				//console.log($(this).parents());


				
			}


			
		});


		

		$('.mainItemLists li a').mouseenter(function() {
			
			if($(this).next().hasClass('childs') == true){								
				hoverEditem = $(this).text();
				hoverEditItemArray.push(hoverEditem);				
				console.log("currently hovering on : "+hoverEditem);
				console.log("Array Output : "+hoverEditItemArray);
			}
		});



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
	});	

	$('.childs > li').mouseleave(function(){
		//hoverEditItemArray = [];
		
		hoverEditItemArray[2]
	})


//rotate the pop images
$('.flipArea li a img').bind('click',function(){
	$('.photosAndVideosArea img').toggleClass('rotated');		
})





});