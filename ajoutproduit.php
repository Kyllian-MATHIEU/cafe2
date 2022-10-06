<?php


$nomProduit = $_REQUEST["nomProduit"];
$descriptionProduit = $_REQUEST["descriptionProduit"];
$puht = $_REQUEST["puht"];
$tauxTVA = $_REQUEST["tauxTVA"];


$bdd = new PDO('mysql:host=127.0.0.1;dbname=cafe2;charset=utf8', 'root', '');


$reqTxt = "INSERT INTO `produit`( `nomProduit`, `DescriptionProduit` , `puht` , `tauxTVA`) 
VALUES ( :nomCategorie  , :descriptionCategorie , :descriptionProduit , :puht , :tauxTVA )";


$reqBDD = $bdd->prepare($reqTxt);

$nom =;
$etat = $reqBDD->execute(array(
    'Nom' => $nomProduit,
    'Description' => $descriptionProduit,
    'puht' => $puht,
    'tauxTVA' => $tauxTVA,


));
//$etat : variable stockant l'issue de la requête

//Affichage du résultat de la requête :
if ($etat) {
    echo " 
Produit ajoutée !
";
} else {
    echo 'archtung !!';
}











<?php
