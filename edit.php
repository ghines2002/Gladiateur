<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$ID_rec = $_POST['ID_rec'];
		$firstname = $_POST['firstname'];
		$Address = $_POST['Address'];
		$Phone = $_POST['Phone'];
		$Message_rec = $_POST['Message_rec'];
		$Email = $_POST['Email'];
	
		$sql = "UPDATE members SET id = '$id', ID_rec = '$ID_rec', firstname = '$firstname', Address = '$Address', Phone = '$Phone', Message_rec = '$Message_rec', Email = '$Email' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>