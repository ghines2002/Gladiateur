cx<?php

include '../Controller/SponsorS.php';
    
$SponsorS = new SponsorS();
$liste = $SponsorS->AfficherSponsor();
?>
<html>
<head>
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <center>
        <h1><font color="violet">Liste des sponsors:</font></h1>
        <h2>
            <a href="AjouterSponsor.php">Ajouter Sponsor</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Type</th>
        </tr>
        <?php
             foreach ($liste as $Sponsor) {
                ?>
                    <tr>
                        <td><?= $Sponsor['idSponsor']; ?></td>
                         <td><?= $Sponsor['nomSponsor']; ?></td>
                        <td><?= $Sponsor['typeSponsor']; ?></td>
                        <td align="center">
                    <form method="POST" action="ModifierSponsor.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Sponsor['idSponsor']; ?> name="idSponsor">
                    </form>
                </td>
                <td>
                    <a href="SupprimerSponsor.php?idSponsor=<?php echo $Sponsor['idSponsor']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>