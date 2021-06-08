<?php 
	$characterName = 'xiao' ;

	$origine = "Adepte de Liyue";
	$weaponType = "Arme d'hast";
	$setArtefact = '2 Ombre de la Verte C';
	$setArtefact2 = '2 Gladiateurs'; 

	$attack = 'Coup de tourbillon';
	$competence = 'Cycle du vent lemniscatique';
	$fury = 'Fléau du mal';

	$passive1 = 'Dompteur de démons : Conquérant du mal ';
	$passive2 = "Dissolution d'éon : Chute des cieux";
	$passive3 = 'Transcendance : Contrôleur de gravité';

	$const1 = "Dissolution d'éon : Destructeur de mondes";
	$const2 = "Annihilation d'éon : Fleur du kaléidoscope";
	$const3 = 'Dompteur de démons : Déité de la colère';
	$const4 = 'Transcendance : Extinction de la souffrance';
	$const5 = "Evolution d'éon : Origine de l'ignorance";
	$const6 = 'Dompteur de démons : Gardien Yaksha';

	$weapon1 = 'Lance de Jade ailée';
	$weapon2 = 'Scion de la victoire';
	$weapon3 = 'Lance de Favonius';
	$weapon4 = 'Pique du croissant de lune';

	$artefact1 = '2 Ombre de la Verte C';
	$artefact1Img = '<img src="../img/Artefacts/Arte_Wind.png">';
	$artefact2 = '2 Gladiateurs';
	$artefact2Img = '<img src="../img/Artefacts/Arte_Gladiateur.png">';

	$statPlume = 'ATQ';
	$statSand = 'ATQ% <br> Énergie';
	$statCrown = 'DGT Crit <br> Taux crit ';
	$statGoblet = 'DGT Anemo <br>ATQ%';
	$statFlower = 'PV';
	$listPrioStat = 'DGT crit > Taux crit > ATQ% > Énergie > Maîtrise';

	$recetteBasic = 'Tofu aux amandes';
	$recetteSecrete = 'Beau songe';
	$imgRecetteBasic = '<img src="../img/recettes/tofuAuxAmandes.png">';
	$imgRecetteSecrete = '<img src="../img/recettes/beauSonge.png">';
?>

<?php ob_start(); ?>
	<p><img src="../img/UI_Wind.png"> Voix anglaise : <em>Laila Berzins</em></p>
	<p><img src="../img/UI_Wind.png"> Voix japonaise : <em>Yoshitsugu Matsuoka</em></p>
<?php $voiceContent = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Un des puissants Adeptes éclairés de Liyue, aussi connu sous le nom de <strong>"Yaksha gardien"</strong>.</p>
	<p>Bien qu'il ait l'apparence d'un jeune garçon, on retrouve de nombreuses légendes à son sujet dans des ouvrages littéraires vieux de plusieurs miliers d'années.</p>
<?php $descriptionProfil = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p><b>Attaque normale</b> : Enchaîne jusqu'à 6 coups de lance.</p>
	<p><b>Attaque chargée</b> : Consomme de l'endurance pour exécuter une attaque ascendante.</p>
	<p><b>Attaque descendante</b> : Plonge depuis les airs pour frapper le sol. Xiao ne subit pas de DGT lorsqu'il exécute une attaque descendante.</p>
	<p><b>Combo</b> : 27.54%*2 / 56.94% / 68.55% / 37.66%*2 / 71.54% / 95.83%<br/>
	<b>Chargée</b> : 121.09%<br/>
	<b>DGT durant la chute</b> : 81.83%<br/>
	<b>DGT Chute basse/élevée</b> : 163% / 204.39%</p>
<?php $descriptionAttack = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p>Xiao se précipite vers l'avant, infligeant des DGT Anémo aux ennemis sur sa route. Peut être utilisé dans les airs. Possède 2 charges.</p>
	<p><b>DGT compétence</b> : 252.8%<br>
	<b>TdR</b> : 10s</p>
<?php $descriptionCompetence = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Augmente la portée d'attaque et les DGT de Xiao, convertit les DGT physiques en DGT Anémo et augmente la hauteur de saut. Draine les PV de Xiao en continu. L'effet prend fin si Xiao est vaincu ou quitte le champ de bataille.</p>
	<p><b>DGT Bonus Attaque normale/Chargée</b> : 58.45%<br/>
	<b>Drain de vie</b> : 3%PV/s<br/>
	<b>Durée</b> : 15s<br/>
	<b>TdR</b> : 18s<br/>
	<b>Coût énergie</b> : 70</p>
<?php $descriptionFury = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p>Xiao inflige 5% de DGT supplémentaires tant que Fléau du mal est actif. Un cumul de 5% de DGT supplémentaires est ensuite appliqué toutes les 3s tant que dure la compétence. Cumul max : 25% de DGT supplémentaires.</p>
<?php $descriptionPassive1 = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Cycle du vent lemniscatique inflige 15% de DGT en plus lorsqu'il est relancé dans les 7s. Cet effet dure 7s et peut être cumulé 3 fois au maximum. Le délai est réinitialisé à chaque nouveau cumul.</p>
<?php $descriptionPassive2 = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Réduit la consommation d'endurance des personnages de l'équipe de 20% lors de l'escalade. Ne peut pas être cumulé avec d'autres aptitudes passives ayant les mêmes effets.</p>
<?php $descriptionPassive3 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Confère une charge supplémentaire pour Cycle du vent lemniscatique.</p>
<?php $descriptionConste1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>La recharge d'énergie de Xiao augmente de 25% lorsqu'il fait partie de l'équipe mais n'est pas déployé.</p>
<?php $descriptionConste2 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Niveau de compétence Cycle du vent lemniscatique +3. Niveau max : 15</p>
<?php $descriptionConste3 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Xiao bénéficie d'un bonus de DEF de 100% quand ses PV tombent en dessous de 50%.</p>
<?php $descriptionConste4 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Niveau de compétence Fléau du mal +3. Niveau max : 15</p>
<?php $descriptionConste5 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Lorsque Fléau du mal est actif, les attaques descendantes touchant au moins 2 ennemis confèrent immédiatement une charge de Cycle du vent lemniscatique supplémentaire, qui peut être activée dans la seconde qui suit, même s'il n'est pas entièrement rechargé..</p>
<?php $descriptionConste6 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p><b>Ingrédients</b> : 3 Laits | 1 Amande | 1 Tofu</p>
<p><b>Effet</b> : Augmente l'ATQ de tous les personnages de l'équipe de 114pts pendant 300s. Ne s'applique qu'à votre personnage en mode multijoueur</p>
<?php $descriptionRecette = ob_get_clean(); ?>


<?php require('../view/charactersLiyueTemplate.php');?>