<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

	if(!empty($_POST) ) {
		$test = 0;
		$monNom = $_POST["name"];
		echo "Bonjour " . $monNom;
		echo " ! <br>";

		if(!isset($_POST['name']) || empty($_POST['name']) ) {
			echo "Le champ nom est obligatoire.<br>";
			$test = 1;
		}
			elseif(!filter_var($_POST['name'], FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^[a-zA-Z]+[ -]{0,1}[a-zA-Z]+$/")))){
			echo "Ce n'est pas votre nom !<br>";
			$test = 1;
		}

		if(!isset($_POST['mail']) || empty($_POST['mail']) ) {
			echo "Le champ email est obligatoire.<br>";
			$test = 1;
		}
		elseif(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			echo "Votre adresse email n'est pas valide.<br>";
			$test = 1;
		}

		if(!isset($_POST['visit']) || empty($_POST['visit']) ) {
			echo "Le champ visite est obligatoire.<br>";
			$test = 1;
		}

		if (!isset($_POST["monmessage"]) || empty($_POST["monmessage"])) {
		     echo "Le champ message est obligatoire<br>";
		     $test = 1;
		}
		if ($test){
		    echo "Votre formulaire est erroné. Merci de bien vouloir recommencer. <br>";
		}
		else{
			echo "Votre message a bien été envoyé ! <br>";
		}

	}
	else{
		echo "Touchez pas à mon code !<br>";
	}
}

else{
	echo "Ce site est en POST. Ne touchez pas au code de la page.<br>";
}
?>
