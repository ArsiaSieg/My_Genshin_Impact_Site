<?php 
	$characterName = 'diluc' ;

	$origine = "Domaine de l'Aurore";
	$weaponType = 'Claymore';
	$setArtefact = '4 sorcière des Flammes ardentes'; 

	$attack = 'Épée trempée';
	$competence = 'Assaut brûlant';
	$fury = 'Aurore';

	$passive1 = 'Impitoyable';
	$passive2 = 'Bénédiction du phénix';
	$passive3 = "Légende de l'aurore";

	$const1 = 'Conviction';
	$const2 = 'Chaleur des cendres';
	$const3 = 'Feu et acier';
	$const4 = 'Flamme courante';
	$const5 = "Phénix, Messager de l'aube";
	$const6 = "L'épée des flammes brise-nuit";

	$weapon1 = 'Mort du Loup';
	$weapon2 = "Fierté de la Voûte d'Azur";
	$weapon3 = 'Ossature du dragon';
	$weapon4 = 'Espadon (prototype)';

	$artefact1 = '4 sorcière de la Flamme ardentes';
	$artefact1Img = '<img src="../img/Artefacts/Arte_Sorciere.png">';
	$artefact2 = '';
	$artefact2Img = '';

	$statPlume = 'ATQ';
	$statSand = 'ATQ%';
	$statCrown = 'Taux Crit <br> DGT crit ';
	$statGoblet = 'DGT Pyro';
	$statFlower = 'PV';
	$listPrioStat = 'Taux crit > DGT crit > ATQ% > Maîtrise > Énergie';

	$recetteBasic = "Empil'tout";
	$recetteSecrete = 'Le passé de Mondstadt';
	$imgRecetteBasic = '<img src="../img/recettes/empilTout.png">';
	$imgRecetteSecrete = '<img src="../img/recettes/passeDeMondstadt.png">';
?>

<?php ob_start(); ?>
	<p><img src="../img/UI_Fire.png"> Voix anglaise : <em>Sean Chiplock</em></p>
	<p><img src="../img/UI_Fire.png"> Voix japonaise : <em>Kensho Ono</em></p>
<?php $voiceContent = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p> Étant l'homme le plus riche de Mondstadt, Diluc se présente toujours comme un jeune homme élégant et charmant, à l'image publique parfaite.</p>
	<p>Sous ce masque se cache <strong>un guerrier à la volonté de fer</strong> forgée dans les flemmes qui ne recule devant rien pour protéger Mondstadt. Ne comptez pas sur lui pour ménager ses adversaires, il sera sans pitié jusqu'à la fin.</p>
<?php $descriptionProfil = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p><b>Attaque normale</b> : Enchaîne jusqu'à 4 coups d'épée.</p>
	<p><b>Attaque chargée</b> : Succession d'entailles circulaires qui se termine sur un coup puissant.</p>
	<p><b>Combo</b> : 89,7% / 87,6% / 98,8% / 134%<br/>
	<b>Chargée circulaire</b> : 68,8%<br/>
	<b>Chargée finale</b> : 125%<br/>
	<b>Durée max</b> : 5s<br/>
	<b>DGT durant la chute</b> : 89,5%<br/>
<b>DGT Chute basse/élevée</b> : 179% / 224%</p>
<?php $descriptionAttack = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p>Inflige des DGT Pyro d'un coup de longue épée. Peut être exécutée 3 fois d'affilée.</p>
	<p><b>DGT compétence</b> : 94,4% / 97,6% / 129%<br>
	<b>TdR</b> : 10s</p>
<?php $descriptionCompetence = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Provoque une explosion de flammes qui repousse les ennemis, avant de converger sur son épée, pour renaître en un phénix qui inflige d'importants DGT Pyro aux ennemis sur sa route.</p>
	<p><b>DGT Explosion</b> : 204%<br/>
	<b>DGT d'épée</b> : 198%<br/>
	<b>DGT continus </b>: 60%<br/>
	<b>TdR</b> : 12s<br/>
	<b>Durée Explosion</b> : 8s<br/>
	<b>Coût énergie</b> : 40</p>
<?php $descriptionFury = ob_get_clean(); ?>


<?php ob_start(); ?>
	<p>Les attaques chargées de Diluc consomment 50% d'endurance en moins, et durent 3s de plus.</p>
<?php $descriptionPassive1 = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Prolonge l'enchantement Pyro d'Aurore de 4s. Diluc inflige 20% de DGT Pyro supplémentaires pendant la durée de cet effet.</p>
<?php $descriptionPassive2 = ob_get_clean(); ?>

<?php ob_start(); ?>
	<p>Lorsque vous forgez une épée à deux mains, 15% du minerai utilisé vous sera rendu.</p>
<?php $descriptionPassive3 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Diluc inflige 15% de DGT supplémentaires aux ennemis ayant plus de 50% de leurs PV.</p>
<?php $descriptionConste1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>L'ATQ de base de Diluc augmente de 10% et sa VIT d'attaque de 5% lorsqu'il subit des DGT. 3 cumuls max. Cet effet peut être déclenché une fois toutes les 1,5s.</p>
<?php $descriptionConste2 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Niveau de compétence Assaut Brûlant +3. Niveau max : 15</p>
<?php $descriptionConste3 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Exécuter Assaut brûlant en rythme augmente considérablement les DGT infligés. L'Assaut brûlant suivant un premier Assaut brûlant inflige 40% de DGT supplémentaires pendant 2s lorsqu'il est exécuté dans les 2s.</p>
<?php $descriptionConste4 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>Niveau de compétence Aurore +3. Niveau max : 15</p>
<?php $descriptionConste5 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p>La VIT des 2 attaques normales suivant Assaut brûlant augmente de 30% ; ces attaques infligent de plus 30% de DGT supplémentaires. Assaut brûlant ne réinitialise plus les enchaînements d'attaques normales.</p>
<?php $descriptionConste6 = ob_get_clean(); ?>

<?php ob_start(); ?>
<p><b>Ingrédients</b> : 3 Viandes crue | 3 Pommes de terre | 1 Fromage | 1 Herbe à lampe</p>
<p><b>Effet</b> : Augmente le taux de CRIT et les DGT CRIT de tous les personnages de l'équipe de 20% pendant 300s. Ne s'applique qu'a votre personnage en mode multijoueur.</p>
<?php $descriptionRecette = ob_get_clean(); ?>


<?php require('../view/charactersMondstadtTemplate.php');?>