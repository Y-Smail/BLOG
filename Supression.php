<?php
// Connection a la BDD 'Cloud'
$objetPdo = new PDO('mysql:host=mademoiselle-mysqldbserver.mysql.database.azure.com; dbname=blog','mysqldbuser@mademoiselle-mysqldbserver','Estiam1994');

// Req
$PdoStat = $objetPdo->prepare('DELETE FROM abonnement WHERE ID=:N LIMIT 1');

$PdoStat->bindValue(':N', $_GET['numABO'], PDO::PARAM_INT);

$executeOk = $PdoStat->execute();

if($executeOk){
    $message = 'Abonnement suprrimé';

}
else {
    $message = 'Echec de Supression'; 
}
?>
<!Doctype html>
<html lang="fr">
<head>
<title>Abonnements</title>
</head>

<body background="https://bimages.blob.core.windows.net/fond/FE.jpg">
<h1> Supression </h1>

<p><?= $message ?></p>

</form>
</body>
</html>
