
<?php 
	session_start();
	if(isset($_SESSION['usuario'])){


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Início</title>
	<?php require_once "menu.php" ?>
</head>
<body>
Página inicial
</body>
</html>


<?php 
} else{
	header("location:../index.php");
}

 ?>
