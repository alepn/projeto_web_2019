<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

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