var funcoes = {
	init: function(){
		this.sliderHome();
		this.responsiveYouTube();
		this.removeAtributosImg();
	},

	sliderHome: function(){
		jQuery('.owl-carousel').owlCarousel({
			items: 1,
	        autoplaySpeed: 1000,
	        autoplayTimeout: 7000,
	        autoplay: true,
	        nav: false,
	        loop: true  
		})
    },


	responsiveYouTube: function(){
		var all_oembed_videos = jQuery("iframe[src*='youtube'], iframe[src*='vimeo']");
		all_oembed_videos.each(function(){
			jQuery(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
		});
	},

	removeAtributosImg: function(){
		jQuery('img').each(function(){
			jQuery(this).removeAttr('width')
			jQuery(this).removeAttr('height');
		});
	},
}

jQuery(function(){
	funcoes.init();
});
