$(window).on('load', function() {
	
	setInterval(function(){

		$('#section-cover .container-text p').addClass('anim');
		setTimeout(function(){
			$('#section-cover .container-text p').removeClass('anim');
		}, 1000)		

	}, 2000)

})