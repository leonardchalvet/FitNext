$(window).on('load', function() {

	/**********************/
	/*     COVER VIDEO    */
	/**********************/
		let iframe = document.querySelector('#section-cover .container-illu .video');
	    let player = new Vimeo.Player(iframe);
		player.play();
		$('#section-cover p').addClass('bottom');
		setTimeout(function(){
			$('#section-cover p').addClass('active');
		}, 1800)

		let bool = false;
		setInterval(function(){
			player.getCurrentTime().then(function(seconds) {
				if(seconds >= 8.25) {
					if(!bool) {
						$('#section-cover p').removeClass('active').addClass('bottom');
						setTimeout(function(){
							$('#section-cover p').removeClass('bottom').addClass('none');
						}, 500)
						setTimeout(function(){
							$('#section-cover p').removeClass('none bottom');
						}, 750)
						setTimeout(function(){
							$('#section-cover p').addClass('active');
						}, 1000)
						bool = true;
					}
				}
				else if(seconds < 1) {
					bool = false;
					$('#section-cover p').addClass('anim');
				}
			})
		}, 50)



	/********************/
	/*     COVER LOGO   */
	/********************/
		let tabActive = [ 1 , 2 , 3 ];
		for(let i = 0 ; i < tabActive.length ; i++) {
			$('#section-cover .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
		}
		setInterval(function(){


			let logoI = Math.floor((Math.random() * ($('#section-cover .container-logo .logo').length) + 1));
				
			let r = 1;
			let index = -1;
			do {
				r = Math.floor((Math.random() * ($('#section-cover .container-logo .logo:nth-child(1) img').length) + 1));
				index = jQuery.inArray(r, tabActive);
			} while(index != -1);

			tabActive[(logoI-1)] = r;

			$('#section-cover .container-logo .logo img').removeClass('active');
			for(let i = 0 ; i < tabActive.length ; i++) {
				$('#section-cover .container-logo .logo:nth-child(' + (i+1) + ') img:nth-child(' + tabActive[i] + ')').addClass('active');
			}

		}, 3000)



	/************************/
	/*     SECTION LIST     */
	/************************/
		$('#section-list .container-text ul.container-nav li').click(function(){
			$('#section-list .container-text ul.container-nav').removeClass('li-1 li-2 li-3');
			$(this).parent().addClass('li-' + ($(this).index()+1) );
			$('body').animate({ scrollTop: ($('.container-cards .card:nth-child(' + ($(this).index()+1) + ')').offset().top - 150 ) }, 500 );
		});

		$window = $(window);
		let state = false;
		function animScroll() {
			let windowHeight = $window.height();
		    $('#section-list .container-cards .card').each(function() {
		    	if ($window.scrollTop() >= $(this).offset().top - 500 && $window.scrollTop() <= $(this).offset().top + ($(this).height()-350) ) {
		    		let index = $(this).index() + 1;
	            	if( !state && !$('#section-list .container-text .container-el .el:nth-child(' + index + ')').hasClass('show') ) {
	            		state = true;
	            		$('#section-list .container-text .container-el .el').removeClass('show');
	            		setTimeout(function(){
	            			$('#section-list .container-text .container-el .el').removeClass('displayBlock').addClass('displayNone');
	            			$('#section-list .container-text .container-el .el:nth-child(' + index + ')').addClass('displayBlock').removeClass('displayNone');
	            			$('#section-list .container-text ul.container-nav').removeClass('li-1 li-2 li-3').addClass('li-' + index );
	            		}, 200)

	            		setTimeout(function(){
	            			$('#section-list .container-text .container-el .el:nth-child(' + index + ')').addClass('show');
	            			state = false;
	            		}, 250)
	            	}
		        }
		    });
		};
		$window.scroll(function() {
		    animScroll();
		});
		setTimeout(function(){ animScroll() }, 1000);

		$('#section-list .container-text .container-el .el:first-child').addClass('displayBlock show');
		$('#section-list .container-text .container-el .el:not(:first-child)').addClass('displayNone');
		$('#section-list .container-text .container-nav').addClass('li-1');



	/********************/
	/*       PHOTO      */
	/********************/
		function sectionPhotoCaroussel(Delay, Section, El, Nav){
			
			El = Section + ' ' + El;
			Nav = Section + ' ' + Nav;

			var valDelay = 0;
			var numberEl = $(El).length;
			var countEl = 1;
			
			var drtc;

			function prg(drtc){

				if (drtc === 'next') {
					countEl++;
				} else if (drtc === 'prev') {
					countEl--;
				};

				if (countEl <= numberEl && countEl >= 1) {

					$(El + '.active').removeClass('active').addClass('hide');
					$(El + ':nth-child('+countEl+')').addClass('active');

					setTimeout(function(){
						$(El + '.hide').removeClass('hide');
					}, 1000)

					clearInterval(interval);
					interval = setInterval(function() {
				      	prg('next');
				    }, valDelay);

				} else if (countEl < 1) {
					countEl = numberEl;
					prg();
				} else {
					countEl = 1;
					prg();
				};
				
			};

			let state = false;
			$(Nav).click(function(){
				if(!state) {
					clearInterval(interval);
					prg('next');

					state = true;
					setTimeout(function(){
						state= false;
					},900)
				}
			})

			valDelay = Delay;

			var interval = setInterval(function() {
		    	prg('next');
		    }, valDelay);

		};

		let stateStartPhoto = false;
		$window = $(window);
		$window.scroll(function() {
			let windowHeight = $window.height();
			if( !stateStartPhoto && 
				$window.scrollTop() >= $('#section-photo').offset().top - windowHeight ) {
				
				sectionPhotoCaroussel(
					7000,
					'#section-photo',  
					".el",
					".container-nav"
				);
				stateStartPhoto = true;
			}
		})

		$('#section-photo .el:nth-child(1)').addClass('active');


	/********************/
	/*       QUOTE      */
	/********************/
		function sectionQuoteCaroussel(Delay, Section, El, Nav){
			
			El = Section + ' ' + El;
			Nav = Section + ' ' + Nav;

			var valDelay = 0;
			var numberEl = $(El).length;
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

						$(El + ':not(.active)').removeClass('left').addClass('right displayNone');
						setTimeout(function() {
							$(El).removeClass('displayNone');
							setTimeout(function() {
								$(El + '.active').removeClass('active').addClass('left');
								$(El + ':nth-child('+countEl+')').addClass('active').removeClass('right left');

								setTimeout(function() {
									$(El + ':not(.active)').removeClass('left').addClass('right displayNone');
								}, 400)
							}, 50)
						}, 50)
					}
					else if(drtc === 'prev') {
						$(El + ':not(.active)').removeClass('right').addClass('left displayNone');
						setTimeout(function() {
							$(El).removeClass('displayNone');
							setTimeout(function() {
								$(El + '.active').removeClass('active').addClass('right');
								$(El + ':nth-child('+countEl+')').addClass('active').removeClass('right left');

								setTimeout(function() {
									$(El + ':not(.active)').removeClass('right').addClass('left displayNone');
								}, 400)
							}, 50)
						}, 50)
					}

					setTimeout(function(){
						$(El).removeClass('displayNone');
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
				$(El + ':nth-child(1)').addClass('active');
				$(El + '.active').nextAll().addClass('right');
				$(El + ':last-child').removeClass('right').addClass('left');
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

		let stateStartQuote = false;
		$window = $(window);
		$window.scroll(function() {
			let windowHeight = $window.height();
			if( !stateStartQuote && 
				$window.scrollTop() >= $('#section-photo').offset().top - windowHeight ) {
				
				sectionQuoteCaroussel(
					7000,
					'#section-quote',  
					".container-el .el",
					".container-nav .arrow"
				);
				stateStartQuote = true;
			}
		})
})