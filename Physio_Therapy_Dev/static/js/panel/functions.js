function mainListItemClicked() {
	$(this).parent().find('i').toggleClass('fa-plus');
	$(this).parent().find('i').toggleClass('fa-minus');
	//$(this).parent().siblings().find('.mainChild').slideUp(500);
	$(this).parent().siblings().find('i').removeClass('fa-minus').addClass('fa-plus');
	$(this).parent().find('.mainChild').slideToggle(500);
}

function openInnerChild(){
	$(this).parent().css({'position':'relative'});
	$(this).parent().toggleClass('open');
	$(this).parent().siblings().toggleClass('childHide');
	$(this).parent().toggleClass('active');
	$(this).next().toggleClass('childHide')
}

function clickedOnDragableItems(idds){
	var indexId = $(idds).parent().parent().parent().attr('id');	
	var htmls = $('.minPanelWrapper > ul > li#'+indexId).find('.imageArea img').attr('src');	
	//alert(htmls);
	return htmls;
}
function fullData(idds){
	var indexId = $(idds).parent().parent().parent().attr('id');
	var stepName = $('.minPanelWrapper > ul > li#'+indexId).find('.ExName').find('h4').text();
	var stepimage = $('.minPanelWrapper > ul > li#'+indexId).find('.imageArea img').attr('src');	
	var stepDescription = $('.minPanelWrapper > ul > li#'+indexId).find('.itemDescription').find('p').text();	
	stepDescription = $.trim(stepDescription);
	var fullDetails = {"stepName" : stepName,"stepImage" : stepimage, "stepDescription" : stepDescription};
	return fullDetails;	
}
function onDropProcessing(aD , thisIs, ip1, ip2, ip3, ip4, ip5){	
	$('.thumbnailArea.thumbsForImage ul li').remove(); // makeing empty
	$('.textEdit #editName').val(''); // makeing empty
	$('.textEdit #inst').val(''); // makeing empty	
	$('.slideSection').fadeToggle('slow');
	var x = aD;
	console.log(x)
	dataFromLi = thisIs;
	console.log("dataFromLi : "+dataFromLi);
	var currentItemName = $('.row.minPanelWrapper li#'+dataFromLi).find('.ExName h4').text();
	$('.popDes h2').text(currentItemName);
	$('.popupEditAble .ItemInfoEditable').find('input').eq(0).val(ip1);
	$('.popupEditAble .ItemInfoEditable').find('input').eq(1).val(ip2);
	$('.popupEditAble .ItemInfoEditable').find('input').eq(2).val(ip3);
	$('.popupEditAble .ItemInfoEditable').find('input').eq(3).val(ip4);
	$('.popupEditAble .ItemInfoEditable').find('input').eq(4).val(ip5);

	$('.editNameOption ul li:first-child input').val(currentItemName);
	$('.editNameOption ul li:first-child label span').text(currentItemName);
	var totalLi = $('.row.minPanelWrapper li#'+dataFromLi).find('.itemDescription .videoPlaceholder li').length;
	//alert(holeHtml);
	for(i=0;i<totalLi-5;i++){		
		var currentSrc = $('.row.minPanelWrapper li#'+dataFromLi).find('.itemDescription .videoPlaceholder li').eq(i+1).find('img').attr('src');
		var currentSrc_with_ = currentSrc.replace('.jpg','-80X80.jpg');
		var currentdataName	 = $('.row.minPanelWrapper li#'+dataFromLi).find('.itemDescription .videoPlaceholder li').eq(i+1).find('.SlideInfo span').text();	
		var currentdata	 = $('.row.minPanelWrapper li#'+dataFromLi).find('.itemDescription .videoPlaceholder li').eq(i+1).find('.SlideInfo').text();
		var newCurrentData = currentdata.replace(currentdataName, '');
		$('<li><a href="javascript:void(0)" data-name="' + currentItemName + '" data-id="' + currentdataName + '" data-step="' + newCurrentData + '"><img src="'+ currentSrc_with_ +'" title="Thumbnail"></a></li>').appendTo('.thumbnailArea.thumbsForImage ul')		
		$('.thumbnailArea li:nth-child(1)').addClass('activeThumb');
	}

		var dataValue1 =  $.trim($('.thumbnailArea li.activeThumb a').attr('data-id'));
		dataValue1 = dataValue1.replace(':', '');
         //$('.textEdit #editName').val(dataValue1);

	     var dataValue2 =  $.trim($('.thumbnailArea li.activeThumb a').attr('data-step'));
	     $('.textEdit #inst').val(dataValue2);
	   

}
//$(document).on('click',changeWidth);


//for custom append li indention
function changeWidth(){
	//alert("dsf");
	var initial_width = 100;
	var tL = $('.appendPoint li').length;

	if(tL > 0){		
		for(i=0;i<=tL;i++){
			var pos = i+1;
			var needTo = pos*10;
			var newWidth = initial_width - needTo;
			$('.appendPoint li').eq(i).css({'width': newWidth+'%'});
		}
	}
}

