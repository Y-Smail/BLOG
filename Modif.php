<?php
// Connection a la BDD 'Cloud'
require('Config.php');

$modif = $db->prepare('UPDATE abonnement SET NOM=?, PRENOM=?, DATEN=?, EMAIL=?, ADR=?, DATEF=?, ABN=?, TypeR=? WHERE ID =? LIMIT 1');


// exec requéte 
$modif->execute(array('',$_POST['Nom'],$_POST['Prenom'],$_POST['DateN'],$_POST['Email'],$_POST['Adr'],$_POST['DateF'],$_POST['ABN'],$_POST['TypeR']));

$ok = $modif->execute();
// Conditions
if($ok){
    $message = 'Abonnement modifier';

}
else {
    $message = 'Echec de Modification'; 
}

?>
<!Doctype html>
<html lang="fr">
<head>
<title>Modification : résultat</title>
</head>

<body background="img/FE">
<h1> Modification </h1>

<p><?= $message ?></p>

</form>
</body>
</html>