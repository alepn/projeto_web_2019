<?php

if (!isset($_SESSION["id_usuario"])) {
	header("Location: ?pg=login");
}

if ($_GET["logout"]) {
	session_destroy();
	header("Location: ?pg=inicio");
}


?>

<h1>Bem-vindo(a) <?= $_SESSION["nome_usuario"] ?></h1>
<h1>Você acessou a área restrita!</h1>
<p>
	<a href="?pg=area_restrita&logout=1">Sair</a>
</p>