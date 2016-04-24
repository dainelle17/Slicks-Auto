var site_address = "http://www.thedaydreamerdesigns.com/slicks";
var image_loc = site_address+"/images/";
var images = ["slicks-main.jpg","couponslide.jpg","automotive-repair-little-elm-tx.jpg"]; //Create array of slider images
var image_index = 1; //Start at second index
var interval;

$(function(){
	interval = setInterval(function(){
		image_index++;
		changeImage();
	},10000);
})

$(".left-slider-button").on("click",function(e){
	e.preventDefault();
	setTimeout(1000,function(){
		image_index --;
	});
	changeImage();
	resetInterval();
});
$(".right-slider-button").on("click",function(e){
	e.preventDefault();
	setTimeout(1000,function(){
		image_index ++;
	});
	changeImage();
	resetInterval();
});

$(".white-button").click(function(e){
	e.preventDefault();
	$(this).closest("form").submit();//Submit form
});


function resetInterval(){
	clearInterval(interval);
	interval = setInterval(function(){
		changeImage();
	},6000);
}

function changeImage(){

	//Switch image
	if(image_index < 0){
		//Going backwards so set to last image
		image_index = images.length-1;
	}
	if(image_index > images.length-1){
		image_index = 0;
	}
	
	console.log("On image change:"+image_index);
	if(image_index == 1 ){
		//show button
		$(".coupon-button").animate({
			"opacity":"1"
		},300);
		$(".coupon-button").fadeIn();
	}else{
		//Hide button
		$(".coupon-button").fadeOut();
	}
	$(".main-image").fadeOut(1000,function(){
		$(this).attr("src",image_loc+images[image_index]);
		//Fade back in with new image
		$(this).fadeIn(1000,function(){

			image_index ++; //Set to next image for next loop
		});
	});
	
}