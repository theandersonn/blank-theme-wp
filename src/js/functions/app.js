(function ( $ ) {
	// example ajax
	var example_ajax = function(){
		$.ajax({
			url: 'wp-admin/admin-ajax.php',
			type: 'GET',
			data: {
				action: 'example_ajax'
			},
			beforeSend: function(){
				console.log('loading example_ajax');	
			}
		})
		.done(function(response){
			console.log(response);
		})
		.fail(function(){
			console.log('Error');
		});
	}

	example_ajax();

}( jQuery ));
