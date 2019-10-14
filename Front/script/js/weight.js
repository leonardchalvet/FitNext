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
		function sectionQuoteCaroussel(Delay, Section, El1, El2, Nav){
			
			El1 = Section + ' ' + El1;
			El2 = Section + ' ' + El2;
			Nav = Section + ' ' + Nav;

			var valDelay = 0;
			var numberEl = $(El1).length;
			var countEl = 1;
			
			var drtc;

			function prg(drtc){

				if (drtc === 'next') {
					countEl++;
				} else if (drtc === 'prev') {
					countEl--;
				};

				if (countEl <= numberEl && countEl >= 1) {
					if(drtc === 'next') {

						function nextEl(El) {
							$(El + ':not(.active)').removeClass('left').addClass('right');
							setTimeout(function() {
								setTimeout(function() {
									$(El + '.active').removeClass('active').addClass('left');
									$(El + ':nth-child('+countEl+')').addClass('active').removeClass('right left');

									setTimeout(function() {
										$(El + ':not(.active)').removeClass('left').addClass('right');
									}, 0)
								}, 0)
							}, 0)
						}
						nextEl(El1);
						nextEl(El2);
					}
					else if(drtc === 'prev') {

						function prevEl(El) {
							$(El + ':not(.active)').removeClass('right').addClass('left');
							setTimeout(function() {
								setTimeout(function() {
									$(El + '.active').removeClass('active').addClass('right');
									$(El + ':nth-child('+countEl+')').addClass('active').removeClass('right left');

									setTimeout(function() {
										$(El + ':not(.active)').removeClass('right').addClass('left');
									}, 0)
								}, 0)
							}, 0)
						}
						prevEl(El1);
						prevEl(El2);
					}

					setTimeout(function(){
						$(El1).removeClass('displayNone');
						$(El2).removeClass('displayNone');
					}, 1000)

					clearInterval(interval);
					interval = setInterval(function() {
				      	prg('next');
				    }, valDelay);

				} else if (countEl < 1) {
					countEl = numberEl + 1;
					prg(drtc);
				} else {
					countEl = 0;
					prg(drtc);
				};
				
			};

			function init(){	    
				$(El1 + ':nth-child(1)').addClass('active');
				$(El1 + '.active').nextAll().addClass('right');
				$(El1 + ':last-child').removeClass('right').addClass('left');

				$(El2 + ':nth-child(1)').addClass('active');
				$(El2 + '.active').nextAll().addClass('right');
				$(El2 + ':last-child').removeClass('right').addClass('left');
			};

			let state = false;
			$(Nav + ':nth-child(1)').click(function(){
				if(!state) {
					clearInterval(interval);
					prg('prev');

					state = true;
					setTimeout(function(){
						state= false;
					},1000)
				}
			})

			$(Nav + ':nth-child(2)').click(function(){
				if(!state) {
					clearInterval(interval);
					prg('next');

					state = true;
					setTimeout(function(){
						state= false;
					},1000)
				}
			})

			init();

			valDelay = Delay;

			var interval = setInterval(function() {
		    	prg('next');
		    }, valDelay);

		};

		if($('#common-section-quote-1').length) {
			let stateStartQuote1 = false;
			$window = $(window);
			$window.scroll(function() {
				let windowHeight = $window.height();
				if( !stateStartQuote1 && 
					$window.scrollTop() >= $('#common-section-quote-1').offset().top - windowHeight ) {
					
					sectionQuoteCaroussel(
						7000,
						'#common-section-quote-1',  
						".container-img .el",  
						".container-text .el",
						".container-nav .arrow"
					);
					stateStartQuote1 = true;
				}
			})
		}

		if($('#common-section-quote-2').length) {
			let stateStartQuote2 = false;
			$window = $(window);
			$window.scroll(function() {
				let windowHeight = $window.height();
				if( !stateStartQuote2 && 
					$window.scrollTop() >= $('#common-section-quote-2').offset().top - windowHeight ) {
					
					sectionQuoteCaroussel(
						7000,
						'#common-section-quote-2',  
						".container .video .el",  
						".container-quote .container-el .el",
						".container-nav .arrow"
					);
					stateStartQuote2 = true;
				}
			})
		}
})