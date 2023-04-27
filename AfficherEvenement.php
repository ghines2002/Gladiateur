<?php

include '../Controller/EvenementE.php';
    
$EvenementE = new EvenementE();
$liste = $EvenementE->Afficher();
?>
<html>

<head>
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <center>
        <h1><font color="violet">Liste des evenements:</font></h1>
        <h2>
            <a href="AjouterEvenement.php">Ajouter Evenement</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Duree</th>
            <th>Organisateur</th>
            <th>Prix</th>
            <th>Capacite</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($liste as $Evenement) {
        ?>
            <tr>
                <td><?= $Evenement['IdEv']; ?></td>
                <td><?= $Evenement['NomEv']; ?></td>
                <td><?= $Evenement['DateEv']; ?></td>
                <td><?= $Evenement['LieuEv']; ?></td>
                <td><?= $Evenement['DureeEv']; ?></td>
                <td><?= $Evenement['OrganisateurEv']; ?></td>
                <td><?= $Evenement['PrixEv']; ?></td>
                <td><?= $Evenement['CapaciteEv']; ?></td>
                <td><?= $Evenement['DescriptionEv']; ?></td>
                <td align="center">
                    <form method="POST" action="ModifierEvenement.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Evenement['IdEv']; ?> name="IdEv">
                    </form>
                </td>
                <td>
                    <a href="SupprimerEvenement.php?IdEv=<?php echo $Evenement['IdEv']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>