<?php
	$mail = (isset($_POST["content"])) ? $_POST["content"] : NULL;
	$adresse = (isset($_POST["mail"])) ? $_POST["mail"] : NULL;
	$objet = (isset($_POST["objet"])) ? $_POST["objet"] : NULL;

	if($adresse && $objet && $mail) {


		$to = "sumbobyboys@gmail.com";

		//On envoie un mail
		$header = "From:".$adresse." <".$adresse.">\n";
		$header .= 'Content-type: text/html; charset=UTF-8';
		$subject = $objet;



		$contenu = nl2br($mail);

		mail($to,$subject,$contenu,$header);
		?>



		<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Votre Mail a bien été envoyé</title>

		<!-- Page sur lequel nous retournons après l'affichage du message -->
		<meta http-equiv="refresh" content="4; url=./">
		<script type='text/javascript' src='./google.js'></script>
	</head>
	<body>




				<h1>Mail envoyé !</h1>
				<p>Votre message nous a bien été transmit, nous y répondrons dans les plus brefs délais.</p>

	</body>
</html>



		<?php

	} else {

?>

		<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Erreur lors de l'envoi du mail</title>

		<!-- Page sur lequel nous retournons après l'affichage du message -->
		<meta http-equiv="refresh" content="4; url=./">
		<script type='text/javascript' src='./google.js'></script>
	</head>
	<body>




				<h1>Erreur</h1>
				<p>Une erreur est survenue, vous allez être redirigé vers l'accueil du site</p>

	</body>
</html>

<?php
	}
?>