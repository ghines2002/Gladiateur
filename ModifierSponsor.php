<?php

include '../Controller/SponsorS.php';

$error = "";

// create event
$sponsor = null;

// create an instance of the controller
$sponsorS = new SponsorS();
if (
    isset($_POST["idSponsor"]) &&
    isset($_POST["nomSponsor"]) &&
    isset($_POST["typeSponsor"]) 
   
    
) {
    if (
        !empty($_POST['idSponsor']) &&
        !empty($_POST["nomSponsor"]) &&
        !empty($_POST["typeSponsor"]) 
      
    ) {
       
            $id=$_POST['idSponsor'];
            $nom=$_POST['nomSponsor'];
            $type=$_POST['typeSponsor'];
            $sponsor = new Sponsor($id,$nom,$type);
            $sponsorS->AjouterSponsor($sponsor);
            header('Location:AfficherSponsor.php');
    } else
        $error = "Missing information";
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> modifier sponsors </title>
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
<button align="left"><a href="AfficherSponsor.php">Liste des sponsors</a></button>
        <br>
    <hr>
    <h1 align="center"><font color="green">modification d'un sponsor:</font></h1>
    

    <div id="error">
        <?php echo $error; ?>
    </div>
    <?php
    if (isset($_POST['idSponsor'])) {
     $sponsor = $sponsorS->RechercherSponsor($_POST['idSponsor']);
         ?>
 <form action="" method="POST" name="formSp" novalidate enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="idSponsor"> Identifiant :
                    </label>
                </td>
                <td><input type="number" name="idSponsor" placeholder="entrer l'identifiant" onkeyup="ValidationId()" id="idSponsor"></td>
                <td >
              
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nomSponsor"> Nom :
                    </label>
                </td>
                <td><input type="text" name="nomSponsor" placeholder="entrer intitule" id="nomSponsor" onkeyup="ValidationNom()" maxlength="20"></td>
                <td >
            
                </td>
            </tr>
            <tr>
                <td>
                    <label for="typeSponsor">type :
                    </label>
                </td>
                <td>
                    <input type="text" name="typeSponsor" placeholder="entrer le type" id="typeSponsor">
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