<?php

if (isset($_POST["email"]) && isset($_POST["senha"])) {
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$query = mysqli_query($link, $sql);
	if($row = mysqli_fetch_assoc($query)){
		
		$_SESSION["id_usuario"] = $row["id"];
		$_SESSION["nome_usuario"] = $row["nome"];

		header("Location: ?pg=area_restrita");

	}
	else{
		echo "Usuário ou senha inválido!";
	}
	
}

?>

<h2>Login</h2>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">

		<form action="?pg=login" method="POST">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Senha</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</div>

	<div class="col-md-3">
	</div>
</div>