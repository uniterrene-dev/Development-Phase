//casting from js 
jQuery('.casting-tab-name').click(function(e) {	
	jQuery('.casting-tab-details').hide();
    var ids = jQuery(this).attr('data-href');
	jQuery(ids).show();
});

 
//casting from js end //

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


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