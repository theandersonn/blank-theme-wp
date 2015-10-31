var funcoes = {
	init: function(){
		this.imprimirPost();
		this.sliderHome();
		this.responsiveYouTube();
		this.removeAtributosImg();
	},

	sliderHome: function(){
		jQuery('.owl-carousel').owlCarousel({
			items:1,
		    loop:true,
		    margin:10,
			autoplay:true,
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
