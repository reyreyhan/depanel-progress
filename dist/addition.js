function ScrollDown(){
	var ScrollPos = 100,
		ScrollNow = $(this).scrollTop();
			
	if (ScrollPos < ScrollNow){
		$("#navbar").css({
			"position": "fixed",
			"top": "30px",
			"width": "100%",
			"z-index": "15"
		});
	} else {
		$("#navbar").css({
			"top": "0",
			"position": "relative"
		});
	}

	console.log(ScrollNow);
}

$(document).ready(function(){
	$(window).on("load", function(){
		ScrollDown();
	});

	$(window).on("scroll", function(){
		ScrollDown();
	});
});