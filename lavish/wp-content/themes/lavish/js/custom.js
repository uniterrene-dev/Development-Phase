//casting from js 
jQuery('.casting-tab-name').click(function(e) {	
	jQuery('.casting-tab-details').hide();
    var ids = jQuery(this).attr('data-href');
	jQuery(ids).show();
});

jQuery('.casting-tab').click(function(e) {	
	jQuery('.active').hide();
    var ids = jQuery(this).attr('href');
	$(".art-hmenu .active").removeClass("active"); 
    $(this).addClass("active"); 
});

//casting from js end //

//var vid = document.getElementById("bgvid");

//fullscrreen video//

//function vidFade() {
//  vid.classList.add("stopfade");
//}
//
//vid.addEventListener('ended', function()
//{
//
//vid.pause();
//
//vidFade();
//}); 


//pauseButton.addEventListener("click", function() {
  //vid.classList.toggle("stopfade");
  //if (vid.paused) {
    //vid.play();
    //pauseButton.innerHTML = "Pause";
  //} else {
    //vid.pause();
    //pauseButton.innerHTML = "Paused";
  //}
//})