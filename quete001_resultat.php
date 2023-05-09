<?
session_start();
include "verification.php";

// On récupère la valeur du choix du joueur
$choix = $_POST['action'];

// En fonction du choix, on affiche un message différent
switch ($choix) {
	case 'attaquer':
		$message = "Vous avancez rapidement vers le buisson, en brandissant votre épée.<br/> " .
			"Des gobelins sont surpris par cette attaque soudaine et tentent de riposter. <br/>" .
			"Vous réussissez à en éliminer quelques-uns, mais vous êtes vite submergé par le nombre et la force de vos ennemis." .
			"Alors que vous tentez de parer un coup de hache, vous êtes désarmé et vous vous retrouvez à terre, " .
			"vulnérable. <br/>Les gobelins en profitent pour le rouer de coups, jusqu'à ce que vous ne bougiez plus.<br/>" .
			"Le silence retentit dans la forêt, ponctué uniquement par les cris de victoire des gobelins." .
			"<p class='surbrillance'>Vous avez échoué dans votre quête et perdu la vie dans l'aventure.</p>";
		break;
	case 'approcher':
		$message = "Lorsque vous vous approchez lentement du buisson, vous remarquez que quelque chose bouge derrière.<br/> Vous décidez alors de continuer à avancer pour en avoir le cœur net. <br/>
		Soudain, une créature surgit du buisson et vous attaque. <br/>Vous essayez de vous défendre mais elle est trop forte et vous finissez par succomber à vos blessures. <br/>Vous réalisez trop tard que la créature était un loup-garou, une bête redoutable capable de se transformer en un monstre sanguinaire les soirs de pleine lune. <br/>Malheureusement pour vous, c'était précisément le cas ce soir-là" .
			"<p class='surbrillance'>Vous avez échoué dans votre quête et perdu la vie dans l'aventure.</p>";
		break;
	case 'fuir':
		$message = "Vous décidez de fuir le champ de bataille et de courir le plus vite possible dans la direction opposée. <br/><br/>
		Votre coeur bat la chamade et vous êtes à bout de souffle lorsque vous vous arrêtez enfin pour reprendre votre souffle.<br/>
		C'est alors que vous entendez un bruit sourd derrière vous. <br/>
		Vous vous retournez pour voir un énorme rocher qui vous fonce dessus. <br/>
		Vous n'avez pas le temps de réagir et le rocher vous écrase sur place.<br/><br/>
		<span class='surbrillance'>Vous réalisez que vous êtes mort, et que votre aventure s'arrête ici.</span> <br/><br/>
		Vous repensez à toutes les décisions que vous avez prises jusqu'à présent et vous vous demandez si vous auriez pu faire quelque chose de différent pour éviter cette fin tragique.<br/>
		Malheureusement, il est trop tard pour regretter et vous êtes condamné à errer éternellement dans le monde des morts, sans jamais pouvoir terminer votre quête et sauver le village de Brennac.";
		break;
	default:
		$message = "Vous n'avez pas sélectionné d'action !";
		break;
}
include "header.php";
?>
<!DOCTYPE html>
<html>



<body>
	
	<div id="wrapper">
		<main>
			<h2>La quête de Brennac</h2>
			<p> <?= $message ?> </p>
			<a href="perdu.php">Fin</a>
		</main>
	</div>
	<footer>
	<?php include "footer.php"; ?>
	</footer>
</body>

</html>