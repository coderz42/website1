<?php

$pageTitle = "Home";
include('includes/header.php');

// echo $_SESSION["login"];
if( isset($_SESSION["login"])=="" ){
	header("Location: login.php");
	exit;
}else{
	header("Location: admin/");
}

?>

<?php include('includes/footer.php'); ?>