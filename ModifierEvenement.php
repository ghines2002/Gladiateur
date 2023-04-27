<?php

include '../Controller/EvenementE.php';

$error = "";

// create event
$evenement = null;

// create an instance of the controller
$evenementE = new EvenementE();
if (
    isset($_POST["IdEv"]) &&
    isset($_POST["NomEv"]) &&
    isset($_POST["DateEv"]) &&
    isset($_POST["LieuEv"]) &&
    isset($_POST["DureeEv"]) &&
    isset($_POST["OrganisateurEv"]) &&
    isset($_POST["PrixEv"]) &&
    isset($_POST["CapaciteEv"]) &&
    isset($_POST["DescriptionEv"])
    
) {
    if (
        !empty($_POST['IdEv']) &&
        !empty($_POST["NomEv"]) &&
        !empty($_POST["DateEv"]) &&
        !empty($_POST["LieuEv"]) &&
        !empty($_POST["DureeEv"]) &&
        !empty($_POST["OrganisateurEv"]) &&
        !empty($_POST["PrixEv"]) &&
        !empty($_POST["CapaciteEv"]) &&
        !empty($_POST["DescriptionEv"])
    ) {
        $id=$_POST['IdEv'];
        $nom=$_POST['NomEv'];
         //$date=$_POST['DateEv'];
        $date = DateTime::createFromFormat('Y-m-d', $_POST['DateEv']);
        $lieu=$_POST['LieuEv'];
        $duree=$_POST['DureeEv'];
        $organisateur=$_POST['OrganisateurEv'];
        $prix=$_POST['PrixEv'];
        $capacite=$_POST['CapaciteEv'];
        $description=$_POST['DescriptionEv'];
        $evenement = new Evenement($id,$nom,$date,$lieu,$duree,$organisateur,$prix,$capacite,$description);
        $evenementE->ModifierEvenement($evenement,$id);
        header('Location:AfficherEvenement.php');
    } else
        $error = "Missing information";
}


?>

  
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier evenements</title>
    <link rel="stylesheet" href="ajout.css">
</head>

<body>
<button align="left"><a href="AfficherEvenement.php">Liste des evenements</a></button>
        <br>
    <hr>
    <h1 align="center"><font color="green">Modification d'un evenement:</font></h1>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['IdEv'])) {
     $evenement = $evenementE->RechercherEvenement($_POST['IdEv']);

    ?>

<form action="" method="POST" novalidate enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="IdEv"> Identifiant :
                    </label>
                </td>
                <td><input type="number" name="IdEv" id="IdEv" value="<?= ($evenement !== NULL)? $evenement["IdEv"]: ""; ?>" ></td>
            </tr>
            <tr>
                <td>
                    <label for="NomEv"> Nom :
                    </label>
                </td>
                <td><input type="text" name="NomEv" value="<?= ($evenement !== NULL)? $evenement["NomEv"]: ""; ?>" id="NomEv" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="DateEv">Date :
                    </label>
                </td>
                <td>
                    <input type="date" name="DateEv" value="<?= ($evenement !== NULL)? $evenement["DateEv"]: ""; ?>" id="DateEv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LieuEv">Lieu :
                    </label>
                </td>
                <td><input type="text" name="LieuEv" value="<?= ($evenement !== NULL)? $evenement["LieuEv"]: ""; ?>" id="LieuEv" maxlength="30"></td>
            </tr>
            <tr>
                <td>
                    <label for="DureeEv">Duree :
                    </label>
                </td>
                <td>
                    <input type="number" name="DureeEv" value="<?= ($evenement !== NULL)? $evenement["DureeEv"]: ""; ?>" id="DureeEv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="OrganisateurEv">Organisateur :
                    </label>
                </td>
                <td>
                    <input type="text" name="OrganisateurEv" value="<?= ($evenement !== NULL)? $evenement["OrganisateurEv"]: ""; ?>" id="OrganisateurEv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PrixEv">Prix :
                    </label>
                </td>
                <td>
                    <input type="number" name="PrixEv" value="<?= ($evenement !== NULL)? $evenement["PrixEv"]: ""; ?>" id="PrixEv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CapaciteEv">Capacite :
                    </label>
                </td>
                <td>
                    <input type="number" name="CapaciteEv" value="<?= ($evenement !== NULL)? $evenement["CapaciteEv"]: ""; ?>"  id="CapaciteEv">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="DescriptionEv">Description :
                    </label>
                </td>
                <td>
                <input type="text" name="DescriptionEv" value="<?= ($evenement !== NULL)? $evenement["DescriptionEv"]: ""; ?>" id="DescriptionEv" maxlength="500" >
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>