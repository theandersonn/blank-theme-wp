var funcoes = {
	init: function(){
		this.sliderHome();
	},

    sliderHome: function(){
        // SLIDER > OWL CAROUSEL
		jQuery('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:false,
			autoPlay:true,
		    responsive:{
		        0:{
		            items:1
		        }
		    }
		})
    }
}

jQuery(function(){
	funcoes.init();
});
