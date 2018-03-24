<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Ajout-Abonnements</title>
</head>

<body background="img/FE">
 <h1> Ajouter un Abonnement </h1>
 <form method="post" action="insertion.php">
 Nom <br/> <input type="text"  name="Nom" id="Nom"/><br/><br />
 Prenom <br/> <input type="text"  name="Prenom" id="Prenom"/><br/><br />
 Date de Naissance  <br/> <input type="date"  name="DateN" id="DateN"/><br/><br />
 Email<br/> <input type="email" name="Email" id="Email"/><br/><br />
 Adresse <br/> <input type="text" name="Adr" id="Adr"/><br/><br />
 Date de fin Abonnement :<br/> <input type="date"  name="DateF" id="DateF" /><br/><br />
 Abonnement Actif  : 
        <label><input name="ABN" type="radio"   value="oui" / checked="checked">Oui</label>
        <label><input name="ABN" type="radio" value="non" />Non</label><br/><br />
 Type Renouvelement <br/> 
 <select name="TypeR" id="Type">
    <option value="none">Veuillez choisir une option</option>
    <option value="auto">Automatique</option>
    <option value="manuel">Manuel</option>
</select></br><br />
 
 <input type ="submit" value="Enregistrer" />
 <input type="reset" value="Reinitialiser" />
 </form>
 
</body>
</html>