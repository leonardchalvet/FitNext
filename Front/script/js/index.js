$(window).on('load', function() {

	let iframe = document.querySelector('#section-cover .container-illu .video');
    let player = new Vimeo.Player(iframe);
	player.play();
	$('#section-cover .container-text p').addClass('bottom');
	setTimeout(function(){
		$('#section-cover .container-text p').addClass('active');
	}, 1800)

	//apparation direct, puis loop au moment T
	let bool = false;
	setInterval(function(){
		player.getCurrentTime().then(function(seconds) {
			if(seconds >= 6.75) {
				if(!bool) {
					$('#section-cover .container-text p').removeClass('active').addClass('bottom');
					setTimeout(function(){
						$('#section-cover .container-text p').removeClass('bottom').addClass('none');
					}, 500)
					setTimeout(function(){
						$('#section-cover .container-text p').removeClass('none bottom');
					}, 750)
					setTimeout(function(){
						$('#section-cover .container-text p').addClass('active');
					}, 1000)
					bool = true;
				}
			}
			else if(seconds < 1) {
				bool = false;
				$('#section-cover .container-text p').addClass('anim');
			}
		})
	}, 50)

	let tabActive = [ 1 , 2 , 3 ];
	for(let i = 0 ; i < tabActive.length ; i++) {
		$('#section-cover .container-text .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
	}
	setInterval(function(){


		let logoI = Math.floor((Math.random() * ($('#section-cover .container-text .container-logo .logo').length) + 1));
			
		let r = 1;
		let index = -1;
		do {
			r = Math.floor((Math.random() * ($('#section-cover .container-text .container-logo .logo:nth-child(1) img').length) + 1));
			index = jQuery.inArray(r, tabActive);
		} while(index != -1);

		tabActive[(logoI-1)] = r;

		$('#section-cover .container-text .container-logo .logo img').removeClass('active');
		for(let i = 0 ; i < tabActive.length ; i++) {
			$('#section-cover .container-text .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
		}

	}, 3000)

})