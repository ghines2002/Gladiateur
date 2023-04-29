<?php
include '../Controller/SponsorS.php';
$SponsorS = new SponsorS();
$SponsorS->SupprimerSponsor($_GET["idSponsor"]);
header('Location:back.php');
?>


