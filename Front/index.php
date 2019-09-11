<html>
	<head>

		<title>Home</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/home.css">

		<script type="text/javascript" src="script/minify/jQuery-3.4.1-min.js"></script>

	</head>
	
	<body>

		<?php include('common-header.php') ?>

		<main>
			
			<section id="section-cover" class="sectionAnim_container">
				<div class="wrapper">
					<div class="container-illu elAnim__fade anim__delayMedium_7">
						<div class="bg" style="background-image: url(img/home/cover-illu.png);"></div>
						<img class="obj-1" src="img/home/cover-obj-1.svg">
						<img class="obj-2" src="img/home/cover-obj-2.svg">
						<iframe class="video" src="https://player.vimeo.com/video/352471925?api=1&background=1&mute=0&autoplay=0&loop=1&quality=720p" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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

			<section id="section-book" class="sectionAnim_container">
				<div class="wrapper">
					<div class="container-illu elAnim__fade anim__delayMedium_2">
						<img src="img/home/sectionHome-illu.png">
					</div>
					<div class="container-text">
						<h6 class="elAnim__slide anim__delayMedium_4">
							En rayon le 12/09
						</h6>
						<p class="elAnim__slide anim__delayMedium_6">
							Découvrez la nouvelle méthode Fitnext enrichie des dernière recherches d'Erwann.
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

			<section id="section-quote" class="sectionAnim_container">
				<div class="wrapper">
					<div class="container-quote">
						<div class="container-el">
							<div class="el">
								<div class="info elAnim__slide anim__delayMedium_1">
									21 kilos perdus en 6 mois
								</div>
								<div class="text elAnim__slide anim__delayMedium_2">
									<svg viewBox="0 0 42 31" xmlns="http://www.w3.org/2000/svg">
									  <path d="M42 0v30.383H24.128V12.775L42 0zM17.872 0v30.383H0V12.775L17.872 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p class="elAnim__slide wrapLine">Je me sens mieux, aussi bien dans mon corps que dans ma tête</p>
								</div>
								<div class="person">
									<div class="pp elAnim__slide anim__delayMedium_6">
										<div class="bg" style="background-image: url(img/home/quote-pp-1.jpg);"></div>
									</div>
									<div class="infoP">
										<div class="name elAnim__slide anim__delayMedium_7">
											Isabelle F.
										</div>
										<div class="use elAnim__slide anim__delayMedium_8">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
							<div class="el">
								<div class="info">
									27 kilos perdus en 1 an
								</div>
								<div class="text">
									<svg viewBox="0 0 42 31" xmlns="http://www.w3.org/2000/svg">
									  <path d="M42 0v30.383H24.128V12.775L42 0zM17.872 0v30.383H0V12.775L17.872 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p>J'ai gagné un bien-être intérieur, de l'assurance et je m'apprécie enfin.</p>
								</div>
								<div class="person">
									<div class="pp">
										<div class="bg" style="background-image: url(img/home/quote-pp-2.jpg);"></div>
									</div>
									<div class="infoP">
										<div class="name">
											Elodie.
										</div>
										<div class="use">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
							<div class="el">
								<div class="info">
									31 kilos perdus en 1 an
								</div>
								<div class="text">
									<svg viewBox="0 0 42 31" xmlns="http://www.w3.org/2000/svg">
									  <path d="M42 0v30.383H24.128V12.775L42 0zM17.872 0v30.383H0V12.775L17.872 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p>J'ai plus d'énergie et mon moral est bien meilleur.</p>
								</div>
								<div class="person">
									<div class="pp">
										<div class="bg" style="background-image: url(img/home/quote-pp-3.jpg);"></div>
									</div>
									<div class="infoP">
										<div class="name">
											Isabelle.
										</div>
										<div class="use">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container-nav elAnim__slide anim__delayMedium_9">
							<div class="arrow left">
								<svg viewBox="0 0 40 37" xmlns="http://www.w3.org/2000/svg">
								  <g stroke="#1A2238" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M18.088 1.5L1.078 18.51l17.01 17.01M1.078 18.52H38.5"/>
								  </g>
								</svg>
							</div>
							<div class="arrow right">
								<svg viewBox="0 0 40 37" xmlns="http://www.w3.org/2000/svg">
								  <g stroke="#1A2238" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M18.088 1.5L1.078 18.51l17.01 17.01M1.078 18.52H38.5"/>
								  </g>
								</svg>
							</div>
						</div>
					</div>
					<div class="container-text">
						<h2 class="wrapLine">
							Retrouvez les témoignages de notre communauté de 62000 coachés.
						</h2>
						<div class="container-btn elAnim__slide anim__delayMedium_11">
							<a class="btn" href="">
								<span class="btn-text">Vous aussi, lancez-vous !</span>
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

			<section id="section-foot" class="sectionAnim_container">
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