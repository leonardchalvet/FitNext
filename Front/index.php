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
						<iframe class="video" src="https://player.vimeo.com/video/352471925?api=1&background=1&mute=0&autoplay=0&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="container-text">
						<h1 class="elAnim__fade anim__delayMedium_0 wrapLine">Révélez le meilleur de vous-même</h1>
						<p class="elAnim__slide anim__delayMedium_7">
							Le coach digital qui place votre bien être au coeur de votre transformation physique.
						</p>
						<div class="elAnim__slide anim__delayMedium_10">
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
						<div class="sep elAnim__slide anim__delayMedium_12"></div>
						<div class="container-logo">
							<?php $delay = 14;
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
					</div>
				</div>
			</section>

			<section id="section-list">
				<div class="wrapper">
					<div class="sectionAnim_container">
						<h2 class="elAnim__slide anim__delayMedium_0 wrapLine">
							Le meilleur équilibre entre <em>sport</em> & <em>nutrition</em> pour atteindre vos objectifs.
						</h2>
					</div>
					<div class="container-el">
						<div class="el sectionAnim_container">
							<div class="container-text">
								<h3 class="elAnim__slide anim__delayMedium_1">Le meilleur de la nutrution.</h3>
								<div class="ul">
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_2">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_2">Pro-microbiote</h6>
											<p class="elAnim__slide anim__delayMedium_3">Le micro-biote intestinal conditionne la santé, le moral et la perte de poids</p>
										</div>
									</div>
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_4">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_4">Désintoxication de l'organisme en 40 jours </h6>
											<p class="elAnim__slide anim__delayMedium_5">Notre programme mono-diète 40jours pour une désintoxication profonde de l'organisme</p>
										</div>
									</div>
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_6">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_6">Plaisir et liberté</h6>
											<p class="elAnim__slide anim__delayMedium_7">Des recettes gourmandes selon vos souhaits, des conseils au restaurant, des repas libres</p>
										</div>
									</div>
								</div>
								<div class="elAnim__slide anim__delayMedium_8">
									<a class="btn" href="">
										<span class="btn-text">En savoir plus</span>
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
							<div class="container-illu">
								<div class="bg elAnim__fade anim__delayMedium_8" style="background-image: url(img/home/list-photo-1.jpg);"></div>
								<div class="more elAnim__slide anim__delayMedium_8">
									<p>Au restaurant</p>
									<p>Je cuisine</p>
								</div>
								<div class="quote elAnim__slide anim__delayMedium_9">
									<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
  										<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p>Aucun entraînement ne gagne contre une mauvaise alimentation.</p>
								</div>
							</div>
						</div>
						<div class="el sectionAnim_container">
							<div class="container-text">
								<h3 class="elAnim__slide anim__delayMedium_1">Le meilleur du sport.</h3>
								<div class="ul">
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_2">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_2">Efficacité optimale</h6>
											<p class="elAnim__slide anim__delayMedium_3">Des exercices de Fitness, HIIT*, bodyweight et cardio calibrés en fonction de vos capacités, de vos progrès et de vos objectifs</p>
										</div>
									</div>
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_4">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_4">Adapté à votre agenda</h6>
											<p class="elAnim__slide anim__delayMedium_5">Séances de 9 à 50 minutes, sans matériel, chez soi ou à l’extérieur</p>
										</div>
									</div>
								</div>
								<a class="btn elAnim__slide anim__delayMedium_6" href="">
									<span class="btn-text">En savoir plus</span>
									<span class="btn-arrow">
										<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
										  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
										    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
										  </g>
										</svg>
									</span>
								</a>
							</div>
							<div class="container-illu">
								<div class="bg elAnim__fade anim__delayMedium_7" style="background-image: url(img/home/list-photo-2.jpg);"></div>
								<div class="elAnim__slide anim__delayMedium_7">
									<div class="more">
										<img src="img/home/list-time.svg">
										<p>00:15sec, Burpees, Tour 2</p>
									</div>
								</div>
								<div class="quote elAnim__slide anim__delayMedium_8">
									<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
  										<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p>3 fois 30 secondes  d’exercices Fitnext = 40 minutes de footing!</p>
								</div>
							</div>
						</div>
						<div class="el sectionAnim_container">
							<div class="container-text">
								<h3 class="elAnim__slide anim__delayMedium_1">Le meilleur coaching pour vous.</h3>
								<div class="ul">
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_2">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_2">S'adapte en continu</h6>
											<p class="elAnim__slide anim__delayMedium_3">programme proposé en fonction de vos ressentis, progressions, objectifs, envies et agenda.</p>
										</div>
									</div>
									<div class="li">
										<div class="dot elAnim__slide anim__delayMedium_4">
											<svg viewBox="0 0 8 14" xmlns="http://www.w3.org/2000/svg">
											  <path d="M8 0v14H0V5.886z" fill-rule="nonzero"/>
											</svg>
										</div>
										<div class="text">
											<h6 class="elAnim__slide anim__delayMedium_4">A votre écoute</h6>
											<p class="elAnim__slide anim__delayMedium_5">des conseils, des explications et de la motivation avec le support de notre équipe de coachs.</p>
										</div>
									</div>
								</div>
								<div class="elAnim__slide anim__delayMedium_6">
									<a class="btn" href="">
										<span class="btn-text">En savoir plus</span>
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
							<div class="container-illu">
								<div class="bg elAnim__fade anim__delayMedium_7" style="background-image: url(img/home/list-photo-3.jpg);"></div>
								<div class="quote elAnim__slide anim__delayMedium_8">
									<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
  										<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
									</svg>
									<p>Un coach vous fera faire ce que vous ne feriez pas tout seul.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="sectionAnim_container">
						<div class="container-btn elAnim__slide anim__delayMedium_1">
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

			<!--

			<section id="section-photo">
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-1.jpg);"></div>
					<div class="wrapper">
						<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
						</svg>
						<h2>
							Un meilleur microbiote réduit les risques de cancers et de maladies inflammatoires et diminue les facteurs de risques cardiovasculaires. 
						</h2>
						<p>Pathogenesis to Therapy.</p>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-1.jpg);"></div>
					<div class="wrapper">
						<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
						</svg>
						<h2>
							Un meilleur microbiote réduit les risques de cancers et de maladies inflammatoires et diminue les facteurs de risques cardiovasculaires. 
						</h2>
						<p>Pathogenesis to Therapy.</p>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-1.jpg);"></div>
					<div class="wrapper">
						<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
						</svg>
						<h2>
							Un meilleur microbiote réduit les risques de cancers et de maladies inflammatoires et diminue les facteurs de risques cardiovasculaires. 
						</h2>
						<p>Pathogenesis to Therapy.</p>
					</div>
				</div>
				<div class="el">
					<div class="bg" style="background-image: url(img/home/photo-bg-1.jpg);"></div>
					<div class="wrapper">
						<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
							<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
						</svg>
						<h2>
							Un meilleur microbiote réduit les risques de cancers et de maladies inflammatoires et diminue les facteurs de risques cardiovasculaires. 
						</h2>
						<p>Pathogenesis to Therapy.</p>
					</div>
				</div>
			</section>

			<section id="section-erwann" class="sectionAnim_container">
				<div class="wrapper">
					<div class="container-text">
						<h2>Erwann Mentheour</h2>
						<h4>Fondateur de Fitnext</h4>
						<p>
							Erwann Mentheour, champion cycliste et coach de personnalités est aussi un expert en nutrition et en santé durable.<br>
							<br>
							Il est l’auteur de nombreux best sellers comme 
							<em>«Et si on arrêtait d’empoisonner nos enfants».</em><br>
							<br>
							Il a conçu La Méthode Fitnext en s’appuyant sur l'intelligence déployée autour des athlètes de haut niveau, ses nombreux travaux de recherche et ses expériences vécues avec ses coachés.
						</p>
						<a class="btn" href="">
							<span class="btn-text">En savoir plus</span>
							<span class="btn-arrow">
								<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
								  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
								    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
								  </g>
								</svg>
							</span>
						</a>
					</div>
					<div class="container-illu">
						<div class="bg" style="background-image: url(img/home/erwann-me.png);"></div>
					</div>
				</div>
			</section>

			<section id="section-quote">
				<div class="wrapper">
					<div class="container-text">
						<h2>
							Retrouvez les <em>témoignages</em> de notre communauté de 62000 coachés.
						</h2>
						<p>
							qui ont révélé le meilleur d’eux-mêmes.
						</p>
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
					<div class="container-quote">
						<div class="quote">
							<div class="container-text">
								<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
									<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
								</svg>
								<p>Je me sens mieux, aussi bien dans mon corps que dans ma tête.</p>
								<div class="container-profil">
									<div class="pp">
										<div class="bg" style="background-image: url(img/img-test/user.jpg);"></div>
									</div>
									<div class="text">
										<div class="name">
											Isabelle F.
										</div>
										<div class="info">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
							<div class="bdg">
								<img src="img/home/dev/bdg.png">
							</div>
						</div>
						<div class="quote">
							<div class="container-text">
								<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
									<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
								</svg>
								<p>J'ai gagné un bien-être intérieur, de l'assurance et je m'apprécie enfin.</p>
								<div class="container-profil">
									<div class="pp">
										<div class="bg" style="background-image: url(img/img-test/user.jpg);"></div>
									</div>
									<div class="text">
										<div class="name">
											Isabelle F.
										</div>
										<div class="info">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
							<div class="bdg">
								<img src="img/home/dev/bdg.png">
							</div>
						</div>
						<div class="quote">
							<div class="container-text">
								<svg class="icn" viewBox="0 0 42 30" xmlns="http://www.w3.org/2000/svg">
									<path d="M42 0v30H24V12.614L42 0zM18 0v30H0V12.614L18 0z" fill="#E9E9E9" fill-rule="nonzero"/>
								</svg>
								<p>J'ai plus d'énergie et mon moral est bien meilleur.</p>
								<div class="container-profil">
									<div class="pp">
										<div class="bg" style="background-image: url(img/img-test/user.jpg);"></div>
									</div>
									<div class="text">
										<div class="name">
											Isabelle F.
										</div>
										<div class="info">
											Utilise fitnext depuis 18 mois
										</div>
									</div>
								</div>
							</div>
							<div class="bdg">
								<img src="img/home/dev/bdg.png">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-article">
				<div class="wrapper">
					<div class="head">
						<h2>Pour aller plus loin</h2>
						<a class="btn" href="">
							<span class="btn-text">Voir le blog</span>
						</a>
					</div>
					<div class="container-el">
						<a class="el">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-1.jpg);"></div>
							</div>
							<div class="by">Par Tom Kuegler</div>
							<h4>
								Types Of Paper In Catalog Printing
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…
							</p>
							<div class="btn" href="">
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
						<a class="el">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-2.jpg);"></div>
							</div>
							<div class="by">Par Tom Kuegler</div>
							<h4>
								7 Ways To Advertise Your Business For Free
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…
							</p>
							<div class="btn" href="">
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
						<a class="el">
							<div href="" class="illu">
								<div class="bg" style="background-image: url(img/home/article-3.jpg);"></div>
							</div>
							<div class="by">Par Tom Kuegler</div>
							<h4>
								Nailing It On The Head With Free Internet
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua…
							</p>
							<div class="btn" href="">
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

			<section id="section-foot">
				<div class="wrapper">
					<h2>Quel objectif souhaitez-vous atteindre ?</h2>
					<a class="btn" href="">
						<span class="btn-text">Je commence l'évaluation</span>
						<span class="btn-arrow">
							<svg viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
							  <g stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
							    <path d="M7.7 1.297l5 5-5 5M12.7 6.3h-11"/>
							  </g>
							</svg>
						</span>
					</a>
				</div>
			</section>

			-->

		</main>

		<?php include('common-footer.php') ?>

		<script src="https://player.vimeo.com/api/player.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>
		<script type="text/javascript" src="script/minify/index-min.js"></script>
	</body>
</html>