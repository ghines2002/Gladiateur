<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['Idrep'])){
		$sql = "DELETE FROM reponse WHERE Idrep = '".$_GET['Idrep']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Reponse deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Reponse deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Reponse';
		}
	}
	else{
		$_SESSION['error'] = 'Select Reponse to delete first';
	}

	header('location: Responses.php');
?>