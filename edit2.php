<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$Idrep = $_POST['Idrep'];
		$id_reclamation = $_POST['id_reclamation'];
		$sujet = $_POST['sujet'];
		$Msg = $_POST['Msg'];
		
	
		$sql = "UPDATE reponse SET Idrep = '$Idrep', id_reclamation = '$id_reclamation', sujet = '$sujet', Msg = '$Msg' WHERE Idrep = '$Idrep'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Reponse updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Reponse updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Reponse';
		}
	}
	else{
		$_SESSION['error'] = 'Select Reponse to edit first';
	}

	header('location: Responses.php');

?>