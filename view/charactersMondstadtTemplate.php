<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/<?= $characterName . 'Scss' ?>.css">
	<title><?= $characterName ?></title>
</head>
<body>
	<!-- <header> -->
		<div id="infoGeneral"></div>
		<div id="entête">
			<img src="../img/logo.png" id="logo_top" class="IMG"><br/>
			<div id="reseaux">
				<img src="../img/Discord.png" class="icon Discord">
				<img src="../img/Twitter.png" class="icon Twitter">
			</div>
			<nav>
				<ul id="menuPrincipal">
					<li><a href="../index.HTML">Characters</a></li>
					<li><a href="">Weapons</a></li>
					<li><a href="">Artefacts</a></li>
				</ul>
			</nav>
		</div>
	<!-- </header> -->

	<!-- BODY -->
		<section>

		<!-- MENU LATERAL -->
			<nav class="menuLateral">
				<div class="circle"></div>
				<ul id="menu">
					<li><a href="#infoGeneral">Info générales</a></li>
					<li class="puce2"><a href="#competences">Compétences</a></li>
					<li class="puce3"><a href="">Constellation</a></li>
					<li class="puce2"><a href="">Build</a></li>
					<li><a href="">Recette secrète</a></li>
				</ul>
			</nav>


		<!-- CORPS DE PAGE -->
			<div class="content">

			<!-- INFO GENERALE -->
				<img class="Profil" src="../img/<?= $characterName ?>.png">
				<div class="section">
					<div class="title_banner">
						<img class="title_logo" src="../img/UI_Mondstadt.png">
						<div class="name">
							<h1><?= $characterName ?></h1>
						</div>
						<div class="voice">
							<?= $voiceContent ?>
						</div>
					</div>
					<div class="description description_exception">
						<?= $descriptionProfil ?>

						<div class="caracteristiques">
							<div class="attribut">
								<img src="../img/UI_Mondstadt.png"><div> <?= $origine ?></div>
							</div>
							<div class="attribut">
								<img src="../img/UI_DoubleSword.png"><div> <?= $weaponType ?> </div>
							</div>
							<div class="artefects">
								<div class="attribut">
									<img src="../img/Artefacts/Arte_Sorciere.png"><div> <?= $setArtefact ?></div>
								</div>
							</div>
						</div>
					</div>
					<div id="competences"></div>
				</div>

			<!-- COMPETENCES -->
				<div class="section">
					<div class="title_banner">
						<img class="title_logo" src="../img/UI_Mondstadt.png">
						<div class="name">
							<h1>COMPÉTENCES</h1>
						</div>
					</div>
					<div class="description">
						<div class="skill">
							<div class="cellule_gif">
								<h2>- <?= $attack ?> -</h2>
								<img src="../img/gifDiluc/Diluc-AA.gif">
								<p>Attaque</p>
							</div>
							<div class="stats">
								<?= $descriptionAttack ?>
							</div>
						</div>

						<div class="skill">
							<div class="cellule_gif">
								<h2>- <?= $competence ?> -</h2>
								<img src="../img/gifDiluc/Diluc-E.gif">
								<p>Compétence</p>
							</div>
							<div class="stats">
								<?= $descriptionCompetence ?>
							</div>
						</div>

						<div class="skill">
							<div class="cellule_gif">
								<h2>- <?= $fury ?> -</h2>
								<img src="../img/gifDiluc/Diluc-Q.gif">
								<p>Déchaînement</p>
							</div>
							<div class="stats">
								<?= $descriptionFury ?>
							</div>
						</div>

						<div class="passif">
							<div class="cellule_gif">
								<h2>- <?= $passive1 ?> -</h2>
								<img src="../img/gifDiluc/Passif1.png">
								<p>Passif #1</p>
							</div>
							<div class="stats">
								<?= $descriptionPassive1 ?>
							</div>
						</div>

						<div class="passif">
							<div class="cellule_gif">
								<h2>- <?= $passive2 ?> -</h2>
								<img src="../img/gifDiluc/Passif2.png">
								<p>Passif #2</p>
							</div>
							<div class="stats">
								<?= $descriptionPassive2 ?>
							</div>
						</div>

						<div class="passif">
							<div class="cellule_gif">
								<h2>- <?= $passive3 ?> -</h2>
								<img src="../img/gifDiluc/Passif3.png">
								<p>Passif #3</p>
							</div>
							<div class="stats">
								<?= $descriptionPassive3 ?>
							</div>
						</div>
					</div>
				<div id="constellations"></div>
				</div>

				<!-- CONSTELLATIONS -->
				<div class="section">
					<div class="title_banner">
						<img class="title_logo" src="../img/UI_Mondstadt.png">
						<div class="name">
							<h1>CONSTELLATIONS</h1>
						</div>
					</div>
					<div class="description">
						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const1 ?> -</h2>
								<img src="../img/gifDiluc/Conste1.png">
								<p>Constellation #1</p>
							</div>
							<div class="stats">
								<?= $descriptionConste1 ?>
							</div>
						</div>

						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const2 ?> -</h2>
								<img src="../img/gifDiluc/Conste2.png">
								<p>Constellation #2</p>
							</div>
							<div class="stats">
								<?= $descriptionConste2 ?>
							</div>
						</div>

						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const3 ?> -</h2>
								<img src="../img/gifDiluc/Conste3.png">
								<p>Constellation #3</p>
							</div>
							<div class="stats">
								<?= $descriptionConste3 ?>
							</div>
						</div>

						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const4 ?> -</h2>
								<img src="../img/gifDiluc/Conste4.png">
								<p>Constellation #4</p>
							</div>
							<div class="stats">
								<?= $descriptionConste4 ?>
							</div>
						</div>

						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const5 ?> -</h2>
								<img src="../img/gifDiluc/Conste5.png">
								<p>Constellation #5</p>
							</div>
							<div class="stats">
								<?= $descriptionConste5 ?>
							</div>
						</div>

						<div class="constellation">
							<div class="cellule_gif">
								<h2>- <?= $const6 ?> -</h2>
								<img src="../img/gifDiluc/Conste6.png">
								<p>Constellation #6</p>
							</div>
							<div class="stats">
								<?= $descriptionConste6 ?>
							</div>
						</div>
					</div>
					<div id="build"></div>
				</div>

				<!-- BUILD -->
				<div class="section">
					<div class="title_banner">
						<img class="title_logo" src="../img/UI_Mondstadt.png">
						<div class="name">
							<h1>BUILD</h1>
						</div>
					</div>
					<div class="description description_build">
						<div class="talents">
							<h1>APTITUDES</h1>
							<div class="build_categories">
								<img src="../img/tome/TomeResistance.png">
								<img src="../img/tome/TomeResistanceSilver.png">
								<img src="../img/tome/TomeResistanceGold.png">
								<img src="../img/composants/RecruitInsignia.png" class="talents_secondary">
								<img src="../img/composants/SergInsignia.png" class="talents_secondary">
								<img src="../img/composants/LieutInsignia.png" class="talents_secondary">
								<img src="../img/composants/DvalinPlume.png" class="talents_secondary">
							</div>
						</div>

						<img src="../img/separateur_vertical.png" class="separateur_vertical">

						<div class="weapon">
							<h1>ARMES</h1>
							<div class="build_categories">
								<div class="weapon_categories"><img src="../img/weapon/Mort_du_loup.png"><p><?= $weapon1 ?></p></div>
								<div class="weapon_categories"><img src="../img/weapon/Fierte_Voûte.png"><p><?= $weapon2 ?></p></div>
								<div class="weapon_categories"><img src="../img/weapon/Ossature_dragon.png"><p><?= $weapon3 ?></p></div>
								<div class="weapon_categories"><img src="../img/weapon/Espadon_prototype.png"><p><?= $weapon4 ?></p></div>
							</div>
						</div>

						<div class="ascension">
							<h1>ASCENSIONS</h1>
							<div class="build_categories">
								<div class="ascension_gems">
									<img src="../img/gems/FireSliver.png">
									<img src="../img/gems/FireFragment.png">
									<img src="../img/gems/FireChunk.png">
									<img src="../img/gems/FireGem.png">
								</div>
								<img src="../img/composants/EverflameSeed.png">
								<img src="../img/composants/LampGrass.png">
								<img src="../img/composants/RecruitInsignia.png">
								<img src="../img/composants/SergInsignia.png">
								<img src="../img/composants/LieutInsignia.png">

							</div>
							
						</div>
						<div class="artefacts">
							<h1>ARTEFACTS CONSEILLÉS</h1>
							<div class="build_categories combinaison">
								<?= $artefact1Img ?> <p><?= $artefact1 ?></p><?= $artefact2Img ?> <p><?= $artefact2 ?></p>
							</div>
							<div class="build_categories">
								<div class="artefacts_categories"><img src="../img/artefacts/Plume.png"><p><?= $statPlume ?></p></div>
								<div class="artefacts_categories"><img src="../img/artefacts/Sand.png"><p><?= $statSand ?></p></div>
								<div class="artefacts_categories"><img src="../img/artefacts/Crown.png"><p><?= $statCrown ?></p></div>
								<div class="artefacts_categories"><img src="../img/artefacts/Goblet.png"><p><?= $statGoblet ?></p></div>
								<div class="artefacts_categories"><img src="../img/artefacts/Flower.png"><p><?= $statFlower ?></p></div>
								<p style="font-size: .7em;">- <?= $listPrioStat?> -</p>
							</div>
							
						</div>
					</div>
					<div id="recettes"></div>
				</div>

				<!-- RECETTES -->
				<div class="section">
					<div class="title_banner">
						<img class="title_logo" src="../img/UI_Mondstadt.png">
						<div class="name">
							<h1>RECETTES</h1>
						</div>
					</div>
					<div class="description">
						<div class="recettes">
							<div class="cellule_gif cellule_gif_recettes">
								<h2>- <?= $recetteBasic ?> -</h2>
								<?= $imgRecetteBasic ?>
								<p>Basique</p>
							</div>
							<div class="cellule_gif cellule_gif_recettes">
								<h2>- <?= $recetteSecrete ?> -</h2>
								<?= $imgRecetteSecrete ?>
								<p>Secrète</p>
							</div>
							<div class="stats stats_recettes">
								<?= $descriptionRecette ?>
							</div>
						</div>
					</div>
				</div>

</div>
			</div>
		</section>

</body>
</html>