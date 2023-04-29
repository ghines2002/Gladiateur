<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$Idrep = $_POST['Idrep'];
		$id_reclamation = $_POST['id_reclamation'];
		$sujet = $_POST['sujet'];
		$Msg = $_POST['Msg'];
		
		$sql = "INSERT INTO Reponse (Idrep, id_reclamation,sujet, Msg ) VALUES ('$Idrep', '$id_reclamation', '$sujet', '$Msg' )";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Reponse added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Reponse added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Responses.php');
?>