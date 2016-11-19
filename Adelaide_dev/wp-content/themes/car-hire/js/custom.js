$(document).ready(function(){
	
	$('.date  .timing.minical_input').focusout(function() {


		var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();

		var output = ((''+day).length<2 ? '' : '') + day + '/' + ((''+month).length<2 ? '0' : '') + month+  '/' + d.getFullYear() ;
		

		var vlueFrmIp = $(this).val();
		

		var arr = []; 				//live time
		var arr = output.split('/');
		var arr2 = [];				 //user ip time
		var arr2 = vlueFrmIp.split('/');

			//Converting all the values to int

			var todayDate =  parseInt(arr[0]);
			var todayMnth =  parseInt(arr[1]);
			var todayYear =  parseInt(arr[2]);

			var userDate =  parseInt(arr2[0]);
			var userMnth =  parseInt(arr2[1]);
			var userYear =  parseInt(arr2[2]);


			if(todayYear <= userYear){
				//alert(arr[2]+ '==' +arr2[2]);
				$('.date  .timing.minical_input').css({'border':'1px solid gainsboro'});
				//alert(arr2[1]+ '==' +arr[1]);
				if( todayMnth <= userMnth){
					$('.date  .timing.minical_input').css({'border':'1px solid gainsboro'});
						if(todayMnth == userMnth){
							if(todayDate <= userDate){
								//alert('date Available');
								$('.date  .timing.minical_input').css({'border':'1px solid gainsboro'});
							}else {
								//alert('date Not Available');
								$('.date  .timing.minical_input').focus();
								$('.date  .timing.minical_input').val('Date is not Available');
								$('.date  .timing.minical_input').css({'border':'2px solid red'});
							}
						}else if(todayMnth < userMnth){
							if(todayDate > userDate || todayDate < userDate){
								//alert('both Date Available');
								$('.date  .timing.minical_input').css({'border':'1px solid gainsboro'});
							}
						}
					
				}else if(todayMnth > userMnth){
					$('.date  .timing.minical_input').focus();
					$('.date  .timing.minical_input').val('Date is not Available');
				   $('.date  .timing.minical_input').css({'border':'2px solid red'});
				}

			}else{
				$('.date  .timing.minical_input').val('date is not Available');
				 $('.date  .timing.minical_input').css({'border':'2px solid red'});
			}




			$('#timepicker').focusin(function () {
				var valOfDate = $('.date  .timing.minical_input').val();
				if(valOfDate == 'Date is not Available'){
					$('.date  .timing.minical_input').focus();
				}else{
					//donothing
				}
			});


		$('#minical_calendar_0 table td').bind('click',function(){
			$('.date  .timing.minical_input').focus();
		});
		$('#minical_calendar_0 .minical_prev').bind('click',function(){
			$('.date  .timing.minical_input').focus();
		});
		$('#minical_calendar_0 .minical_next').bind('click',function(){
			$('.date  .timing.minical_input').focus();
		});

	});


//popup
$('.submit-button').bind('click',showPopUp);
$('button.no').bind('click',closePopUp)
	console.log($('#header').height());
	$('.responsiveMenu').bind('click',function(){
		$('.menuForResponsive').stop().slideToggle();
	});
	$(window).scroll(function(){
		if($(this).width() > 769){
		var scrollPos = $(this).scrollTop();
		var logo = 100,
			logoWidth = logo - scrollPos/15;
		var menuPad = 30,
			menuWidth = menuPad - scrollPos/10;		
		$('.logo').find('img').css({'width':logoWidth+'%'});
		$('div.menu ul').css({'padding': menuWidth+'px 10px','margin-top':'10px'});
		$('.chat-icon').css({'padding': menuWidth+'px 0px','margin-top':'10px'});
		//$('#header').addClass('headerBorder');
		console.log($('#header').height());
		if($('#header').height() == 65){
			$('#header').addClass('headerBorder');
		}else{
			$('#header').removeClass('headerBorder');
		}
		var headerHeight = $('#header').height();
	$('.menuForResponsive').css({'top':headerHeight+'px'});
	}
	});
	var headerHeight = $('#header').height();
	$('.menuForResponsive').css({'top':headerHeight+'px'});
	
	
/* --------------------- banner slider ----------------------- */

//var slide = $("div.slider").children("ul");
//$('div').data('slide', slide);
//var images = $("div.slider").find("div.image");
////var currentPosition = 1;
//$('div').data('currentPosition', 1);
//var WidthOfImages = images.width();
//$('div').data('WidthOfImages', WidthOfImages);
//var totalImages = images.length;
//$('div').data('totalImages', totalImages);
//var totalWidth = totalImages * WidthOfImages;
//$('div').data('totalWidth', totalWidth);
//
//
//$("div.button").on("click", function() {
//	 var direction = $(this).data("dir");
//	sliderdivcontecnt(direction);
//	
//	});
//});
//setInterval(function () {
//        sliderdivcontecnt('next');
//    },18000);
//	
//function sliderdivcontecnt(direction){
//	var currentPosition = $('div').data('currentPosition');
//	var totalImages = $('div').data('totalImages');
//	var slide =  $('div').data('slide');
//	var WidthOfImages = $('div').data('WidthOfImages');
//	var totalWidth = $('div').data('totalWidth');
//	 
//if (direction == "next") {
//   currentPosition = currentPosition + 1;
//    if (currentPosition <= totalImages) {
//     slide.animate({
//      "margin-left": "-=" + WidthOfImages
//    });
//   } else {
//     currentPosition = 1;
//     slide.animate({
//     "margin-left": "0"
//    });
//   }
// } else if (direction == "prev") {
//    currentPosition = currentPosition - 1;
//	if (currentPosition > 0) {
//    slide.animate({
//       "margin-left": "+=" + WidthOfImages
//     });
//   } else if (currentPosition == 0) {
//     currentPosition = totalImages;
//     slide.animate({
//       "margin-left": "-" + (totalWidth - WidthOfImages)
//      });
//   }
//  }
//$('div').data('currentPosition', currentPosition);
//
//	}
/* ranit 20-10-16*/
// var arrayOfInputs = [];
// $('.full-form input').focusout(function() {		
// 		var id = $(this).attr('id');
// 		var val = $(this).val();

// 		arrayOfInputs.push({
// 			'id' : id,
// 			'Val' : val
// 		});
// 		for(i=0;i<=arrayOfInputs.length;i++){
// 			console.log(arrayOfInputs[i]);
// 		}
		
// 		//alert('value :'+ val +'and id is : '+id);
// 	});

	//$('.full-form input:not(#timepicker)').focusin(checkValidation);
	$('.full-form input:not(#txtEmail):not(#timepicker)').focusin(checkValidation);

	$('.date  .timing.minical_input').focusin(checkDate);
	
	$('#txtPhone').focusin(checkPhone);


	$('#phn').focusin(checkcusPhone);

$('#txtEmail').focusin(checkEmail);

$('#email').focusin(checkcusEmail);



function checkEmail()
	{

		$(this).focusout(function(){
			var val = $(this).val();
			

			
			 
var email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if(val.match(email))  
        {  
  
   $('#emailerror').text("");
   return true;  
        }  
      else  
        {  

$('#emailerror').text("error");

       return false;  
        } 



			
		})

	}

function checkcusEmail()
	{

		$(this).focusout(function(){
			var val = $(this).val();
			

			
			 
var email = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if(val.match(email))  
        {  
  
   $('#emailerror2').text("");
   return true;  
        }  
      else  
        {  

$('#emailerror2').text("error");

       return false;  
        } 



			
		})

	}






function checkcusPhone()
	{

		$(this).focusout(function(){
			var val = $(this).val();
			

			
			 //var phoneno = /^\d{10}$/;  
var phoneno = /^0[0-9].*$/;
  if(val.match(phoneno))  
        {  
   
   
$('#phnerror2').text("");
//alert($('#phnerror').text());

   return true;  
        }  
      else  
        {  
        alert("Phone no should start with 0");  

	$('#phnerror2').text("error");
	//alert($('#phnerror').text());
        return false;  
        } 



			
		})

	}



function checkPhone()
	{

		$(this).focusout(function(){
			var val = $(this).val();
			

			
			 var phoneno = /^0[0-9].*$/; 
  if(val.match(phoneno))  
        {  
   
   
$('#phnerror').text("");
//alert($('#phnerror').text());

   return true;  
        }  
      else  
        {  
         alert("Phone no should start with 0");  

	$('#phnerror').text("error");
	
        return false;  
        } 



			
		})

	}



	function checkDate(){
		$(this).focusout(function(){
			var val = $(this).val();
			//alert("val "+val);
			if(val == "Date is not Available"){
				//alert("Date is not Available");
				$(this).css({'border':'2px solid red'});
				$(this).focus();
			}else{
				$(this).css({'border':'1px solid gainsboro'});
				$(this).next().focus();
				$(this).focusOut();
			}
		})
	}

	function checkValidation(){
		$(this).focusout(function(){
			var id = $(this).attr('id');
			var val = $(this).val();
			if(val == ''){
				$(this).focus();
				$(this).css({'border':'2px solid red'});
				//alert("Please Enter Something !!");
			}else{
				$(this).css({'border':'1px solid gainsboro'});
				$(this).next().focus();
			}
			//alert(id);
			//var aa = $('div').data("isOpened");
			//console.log('0 or 1'+aa);
		})
	}
//ranit 14-11-16

$('#txtEmail').focusout(function() {
	var emailVal = $(this).val();
	if (emailVal.indexOf('@') > -1)
	{
  			//alert("Email Correct");
  			$('#txtEmail').next().focus();
  			$('#txtEmail').css({'border':'1px solid gainsboro'});
	}else{
		$('#txtEmail').focus();
		$('#txtEmail').css({'border':'2px solid red'});
		//alert("Email not Correct");
	}

});

$('#email').focusout(function() {
	var emailVal = $(this).val();
	if (emailVal.indexOf('@') > -1)
	{
  			//alert("Email Correct");
  			$('#email').next().focus();
  			$('#email').css({'border':'1px solid gainsboro'});
	}else{
		$('#email').focus();
		$('#email').css({'border':'2px solid red'});
		//alert("Email not Correct");
	}

});

//ranit end 14-11-16 


function showPopUp(){



	//alert("sdfsdf");
	//e.preventDefault();
	var firstName = $('.left-form #firstname').val();
	var email = $('.left-form #email').val();
	var date = $('.right-form #datepicker').val();
	var drop_off = $( "#drop_off option:selected" ).val();
	var pickup = $( "#pickup option:selected" ).val();
	var phn = $('.left-form #phn').val();
	var postCode1 = $('#post_code').val();
	var postCode2 = $('#post_code2').val();
	var timeP = $('.date  .timing.minical_input').val();
	var psterror = $('#psterror').text();
	var pstFiltered = parseInt(psterror);
	var one = 1;
	//alert(pstFiltered+'  ==  '+one);
	var phnerror = $('#phnerror').text();
	var phnerror2 = $('#phnerror2').text();
	var emailerror2 = $('#emailerror2').text();
	var emailerror = $('#emailerror').text();
	
	
	
	if(phnerror2!= 'error' && phnerror!= 'error' &&firstName != '' && email != '' && date != '' && drop_off != 'Text' && pickup != 'Text' && timeP != 'Date is not Available' && pstFiltered == one && emailerror2 !='error' && emailerror !='error' ){
		$('.popUpHold').fadeIn();
	}
	
	
}
function closePopUp(){
	$('.popUpHold').fadeOut();
	$('#geocomplete').val(' ');
	$('#geocomplete1').val(' ');
}
});

$(function() {
	$('.timepicker').click(function(e) {
		$(this).next().hide();
	   $(this).hide();
	});
	$(".time-btn").click(function(){
    $(".timepicker_wrap").fadeOut();
});
});
