<?php

if (isset($_COOKIE["teste"])) {
	echo $_COOKIE["teste"];
}
else{
	setcookie("teste", "teste", (time() + 30));	
}

exit;

//Inicializa sessoes
session_start();

//Incluindo o arquivo de conexao com o banco de dados
require_once("config/conexao_bd.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 2019</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<div class="container" id="cabecalho">
			
			<div class="jumbotron">
						
				<h1>Bem-vindo(a) ao meu site!</h1>

				<?php

				if(isset($_SESSION["nome_usuario"])){

					echo '<p>Olá '.$_SESSION["nome_usuario"].'!</p>';

				}

				?>

				<ul class="menu">
					<li><a class="btn btn-primary" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=listagem">Listagem</a></li>
					<li><a class="btn btn-primary" role="button" href="?pg=area_restrita">Área Restrita</a></li>
				</ul>

			</div>

		</div>

		<div class="container" id="corpo">

			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item" aria-current="page"><a href="?pg=inicio">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
			  </ol>
			</nav>

			<?php

				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				

				include("paginas/".$pagina.".php");

			?>
			
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos reservados.</h4>				

			</div>
			
		</div>


	</body>
</html>