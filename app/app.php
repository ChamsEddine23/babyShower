<?php
if (isset($_POST['prenom'])){
	$prenom = htmlspecialchars($_POST['prenom']);
	$insererPrenom = $bdd->prepare("INSERT INTO votes (prenom) VALUES (?)");
	$insererPrenom->execute(array($prenom));
}
?>
