var funcoes = {
	init: function(){
		this.sliderHome();
	},

	sliderHome: function(){
        // SLIDER > OWL CAROUSEL
		jQuery('.owl-carousel').owlCarousel({
			items:1,
		    loop:true,
		    margin:10,
			autoplay:true,
		})
    }
}

jQuery(function(){
	funcoes.init();
});
