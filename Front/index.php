<html>
	<head>

		<title>Home</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/home.css">

		<script type="text/javascript" src="script/minify/jQuery-3.4.1-min.js"></script>

	</head>
	
	<body class="style-promo">

		<?php include('common-header.php') ?>

		<main>
			
			<section id="section-cover" class="sectionAnim_container">
				<div class="wrapper">
					<div class="container-illu elAnim__fade anim__delayMedium_7">
						<div class="bg" style="background-image: url(img/home/cover-illu.png);"></div>
						<img class="obj-1" src="img/home/cover-obj-1.svg">
						<img class="obj-2" src="img/home/cover-obj-2.svg">
						<iframe class="video" src="https://player.vimeo.com/video/352471925?api=1&background=1&mute=0&autoplay=0&loop=1&quality=720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>

					<h1 class="elAnim__fade anim__delayMedium_0 wrapLine">Transformez votre physique. Boostez votre bien être.</h1>
					<p class="elAnim__slide anim__delayMedium_7">
						Votre coach digital sport & nutrition
					</p>
					<div class="container-btn elAnim__slide anim__delayMedium_10">
						<a class="btn" href="">
							<span class="btn-text">Découvrez votre programme personnalisé</span>
							<span class="btn-arrow">
								<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
								  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
								  </g>
								</svg>
							</span>
						</a>
					</div>
					<div class="txt-under-btn elAnim__slide anim__delayMedium_12">
						<div class="icn">
							<img src="img/home/clock.svg" alt="">
						</div>
						<span>Votre bilan en moins d'une minute</span>
					</div>
					<div class="sep elAnim__slide anim__delayMedium_14"></div>
					<div class="container-logo">
						<?php $delay = 16;
							for($i=0;$i<3;$i++) { ?>
							<div class="logo elAnim__slide anim__delayMedium_<?php echo($delay); ?>">
								<img src="img/home/logos/france2.png">
								<img src="img/home/logos/franceinfo.png">
								<img src="img/home/logos/journaldimanche.png">
								<img src="img/home/logos/elle.png">
								<img src="img/home/logos/bfm.png">
								<img src="img/home/logos/menhealth.png">
							</div>
						<?php $delay++; } ?>
					</div>
					<div class="scroll elAnim__slide anim__delayMedium_22">
						<span>Scroll</span>
						<div class="dot"></div>
					</div>
				</div>
			</section>

			<!--
			<section id="section-list">
				<div class="wrapper">
					<div class="flex">
						<div class="container-text sectionAnim_container">
							<h2 class="elAnim__slide anim__delayMedium_1">
								Le meilleur du <em>sport</em> & de la <em>nutrition</em>.
							</h2>
							<div class="quote">
								<div class="icn elAnim__slide anim__delayMedium_3">
									<svg viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
									  <path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
								</div>
								<div class="container-el elAnim__slide anim__delayMedium_5">
									<div class="el">
										Aucun entraînement ne gagne contre une mauvaise alimentation.
									</div>
									<div class="el">
										Une séance de poids de corps est beaucoup plus efficace qu'un jogging.
									</div>
									<div class="el">
										Un coach vous fera faire ce que vous ne feriez pas tout seul.
									</div>
								</div>
							</div>
							<ul class="container-nav elAnim__slide anim__delayMedium_7">
								<li class="elAnim__slide anim__delayMedium_7">
									<span>La Nutrition</span>
								</li>
								<li class="elAnim__slide anim__delayMedium_8">
									<span>Le Sport</span>
								</li>
								<li class="elAnim__slide anim__delayMedium_9">
									<span>Un Coach</span>
								</li>
							</ul>
						</div>
						<div class="container-cards">
							<div class="card sectionAnim_container">
								<div class="color elAnim__fade anim__delayMedium_1"></div>
								<div class="container-illu elAnim__fade anim__delayMedium_3">
									<div class="bg">
										<img src="img/home/phone.png">
									</div>
									<div class="video">
										<img src="img/home/dev/list-photo-1.png">
									</div>
								</div>
								<div class="text">
									<div class="elAnim__slide anim__delayMedium_5">
										<h6>
											Une nutrition pro-microbiote
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_7">
										<p>
											Boostez votre microbiote intestinal qui conditionne la santé, le moral et la perte de poids. Détoxifiez votre organisme en 40 jours.
										</p>
									</div>
									<div class="elAnim__slide anim__delayMedium_9">
										<h6>
											Plaisir et liberté
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_11">
										<p>
											Des recettes gourmandes, des conseils au restaurant, des repas libres.
										</p>
									</div>
								</div>
								<div class="sep"></div>
								<div class="container-link elAnim__slide anim__delayMedium_13">
									<a class="link" href="">
										<span class="link-text">En savoir plus</span>
										<span class="link-arrow">
											<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
											  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
											    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
											  </g>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="card sectionAnim_container">
								<div class="color elAnim__fade anim__delayMedium_1"></div>
								<div class="container-illu elAnim__fade anim__delayMedium_3">
									<div class="bg">
										<img src="img/home/phone.png">
									</div>
									<div class="video">
										<img src="img/home/dev/list-photo-2.png">
									</div>
								</div>
								<div class="text">
									<div class="elAnim__slide anim__delayMedium_5">
										<h6>
											Efficacité optimale
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_7">
										<p>
											Des exercices de Fitness, HIIT*, bodyweight et cardio calibrés en fonction de vos capacités, de vos progrès et de vos objectifs.
										</p>
									</div>
									<div class="elAnim__slide anim__delayMedium_9">
										<h6>
											Adapté à votre agenda
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_11">
										<p>
											Séances de 9 à 50 minutes, sans matériel, chez soi ou à l’extérieur.
										</p>
									</div>
								</div>
								<div class="sep"></div>
								<div class="container-link elAnim__slide anim__delayMedium_13">
									<a class="link" href="">
										<span class="link-text">En savoir plus</span>
										<span class="link-arrow">
											<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
											  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
											    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
											  </g>
											</svg>
										</span>
									</a>
								</div>
							</div>
							<div class="card sectionAnim_container">
								<div class="color elAnim__fade anim__delayMedium_1"></div>
								<div class="container-illu elAnim__fade anim__delayMedium_3">
									<div class="bg">
										<img src="img/home/phone.png">
									</div>
									<div class="video">
										<img src="img/home/dev/list-photo-3.png">
									</div>
								</div>
								<div class="text">
									<div class="elAnim__slide anim__delayMedium_5">
										<h6>
											S'adapte en continu
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_7">
										<p>
											Programme proposé en fonction de vos ressentis, progressions, objectifs, envies et agenda.
										</p>
									</div>
									<div class="elAnim__slide anim__delayMedium_9">
										<h6>
											A votre écoute
										</h6>
									</div>
									<div class="elAnim__slide anim__delayMedium_11">
										<p>
											Des conseils, des explications et de la motivation avec le support de notre équipe de coachs.
										</p>
									</div>
								</div>
								<div class="sep"></div>
								<div class="container-link elAnim__slide anim__delayMedium_13">
									<a class="link" href="">
										<span class="link-text">En savoir plus</span>
										<span class="link-arrow">
											<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
											  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
											    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
											  </g>
											</svg>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="container-action sectionAnim_container">
						<h3 class="elAnim__slide anim__delayMedium_1">
							Quel objectif souhaitez-vous atteindre ?
						</h3>
						<div class="container-btn elAnim__slide anim__delayMedium_3">
							<a class="btn" href="">
								<span class="btn-text">Créer mon programme</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			-->
		
			<section id="section-features">
				<div class="wrapper">
					<div class="container-slide">
						<div class="container-text">
							<h2>
								Le meilleur du <em>sport</em> & de la <em>nutrition</em>
							</h2>
							<div class="container-paragraph">
								<div class="el-paragraph">
									<img src="img/home/section-features/dottwice.svg" alt="">
									<p>
										Aucun entraînement ne gagne contre une mauvaise alimentation.
									</p>
								</div>
								<div class="el-paragraph">
									<img src="img/home/section-features/dottwice.svg" alt="">
									<p>
										Une séance de poids de corps est beaucoup plus efficaces qu'un jogging.
									</p>
								</div>
								<div class="el-paragraph">
									<img src="img/home/section-features/dottwice.svg" alt="">
									<p>
										Un coach vous fera faire ce que vous ne feriez pas tout seul.
									</p>
								</div>
							</div>
							<div class="container-anchor">
								<div class="container-line">
									<div class="line"></div>
								</div>
								<div class="li-anchor">
									<a>
										<h5>La Nutrition</h5>
									</a>
									<a>
										<h5>Le Sport</h5>
									</a>
									<a>
										<h5>Un coach</h5>
									</a>
								</div>
							</div>
						</div>
						<div class="container-features">
							<div class="feature">
								<div class="content">
									<div class="container-img">
										<div class="container-media">
											<img class="shape" src="img/home/section-features/shape-iphone-2.svg" alt="">
											<div class="video">
												<iframe src="https://player.vimeo.com/video/366379829?play=false&loop=true&api=1&background=1&mute=0" frameborder="0"></iframe>
											</div>
											<img class="poster" src="img/home/section-features/feature-1-poster.png" alt="">
										</div>
										
									</div>
									<div class="container-desc">
										<div class="desc">
											<h3>Une nutrition pro-microbiote</h3>
											<p>
												Boostez votre microbiote intestinal qui conditionne la santé, le moral et la perte de poids. Détoxifiez votre organisme en 40 jours.
											</p>
										</div>
										<div class="desc">
											<h3>Plaisir et liberté</h3>
											<p>
												Des recettes gourmandes, des conseils au restaurant, des repas libres.
											</p>
										</div>
									</div>
								</div>
								<div class="foot">
									<a href="">
										<div class="text">En savoir plus</div>
										<img class="arrow" src="img/common/arrow-1-white.svg" alt="">
									</a>
								</div>
							</div>
							
							<div class="feature">
								<div class="content">
									<div class="container-img">
										<div class="container-media">
											<img class="shape" src="img/home/section-features/shape-iphone-2.svg" alt="">
											<div class="video">
												<iframe src="https://player.vimeo.com/video/366379848?play=false&loop=true&api=1&background=1&mute=0" frameborder="0"></iframe>
											</div>
											<img class="poster" src="img/home/section-features/feature-2-poster.png" alt="">
										</div>
										
									</div>
									<div class="container-desc">
										<div class="desc">
											<h3>Efficacité optimale</h3>
											<p>
												Des exercices de Fitness, HIIT*, bodyweight et cardio calibrés en fonction de vos capacités, de vos progrès et de vos objectifs
											</p>
										</div>
										<div class="desc">
											<h3>Adapté à votre agenda</h3>
											<p>
												Séances de 9 à 50 minutes, sans matériel, chez soi ou à l’extérieur
											</p>
										</div>
									</div>
								</div>
								<div class="foot">
									<a href="">
										<div class="text">En savoir plus</div>
										<img class="arrow" src="img/common/arrow-1-white.svg" alt="">
									</a>
								</div>
							</div>

							<div class="feature">
								<div class="content">
									<div class="container-img">
										<div class="container-media">
											<img class="shape" src="img/home/section-features/shape-iphone-2.svg" alt="">
											<div class="video">
												<iframe src="https://player.vimeo.com/video/366379859?play=false&loop=true&api=1&background=1&mute=0" frameborder="0"></iframe>
											</div>
											<img class="poster" src="img/home/section-features/feature-3-poster.png" alt="">
										</div>
										
									</div>
									<div class="container-desc">
										<div class="desc">
											<h3>Des coachs à votre écoute</h3>
											<p>
												des conseils, des explications et de la motivation avec le support de notre équipe de coachs.
											</p>
										</div>
										<div class="desc">
											<h3>S'adapte en continu</h3>
											<p>
												programme proposé en fonction de vos ressentis, progressions, objectifs, envies et agenda.
											</p>
										</div>
									</div>
								</div>
								<div class="foot">
									<a href="">
										<div class="text">En savoir plus</div>
										<img class="arrow" src="img/common/arrow-1-green.svg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="container-action sectionAnim_container">
						<h3 class="elAnim__slide anim__delayMedium_1">
							Quel objectif souhaitez-vous atteindre ?
						</h3>
						<div class="container-btn elAnim__slide anim__delayMedium_3">
							<a class="btn" href="">
								<span class="btn-text">Créer mon programme</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="section-photo" class="sectionAnim_container">
				<div class="el">
					<div class="bg elAnim__fade anim__delayMedium_2" style="background-image: url(img/home/photo-bg-1.jpg);"></div>
					<div class="overlay elAnim__fade anim__delayMedium_2"></div>
					<div class="wrapper">
						<div class="elAnim__slide anim__delayMedium_6">
							<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
							</svg>
						</div>
						<a href="https://www.ncbi.nlm.nih.gov/pubmed/28360349" class="elAnim__slide anim__delayMedium_10">
							Un meilleur microbiote réduit les risques de cancers et de maladies inflammatoires et diminue les facteurs de risques cardiovasculaires. 
						</a>
						<div class="logo elAnim__slide anim__delayMedium_12">
							<img src="img/home/photo-icn-1.png">
						</div>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-2.jpg);"></div>
					<div class="overlay"></div>
					<div class="wrapper">
						<div class="elAnim__slide">
							<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
							</svg>
						</div>
						<a href="https://www.revmed.ch/RMS/2011/RMS-317/Microbiote-intestinal-obesite-et-resistance-a-l-insuline">
							 Il devient indéniable que la flore intestinale joue un rôle dans la survenue de l’obésité. 
						</a>
						<div class="logo">
							<img src="img/home/photo-icn-2.png">
						</div>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-3.jpg);"></div>
					<div class="overlay"></div>
					<div class="wrapper">
						<div class="elAnim__slide">
							<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
							</svg>
						</div>
						<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6172294/">
							La pratique de l’exercice physique régulier diminue le risque de maladie cardiovasculaire et d’obésité.
						</a>
						<div class="logo">
							<img src="img/home/photo-icn-3.png">
						</div>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-4.jpg);"></div>
					<div class="overlay"></div>
					<div class="wrapper">
						<div class="elAnim__slide">
							<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
								<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
							</svg>
						</div>
						<a href="https://academic.oup.com/aje/article/187/5/1102/4582884">
							Les personnes qui pratiquent 1h minimum d’exercices à poids de corps limitent leurs risques de décès toute cause de 29%.
						</a>
						<div class="logo">
							<img src="img/home/photo-icn-4.png">
						</div>
					</div>
				</div>
				<div class="container-nav elAnim__fade anim__delayMedium_7">
					<svg viewBox="0 0 40 36" xmlns="http://www.w3.org/2000/svg">
					  <g stroke="#1A2238" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
					    <path d="M21.412 1l17.01 17.01-17.01 17.01M38.422 18.02H1"/>
					  </g>
					</svg>
				</div>
			</section>
			
			<div id="section-gradient">
				
				<section id="section-erwann" class="sectionAnim_container">
					<div class="wrapper">
						<h2 class="wrapLine">Erwann Menthéour</h2>
						<h4 class="elAnim__slide anim__delayMedium_4">Fondateur de Fitnext</h4>
						<p class="elAnim__slide anim__delayMedium_6">
							Erwann Menthéour, champion cycliste et coach de personnalités est aussi un expert en nutrition et en santé durable. Il est l’auteur de nombreux best sellers comme <em>«Et si on arrêtait d’empoisonner nos enfants»</em>.
						</p>
						<p class="elAnim__slide anim__delayMedium_8">
							Il a conçu la 1ère méthode Fitnext il y a 10 ans en s'appuyant sur l'intelligence déployée autour des athlètes de haut niveau, ses nombreux travaux de recherche et ses expériences vécues avec ses coachés.
						</p>
						<a class="btn elAnim__slide anim__delayMedium_10" href="">
							<span class="btn-text">En savoir plus sur Erwann</span>
							<span class="btn-arrow">
								<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
								  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
								  </g>
								</svg>
							</span>
						</a>
						<div class="container-illu elAnim__fade anim__delayMedium_12">
							<div class="bg" style="background-image: url(img/home/erwann-me.png);"></div>
						</div>
					</div>
				</section>

				<section id="common-section-book" class="sectionAnim_container">
					<div class="wrapper">
						<div class="container-illu elAnim__fade anim__delayMedium_2">
							<img src="img/home/sectionHome-illu.png">
						</div>
						<div class="container-text">
							<h6 class="elAnim__slide anim__delayMedium_4">
								En rayon le 12/09
							</h6>
							<p class="elAnim__slide anim__delayMedium_6">
								Découvrez la nouvelle méthode Fitnext enrichie des dernières recherches d'Erwann.
							</p>
							<div class="elAnim__slide anim__delayMedium_8">
								<a class="btn" href="">
									<span class="btn-text">Découvrir le livre</span>
									<span class="btn-arrow">
										<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
										  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
										    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
										  </g>
										</svg>
									</span>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section id="common-section-quote-1" class="sectionAnim_container">
						<div class="wrapper">
							<h2 class="elAnim__slide anim__delayMedium_2 wrapLine">
								Pourquoi je reprends mes kilos ? 
							</h2>
							<div class="container-quotes elAnim__slide anim__delayMedium_3">
								<div class="container-img">
									<div class="el">
										<div class="img elAnim__fade anim__delayMedium_4">
											<img src="img/weight/quote-1/img-1.jpg">
											<div class="before">
												Céline Avant
											</div>
											<div class="after">
												Céline Après
											</div>
										</div>
										<div class="info elAnim__slide anim__delayMedium_6">
											7 kilos perdus en 1 mois 1/2
										</div>
									</div>
									<div class="el">
										<div class="img elAnim__fade anim__delayMedium_4">
											<img src="img/weight/quote-1/img-2.jpg">
											<div class="before">
												Wassim Avant
											</div>
											<div class="after">
												Wassim Après
											</div>
										</div>
										<div class="info elAnim__slide anim__delayMedium_6">
											16 kilos perdus en 4 mois
										</div>
									</div>
									<div class="el">
										<div class="img elAnim__fade anim__delayMedium_4">
											<img src="img/weight/quote-1/img-3.jpg">
											<div class="before">
												Jimmy Avant
											</div>
											<div class="after">
												Jimmy Après
											</div>
										</div>
										<div class="info elAnim__slide anim__delayMedium_6">
											10 kilos perdus en 1 mois 1/2
										</div>
									</div>
									<div class="el">
										<div class="img elAnim__fade anim__delayMedium_4">
											<img src="img/weight/quote-1/img-4.jpg">
											<div class="before">
												Emily Avant
											</div>
											<div class="after">
												Emily Après
											</div>
										</div>
										<div class="info elAnim__slide anim__delayMedium_6">
											8 kilos perdus en 3 mois
										</div>
									</div>
									<div class="el">
										<div class="img elAnim__fade anim__delayMedium_4">
											<img src="img/weight/quote-1/img-5.jpg">
											<div class="before">
												Sophie Avant
											</div>
											<div class="after">
												Sophie Après
											</div>
										</div>
										<div class="info elAnim__slide anim__delayMedium_6">
											9 kilos perdus en 6 mois
										</div>
									</div>
								</div>
								<div class="container-text">
									<div class="container-el elAnim__slide anim__delayMedium_8">
										<div class="el">
											<img class="quote" src="img/weight/quote-1/quote.svg">
											<div class="text-quote">
												<p class="wrapLine medium">
													Avec Fitnext, j’ai perdu du poids, mon corps a changé, il est plus tonique et surtout je suis beaucoup moins malade, plus en forme…
												</p>
											</div>
										</div>
										<div class="el">
											<img class="quote" src="img/weight/quote-1/quote.svg">
											<div class="text-quote">
												<p class="wrapLine">
													Fitnext le contrôle de son corps, de son mental
												</p>
											</div>
										</div>
										<div class="el">
											<img class="quote" src="img/weight/quote-1/quote.svg">
											<div class="text-quote">
												<p class="wrapLine">
													J'ai eu un regain d'énergie et un moral au top dès le début du programme
												</p>
											</div>
										</div>
										<div class="el">
											<img class="quote" src="img/weight/quote-1/quote.svg">
											<div class="text-quote">
												<p class="wrapLine">
													Les kilos se sont envolés sans que j'ai l'impression de faire d'efforts et j'ai retrouvé mon énergie
												</p>
											</div>
										</div>
										<div class="el">
											<img class="quote" src="img/weight/quote-1/quote.svg">
											<div class="text-quote">
												<p class="wrapLine">
													J’ai retrouvé quasi instantanément une forme que je n’avais plus depuis des années.
												</p>
											</div>
										</div>
									</div>
									<div class="container-nav elAnim__slide anim__delayMedium_10">
										<div class="nav prev">
											<img src="img/weight/section-quote-2/arrow-photo.svg" alt="">
										</div>
										<div class="nav next">
											<img src="img/weight/section-quote-2/arrow-photo.svg" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="container-btn elAnim__slide anim__delayMedium_4">
								<a class="btn" href="">
									<span class="btn-text">Créer mon programme</span>
									<span class="btn-arrow">
										<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
										  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
										    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
										  </g>
										</svg>
									</span>
								</a>
							</div>
						</div>
				</section>

			</div>

			<section id="section-article" class="sectionAnim_container">
				<div class="wrapper">
					<div class="sep elAnim__slide anim__delayMedium_1"></div>
					<div class="head">
						<h2 class="wrapLine anim__delayMedium_2">Pour aller plus loin</h2>
						<div class="elAnim__slide anim__delayMedium_3">
							<a class="btn" href="">
								<span class="btn-text">Voir le blog</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</a>
						</div>
					</div>
					<div class="container-el">
						<a href="https://www.fitnext.com/fr/conseils/methode/programme-perte-de-poids-fitnext-regime" class="el elAnim__slide anim__delayMedium_4">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-1.jpg);"></div>
							</div>
							<div class="by">Par Erwann Menthéour</div>
							<h4>
								Méthode fitnext : programme perte de …
							</h4>
							<p>
								Vous avez décidé de perdre du poids durablement sans y laisser votre santé ? Vous souhaitez tonifier votre ligne ou acquérir …
							</p>
							<div class="btn">
								<span class="btn-text">Lire l'article</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</div>
						</a>
						<a href="https://www.fitnext.com/fr/conseils/perte-poids/avoir-ventre-plat-grace-programme" class="el elAnim__slide anim__delayMedium_5">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-2.jpg);"></div>
							</div>
							<div class="by">Par Erwann Menthéour</div>
							<h4>
								Avoir un ventre plat grâce au programme fitnext 
							</h4>
							<p>
								Comment avoir un ventre plat ? Avouons-le, beaucoup d’hommes et de femmes rêvent d’avoir un ventre plat. Qui n’a jamais regardé son…
							</p>
							<div class="btn">
								<span class="btn-text">Lire l'article</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</div>
						</a>
						<a href="https://www.fitnext.com/fr/conseils/coaching-alimentation/detox" class="el elAnim__slide anim__delayMedium_6">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-3.jpg);"></div>
							</div>
							<div class="by">Par Erwann Menthéour</div>
							<h4>
								La détox : grands principes effets bénéfiques 
							</h4>
							<p>
								On entend tout et n’importe quoi sur la détox : danger pour la santé pour les uns, lubie d’écolo sectaire pour les autres, ou encore …
							</p>
							<div class="btn">
								<span class="btn-text">Lire l'article</span>
								<span class="btn-arrow">
									<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
									  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
									    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
									  </g>
									</svg>
								</span>
							</div>
						</a>
					</div>
				</div>
			</section>

			<section id="common-section-foot" class="sectionAnim_container">
				<div class="wrapper">
					<h2 class="elAnim__slide anim__delayMedium_2" >Quel objectif souhaitez-vous atteindre ?</h2>
					<div class="elAnim__slide anim__delayMedium_4">
						<a class="btn" href="">
							<span class="btn-text">Définir mes objectifs</span>
							<span class="btn-arrow">
								<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
								  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
								  </g>
								</svg>
							</span>
						</a>
					</div>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script src="https://player.vimeo.com/api/player.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>
		<script type="text/javascript" src="script/minify/index-min.js"></script>
	</body>
</html>