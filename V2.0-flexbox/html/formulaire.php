<?php
if ( !empty($_POST) ) {
	if( !isset ($_POST['nom']) || empty($_POST['nom']) ) {
		echo "Le champ nom est obligatoire.";
	}
	elseif( !isset ($_POST['prenom']) || empty($_POST['prenom']) ) {
		echo "Le champ prénom est obligatoire.";
	}
	elseif( !isset ($_POST['email']) || empty($_POST['email']) ) {
		echo "Le champ email est obligatoire.";
	}
	elseif( !isset ($_POST[('text']) || empty($_POST['text']) ) {
		echo "Le champ description est obligatoire.";
	}
}


?>