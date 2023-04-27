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
            $evenementE->AjouterEvenement($evenement);
            header('Location:AfficherEvenement.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ajout evenements </title>
    <link rel="stylesheet" href="ajout.css">
       <!--<style>
		body {
			background-image: url("C:/Users/abdel/OneDrive/Bureau/template/Intro.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>!-->
   
</head>
<!--<body style="background-image:url('images/gifimage.gif');">!-->

    <body>
<button align="left"><a href="AfficherEvenement.php">Liste des evenements</a></button>
        <br>
    <hr>
    <h1 align="center"><font color="green">Ajout d'un evenement:</font></h1>
    

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" name="formEv" novalidate enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="IdEv"> Identifiant :
                    </label>
                </td>
                <td><input type="number" name="IdEv" placeholder="entrer identifiant" onkeyup="ValidationId()" id="IdEv"></td>
                <td >
                <p style="color: red" id="IdEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NomEv"> Nom :
                    </label>
                </td>
                <td><input type="text" name="NomEv" placeholder="entrer intitule" id="NomEv" onkeyup="ValidationNom()" maxlength="20"></td>
                <td >
                <p style="color: red" id="NomEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="DateEv">Date :
                    </label>
                </td>
                <td>
                    <input type="date" name="DateEv" placeholder="entrer date" id="DateEv">
                </td>
            
            </tr>
            <tr>
                <td>
                    <label for="LieuEv">Lieu :
                    </label>
                </td>
                <td><input type="text" name="LieuEv" placeholder="entrer adresse" id="LieuEv" maxlength="30"></td>
                <td >
                <p style="color: red" id="LieuEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="DureeEv">Duree :
                    </label>
                </td>
                <td>
                    <input type="number" name="DureeEv" placeholder="entrer duree en heures"id="DureeEv">
                </td>
                <td >
                <p style="color: red" id="DureeEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="OrganisateurEv">Organisateur :
                    </label>
                </td>
                <td>
                    <input type="text" name="OrganisateurEv" placeholder="entrer organisateur" onkeyup="ValidationOrganisateur()" id="OrganisateurEv">
                </td>
                <td >
                <p style="color: red" id="OrganisateurEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PrixEv">Prix :
                    </label>
                </td>
                <td>
                    <input type="number" name="PrixEv" placeholder="entrer prix des tickets en dt" onkeyup="ValidationPrix()" id="PrixEv">
                </td>
                <td >
                <p style="color: red" id="PrixEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CapaciteEv">Capacite :
                    </label>
                </td>
                <td>
                    <input type="number" name="CapaciteEv" placeholder="entrer capacite " onkeyup="ValidationCapacite()" id="CapaciteEv">
                </td>
                <td >
                <p style="color: red" id="CapaciteEr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="DescriptionEv">Description :
                    </label>
                </td>
                <td>
                <textarea name="DescriptionEv" placeholder="entrer description" id="DescriptionEv" cols="30" rows="10" ></textarea>
                </td>
                <td >
                <p style="color: red" id="DescriptionEr"></p>
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
    <p style="color: red" id="erreur"></p>

    <script src="../js/form.js"></script>
</body>

</html>
