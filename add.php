<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$ID_rec = $_POST['ID_rec'];
		$firstname = $_POST['firstname'];
		$Address = $_POST['Address'];
		$Phone = $_POST['Phone'];
		$Message_rec = $_POST['Message_rec'];
		$Email = $_POST['Email'];
		
		$sql = "INSERT INTO members (id, ID_rec, firstname, Address, Phone, Message_rec, Email ) VALUES ('$id', '$ID_rec', '$firstname', '$Address', '$Phone', '$Message_rec', '$Email' )";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>