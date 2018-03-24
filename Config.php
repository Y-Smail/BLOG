<?php
session_start();
try{
   $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
   $db=new PDO('mysql:host=127.0.0.1; dbname=blog','root','');
   $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // mettre les noms des champs en maj
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch(PDOException $e){
    die ('Erreur : '.$e->getMessage());
}
?>