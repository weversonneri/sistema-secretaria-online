<?php 
	//Não permite que usário entrem na página sem fazer login
	include_once '../templates/includes/header.php'; 
	
	if(!isset($_SESSION['usuario_logado']))	
		header("Location: ../../index.php");

?>




<h1>DashBoard</h1>




<?php include_once '../templates/includes/footer.php'; ?>