<?php

$objetPdo = new PDO('mysql:host=mademoiselle-mysqldbserver.mysql.database.azure.com; dbname=blog','mysqldbuser@mademoiselle-mysqldbserver','Estiam1994');

$PdoStat = $objetPdo->prepare('SELECT * FROM abonnement');

//Requette d'execution
$executeOk = $PdoStat->execute();

//Récuperer les Abonnements

$abonnements = $PdoStat->fetchall();
?>
<!Doctype html>
<html lang="fr">
<head>
<title>Abonnements</title>
</head>

<body background="img/FE">
<h1> Liste des Abonnements </h1>
<ul>
    <?php foreach ($abonnements as $abo): ?>
    <li>
        <?= $abo['NOM'] ?> <?= $abo['PRENOM'] ?> - <?= $abo['DATEN'] ?> - <?= $abo['EMAIL'] ?> - <?= $abo['ADR'] ?> - <?= $abo['DATEF'] ?> - <?= $abo['ABN'] ?> - <?= $abo['TYPER'] ?> 

        <a href="Form_Modif.php?numABO=<?= $abo['ID'] ?>">Modifier</a>       
        <a href="Supression.php?numABO=<?= $abo['ID'] ?>">Supprimer</a>        
    </li> 
<?php endforeach; ?>
</ul>
   

</form>
</body>
</html>
