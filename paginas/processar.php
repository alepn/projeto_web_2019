<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if(isset($_GET["editar"]) && $_GET["editar"] != 0){
	$id = $_GET["editar"];
	$sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id = $id";
}
else{
	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
}

$query = mysqli_query($link, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>