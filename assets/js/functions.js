var funcoes = {
	init: function(){
		this.sliderHome();
		this.responsiveYouTube();
	},

	sliderHome: function(){
        // SLIDER > OWL CAROUSEL
		jQuery('.owl-carousel').owlCarousel({
			items:1,
		    loop:true,
		    margin:10,
			autoplay:true,
		})
    },

	responsiveYouTube: function(){
		var all_oembed_videos = jQuery("iframe[src*='youtube'], iframe[src*='vimeo']");
		all_oembed_videos.each(function() {
			jQuery(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
		});
	}	
}

jQuery(function(){
	funcoes.init();
});
