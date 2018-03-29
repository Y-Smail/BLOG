<?php
// connecter a la bdd

require('Config.php');


// requete insertion

$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$DateN=$_POST['DateN'];
$Email=$_POST['Email'];
$DateF=$_POST['DateF'];
$ABN=$_POST['ABN'];
$TypeR=$_POST['TypeR'];
$Adr=$_POST['Adr'];
$insert=$db->prepare("INSERT INTO abonnement(Nom, Prenom, DateN, Email, Adr, DateF, ABN, typeR) VALUES(?,?,?,?,?,?,?,?) ");
$insert->execute(array($Nom,$Prenom,$DateN,$Email,$Adr,$DateF,$ABN,$TypeR));


//Exécution de la requete 
if($insert){
	echo ('Un abonnement a été ajouté');
}
else {
	echo ('Echec');
} 
?>
<!Doctype html>
<html lang="fr">
<head>
<title>Abonnements</title>
</head>

<body background="https://bimages.blob.core.windows.net/fond/FE.jpg">



</form>
</body>
</html>

