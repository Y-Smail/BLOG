<?php
// Connection a la BDD 'Cloud'
$objetPdo = new PDO('mysql:host=localhost;dbname=blog','root','');
$PdoStat = $objetPdo->prepare('SELECT * FROM abonnement WHERE ID = :N');

$PdoStat->bindValue(':N', $_GET['numABO'], PDO::PARAM_INT);

// exec requéte 
$executeOk = $PdoStat->execute();

//récuperer l'abonnement 
$abonnement = $PdoStat->fetch();

?>

<!doctype html>
<html>
<head>
<title> Modifications</title>
</head>

<body background="img/FE">
 <h1> Modifier un Abonnement </h1>
 <form method="post" action="Modif.php">
 <input type="hidden" name="numABO" Value="<?= $abonnement['ID'] ?>" > 

 Nom <br/> <input type="text"  name="Nom" id="Nom" Value="<?= $abonnement['NOM']; ?>"/><br/><br />
 Prenom <br/> <input type="text"  name="Prenom" id="Prenom" Value="<?= $abonnement['PRENOM']; ?>"/><br/><br />
 Date de Naissance  <br/> <input type="date"  name="DateN" id="DateN" Value="<?= $abonnement['DATEN']; ?>"/><br/><br />
 Email<br/> <input type="email" name="Email" id="Email" Value="<?= $abonnement['EMAIL']; ?>"/><br/><br />
 Adresse <br/> <input type="text" name="Adr" id="Adr" Value="<?= $abonnement['ADR']; ?>"/><br/><br />
 Date de fin Abonnement :<br/> <input type="date"  name="DateF" id="DateF" Value="<?= $abonnement['DATEF']; ?>" /><br/><br />
 Abonnement Actif  : 
        <label><input name="ABN" type="radio"   value="oui" / checked="checked" Value="<?= $abonnement['ABN']; ?>">Oui </label>
        <label><input name="ABN" type="radio" value="non"  Value="<?= $abonnement['ABN']; ?>" />Non</label><br/><br />
 Type Renouvelement <br/> 
 <select name="TypeR" id="Type" Value="<?= $abonnement['TYPER']; ?>">
    <option value="none">Veuillez choisir une option</option>
    <option value="auto">Automatique</option>
    <option value="manuel">Manuel</option>
</select></br><br />
 
 <input type ="submit" value="Enregistrer les modifications" />
 <input type="reset" value="Reinitialiser" />
 </form>
 
</body>
</html>

</form>
</body>
</html>