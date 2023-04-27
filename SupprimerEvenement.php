<?php
include '../Controller/EvenementE.php';
$EvenementE = new EvenementE();
$EvenementE->SupprimerEvenement($_GET["IdEv"]);
header('Location:AfficherEvenement.php');
?>