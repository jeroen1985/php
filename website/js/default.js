jQuery(document).ready(function () {
      
/*   Mobile menu */    
$('#mobile-menu').on('click tap',function(){
	$('#mobile-list').toggle('slide',{direction: 'left'},700);
	$('#mobile-list').toggleClass(" hidden");
	$('#mobile-ul').toggle('slide',{direction: 'left'},700);
	$('#mobile-ul').toggleClass(" hidden");
});    
     
/* form validation */

$('#contact_name,#contact_cname,#contact_message').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
});

$('#contact_email').on('input', function() {
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/;
    var is_email=re.test(input.val());
    if(is_email){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
});

$('#contact_number').on('input', function() {
    var input=$(this);
    var re = /^([0-9\-\+\(\) ]+)$/;
    var is_cnumber=re.test(input.val());
    if(is_cnumber){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
});

$('#contact_cname,#contact_number').on('input', function() {
    var input=$(this);
    var is_name=input.val();
    if(is_name==''){input.removeClass("invalid");}
});


$('#contact_submit button').click(function(event){
    var form_data=$('#contactForm').serializeArray();
    var error_free=true;
    for (var input in form_data){
        var element=$("#contact_"+form_data[input]['name']);
        var valid=element.hasClass("valid");
        if (form_data[input]['name'] == 'cname') valid=true;
        var error_element=$("span", element.parent());
        if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
        else{error_element.removeClass("error_show").addClass("error");}
    }
    if (!error_free){
        event.preventDefault();
    }
});

// slider //

var mobile= $('#mobile-menu').css('display');

var _SlideshowTransitions = [
//Fade
{ $Duration: 1200, $Opacity: 2 }
];

if (mobile =='block'){

	var options = {
		$AutoPlay: true,
		$AutoPlaySteps: 1,
		$AutoPlayInterval: 3000,
		$PauseOnHover: 1,

		$ArrowKeyNavigation: true,
		$SlideDuration: 500,
		$MinDragOffsetToSlide: 20,
		$SlideWidth: 314,
		$SlideHeight: 124,
		$SlideSpacing: 0,
		$DisplayPieces: 1,
		$ParkingPosition: 0,
		$UISearchMode: 1,
		$PlayOrientation: 1,
		$DragOrientation: 3,

		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: _SlideshowTransitions,
			$TransitionsOrder: 1,
			$ShowLink: true
		},

		$BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$,
			$ChanceToShow: 2,
			$AutoCenter: 1,
			$Steps: 1,
			$Lanes: 1,
			$SpacingX: 10,
			$SpacingY: 10,
			$Orientation: 1
		},

		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$,
			$ChanceToShow: 2,
			$Steps: 1
		}
	};


}else{

	var options = {
		$AutoPlay: true,
		$AutoPlaySteps: 1,
		$AutoPlayInterval: 3000,
		$PauseOnHover: 1,

		$ArrowKeyNavigation: true,
		$SlideDuration: 500,
		$MinDragOffsetToSlide: 20,
		$SlideWidth: 680,
		$SlideHeight: 268,
		$SlideSpacing: 0,
		$DisplayPieces: 1,
		$ParkingPosition: 0,
		$UISearchMode: 1,
		$PlayOrientation: 1,
		$DragOrientation: 3,

		$SlideshowOptions: {
			$Class: $JssorSlideshowRunner$,
			$Transitions: _SlideshowTransitions,
			$TransitionsOrder: 1,
			$ShowLink: true
		},

		$BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$,
			$ChanceToShow: 2,
			$AutoCenter: 1,
			$Steps: 1,
			$Lanes: 1,
			$SpacingX: 10,
			$SpacingY: 10,
			$Orientation: 1
		},

		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$,
			$ChanceToShow: 2,
			$Steps: 1
		}
	};

}

var jssor_slider1 = new $JssorSlider$("slider1_container", options);

function ScaleSlider() {
	var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
	if (parentWidth)
		jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 680));
	else
		window.setTimeout(ScaleSlider, 30);
}

if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
	$(window).bind('resize', ScaleSlider);
   
}

if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
	$(window).bind("orientationchange", ScaleSlider);
}

});