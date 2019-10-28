$(window).on('load', function() {

	/*=================================
	=            WRAP LINE            =
	=================================*/

		(function($){

		/**
		 * Creates a temporary clone
		 *
		 * @param element element The element to clone
		 */
			function _createTemp(element) {
				return element.clone().css({position: 'relative', width: '98%'});
			};

		/**
		 * Splits contents into words, keeping their original Html tag. Note that this
		 * tags *each* word with the tag it was found in, so when the wrapping begins
		 * the tags stay intact. This may have an effect on your styles (say, if you have
		 * margin, each word will inherit those styles).
		 *
		 * @param node contents The contents
		 */
			function _splitHtmlWords(contents) {
				var words = [];
				var splitContent;
				for (var c=0; c<contents.length; c++) {
					if (contents[c].nodeType == 3) {
						splitContent = _splitWords(contents[c].textContent || contents[c].toString());
					} else {
						var tag = $(contents[c]).clone();
						splitContent = _splitHtmlWords(tag.contents());
						for (var t=0; t<splitContent.length; t++) {
							tag.empty();
							splitContent[t] = tag.html(splitContent[t]).wrap('<p></p>').parent().html();
						}
					}
					for (var w=0; w<splitContent.length; w++) {
						words.push(splitContent[w]);
					}
				}
				return words;
			};

		/**
		 * Splits words by spaces
		 *
		 * @param string text The text to split
		 */
			function _splitWords(text) {
				return text.split(/\s+/);
			}

		/**
		 * Formats html with tags and wrappers.
		 *
		 * @param tag
		 * @param html content wrapped by the tag
		 */
			function _markupContent(tag, html) {
				// wrap in a temp div so .html() gives us the tags we specify
				tag = '<div>' + tag;
				// find the deepest child, add html, then find the parent
				return $(tag)
					.find('*:not(:has("*"))')
					.html(html)
					.parentsUntil()
					.slice(-1)
					.html();
			}

		/**
		 * The jQuery plugin function. See the top of this file for information on the
		 * options
		 */
			$.fn.splitLines = function(options) {
				var settings = {
					width: 'auto',
					tag: '<div>',
					wrap: '',
					keepHtml: true
				};
				if (options) {
					$.extend(settings, options);
				}
				var newHtml = _createTemp(this);
				var contents = this.contents();
				var text = this.text();
				this.append(newHtml);
				newHtml.text('42');
				var maxHeight = newHtml.height()+2;
				newHtml.empty();

				var tempLine = _createTemp(newHtml);
				if (settings.width !== 'auto') {
					tempLine.width(settings.width);
				}
				this.append(tempLine);
				var words = settings.keepHtml ? _splitHtmlWords(contents) : _splitWords(text);
				var prev;
				for (var w=0; w<words.length; w++) {
					var html = tempLine.html();
					tempLine.html(html+words[w]+' ');
					if (tempLine.html() == prev) {
						// repeating word, it will never fit so just use it instead of failing
						prev = '';
						newHtml.append(_markupContent(settings.tag, tempLine.html()));
						tempLine.html('');
						continue;
					}
					if (tempLine.height() > maxHeight) {
						prev = tempLine.html();
						tempLine.html(html);
						newHtml.append(_markupContent(settings.tag, tempLine.html()));
						tempLine.html('');
						w--;
					}
				}
				newHtml.append(_markupContent(settings.tag, tempLine.html()));

				this.html(newHtml.html());

			};
		})(jQuery);

		/* ACTIVE */
		$('.wrapLine').each(function (index) {
		    $(this).splitLines({tag:'<span><span>'});
		});

		$('h1.wrapLine, h2.wrapLine').each(function(i){
			$(this).find('span span').each(function(j){
				$(this).addClass('anim__delayMedium_'+(j+1));
			});
		})

	/*=====  End of WRAP LINE  ======*/
	
	$window = $(window);
	function animScroll() {
		var windowHeight = $window.height() / 1.2;
	    $('.sectionAnim_container').each(function() {
	        if ($window.scrollTop() >= $(this).offset().top - windowHeight) {
            	if (!$(this).hasClass('reach')) {
	                $(this).addClass('reach');
	            }
	        }

	        if ($('#section-list').length && $window.scrollTop() >= $('#section-list').offset().top - windowHeight - 100) {
	    		if (!$('#button-fixe').hasClass('show')) {
	                $('#button-fixe').addClass('show');
	            }
	        }
	        else {
	        	if ($('#button-fixe').hasClass('show')) {
	                $('#button-fixe').removeClass('show');
	            }
	        }
	    });
	};
	$window.scroll(function() {
	    animScroll();
	});
	setTimeout(function(){
		if($('main section:first-child').hasClass('sectionAnim_container')) {
			$('main section:first-child').addClass('reach');
		}
	}, 1000)

	$window.scroll(function() {

	    if ( $window.scrollTop() >= 1 ) {
	        $('#header-desktop').addClass('scroll');
	        $('#header-mobile').addClass('scroll');
	    } else {
	    	$('#header-desktop').removeClass('scroll');
	    	$('#header-mobile').removeClass('scroll');
	    };
	});
	

	$('#header-mobile .head .wrapper .container-burger').click(function(){
		if ($('#header-mobile').hasClass('open')) {
			$('#header-mobile').removeClass('open');	
		} else {
			$('#header-mobile').addClass('open');
		}

		if ($('body').hasClass('block')) {
			$('body').removeClass('block');	
		} else {
			$('body').addClass('block');
		}
	})

	$('#bnd-promo .close').click(function(){
		$('#bnd-promo').addClass('hide');
		$('#header-desktop').removeClass('style-bnd-promo');
		$('#header-mobile').removeClass('style-bnd-promo');
		$('body').removeClass('style-promo');
	})

	$('#bnd-promo .text').click(function(){
		$('#lightbox-promo').addClass('displayBlock');
		$('body').addClass('block');
		setTimeout(function(){
			$('#lightbox-promo').addClass('show');
		}, 50);
	})

	$('#lightbox-promo .container-promo .close').click(function(){
		$('#lightbox-promo').removeClass('show');
		$('body').removeClass('block');
		setTimeout(function(){
			$('#lightbox-promo').removeClass('displayBlock');
		}, 250);
	})

	$('#lightbox-promo .background').click(function(){
		$('#lightbox-promo').removeClass('show');
		$('body').removeClass('block');
		setTimeout(function(){
			$('#lightbox-promo').removeClass('displayBlock');
		}, 250);
	})


	function sectionQuotes1Caroussel(Delay, Section, El1, El2, Nav){
			
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


			sectionQuotes1Caroussel(
				100000,
				'#common-section-quote-1',  
				".container-img .el", 
				".container-text .el",
				".container-nav .nav"
			);
		}

})