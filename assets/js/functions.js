var funcoes = {
	init: function(){
		this.sliderHome();
	},

    sliderHome: function(){
        // SLIDER > OWL CAROUSEL
		jQuery('.owl-carousel').owlCarousel({
			items:1,
		    loop:true,
			autoPlay:true
		    }
		})
    }
}

jQuery(function(){
	funcoes.init();
});
