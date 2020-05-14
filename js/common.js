jQuery(function(){
	jQuery(".spMenu > a").click(function(){
		jQuery(this).next(".dropMenu").slideToggle(100);
		return false;
	});

	jQuery('.dropMenu li:has(.subMenu) > a').click(function(){
		jQuery(this).next('.subMenu').toggle();
		return false;
	});

	jQuery(document).click(function(){
		jQuery('.dropMenu').slideUp(100);
	});

	jQuery('.dropMenu').click(function(e){
		e.stopPropagation();
	});


	jQuery('.slider').slick({
    autoplay:true,
    autoplaySpeed:3000,
    dots:true,
		arrows: false,
		speed: 1000,
		infinite: true,
	});
});
