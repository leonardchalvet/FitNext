$(window).on('load', function() {


	/*********************/
	/*     COVER LOGO    */
	/*********************/
		if($('#section-cover-1').length) {
			function cover1Illu() {
				$('#section-cover-1 .container-illu .illu-1 .first-line').addClass('active');
				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-1 .first-rect').addClass('active');
				}, 750)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-1 .second-line').addClass('active');
				}, 1250)
				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-1 .second-rect').addClass('active');
				}, 2250)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-1').removeClass('active');
				}, 5500)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2').addClass('active');

					$('#section-cover-1 .container-illu .illu-1 .first-line').removeClass('active');
					$('#section-cover-1 .container-illu .illu-1 .first-rect').removeClass('active');
					$('#section-cover-1 .container-illu .illu-1 .second-line').removeClass('active');
					$('#section-cover-1 .container-illu .illu-1 .second-rect').removeClass('active');
				}, 5750)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2 .first-line').addClass('active');
				}, 6000)
				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2 .first-rect').addClass('active');
				}, 6750)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2 .second-line').addClass('active');
				}, 7250)
				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2 .second-rect').addClass('active');
				}, 8250)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-2').removeClass('active');
				}, 11500)

				setTimeout(function(){
					$('#section-cover-1 .container-illu .illu-1').addClass('active');

					$('#section-cover-1 .container-illu .illu-2 .first-line').removeClass('active');
					$('#section-cover-1 .container-illu .illu-2 .first-rect').removeClass('active');
					$('#section-cover-1 .container-illu .illu-2 .second-line').removeClass('active');
					$('#section-cover-1 .container-illu .illu-2 .second-rect').removeClass('active');
				}, 11750)

			}
			setTimeout(function(){
				cover1Illu();

				setInterval(function(){
					cover1Illu();
				}, 12000);
			}, 2500)
		}


	/***********************/
	/*     SECTON LOGOS    */
	/***********************/
		if($('#section-logos').length) {
			let tabActive = [ 1 , 2 , 3 , 4 , 5 ];
			for(let i = 0 ; i < tabActive.length ; i++) {
				$('#section-logos .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
			}
			setInterval(function(){
				
				let logoI = Math.floor((Math.random() * ($('#section-logos .container-logo .logo').length) + 1));
				
				let r = 1;
				let index = -1;
				
				do {
					r = Math.floor((Math.random() * ($('#section-logos .container-logo .logo:nth-child(1) img').length) + 1));
					index = jQuery.inArray(r, tabActive);
				} while(index != -1);
				
				tabActive[(logoI-1)] = r;

				$('#section-logos .container-logo .logo img').removeClass('active');
				for(let i = 0 ; i < tabActive.length ; i++) {
					$('#section-logos .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
				}

			}, 3000)
		}

	/********************/
	/*       QUOTE      */
	/********************/
	
		
	

		function sectionQuotes2Caroussel(OptDelay, Delay, Section, Text, Quote, Btn){
		
			Text = Section + ' ' + Text;
			Quote = Section + ' ' + Quote;
			Btn = Section + ' ' + Btn;
			
			var valDelay = 0;
			var numberEl = $(Text).length;
			var countEl = 1;
			
			var drtc;

			let interval;

			function prg(drtc){

				$(Btn).addClass('disable');

				$(Btn + ' .stroke-full').removeClass('active').outerWidth();
				$(Btn + ' .stroke-full').addClass('active');

				if (drtc === 'next') {
					countEl++;
				} else if (drtc === 'prev') {
					countEl--;
				};

				if (countEl <= numberEl && countEl >= 1) {

					$(Text).removeClass('active hide').addClass('hide');
					$(Quote).removeClass('active').addClass('hide');
					setTimeout(function(){ 
						$(Text).removeClass('displayBlock').addClass('displayNone');
						$(Quote).removeClass('displayBlock hide');
						setTimeout(function(){ 
							$(Text + ':nth-child('+countEl+')').addClass('displayBlock').removeClass('displayNone');
						}, 250);
						setTimeout(function(){ 
							$(Text + ':nth-child('+countEl+')').addClass('active').removeClass('hide');
						}, 300);

						$(Quote + ':nth-child('+countEl+')').addClass('displayBlock').addClass('displayBlock').find('q:not(.wrapActive)').each(function (index) {
							$(this).splitLines({tag:'<span><span>'});
							$(this).addClass('wrapActive');
						}).outerWidth();
						setTimeout(function(){ 
							$(Quote + ':nth-child('+countEl+')').addClass('active');
						}, 50);
						
					}, 500);

					setTimeout(function(){ 
						$(Btn).removeClass('disable');
					}, 1000);

					if (OptDelay === "on") {
						clearInterval(interval);
						interval = setInterval(function() {
					      	prg('next');
					    }, valDelay);
					};
				    

				} else if (countEl < 1) {
					countEl = numberEl;
					prg();
				} else {
					countEl = 1;
					prg();
				};
				
			};

			function init(){	

				$(Btn + ' .stroke-full').removeClass('active').outerWidth();
				$(Btn + ' .stroke-full').addClass('active');

				$(Text).removeClass('active');
				$(Text + ':nth-child('+countEl+')').addClass('displayBlock').removeClass('displayNone');
				$(Text + ':not(:nth-child('+countEl+'))').removeClass('displayBlock').addClass('displayNone');
				setTimeout(function(){ 
					$(Text + ':nth-child('+countEl+')').addClass('active');
				}, 250);

				$(Quote + ':nth-child('+countEl+')').addClass('displayBlock').addClass('displayBlock').find('.wrapLine:not(.wrapActive)').each(function (index) {
					$(this).splitLines({tag:'<span><span>'});
					$(this).addClass('wrapActive');
				}).outerWidth();
				setTimeout(function(){ 
					$(Quote + ':nth-child('+countEl+')').addClass('active');
				}, 50);
			};

			init();

			$(Btn).click(function(){
				if (!$(Btn).hasClass('disable')) {
					let iframe = document.querySelector('#common-section-quote-2 .container-carousel .container-videos .el-video.active iframe');
				    let player = new Vimeo.Player(iframe);
					player.pause();
					$('#common-section-quote-2 .container-carousel .container-videos .container-play').removeClass('displayNone');
					setTimeout(function(){ 
						$('#common-section-quote-2 .container-carousel .container-videos .container-play').removeClass('hide');
					}, 50);
					if ($(this).hasClass('prev')) {
						prg('prev');
					} else if ($(this).hasClass('next')) {
						prg('next');
					}
				};
			})

			if (OptDelay === "on") {
				clearInterval(interval);
				interval = setInterval(function() {
			      	prg('next');
			    }, valDelay);
			};

		    valDelay = Delay;

		};


		$('#common-section-quote-2 .container-carousel .container-videos .container-play .play').click(function(){
			$('#common-section-quote-2 .container-carousel .container-videos .container-play').addClass('hide');
			setTimeout(function(){ 
				$('#common-section-quote-2 .container-carousel .container-videos .container-play').addClass('displayNone');
			}, 500);

			let iframe = document.querySelector('#common-section-quote-2 .container-carousel .container-videos .el-video.active iframe');
		    let player = new Vimeo.Player(iframe);
			player.play();
		})
		

		
		

		if($('#common-section-quote-2').length) {
			sectionQuotes2Caroussel(
				'off',
				20000,
				'#common-section-quote-2',  
				".container-videos .el-video", 
				".container-text .el-text",
				".container-nav .nav"
			);
		}

		
})