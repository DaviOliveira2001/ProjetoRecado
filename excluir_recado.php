<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: recado.php");
	exit();
}

// conectar-se ao banco de dados
include("config.php");

// verificar se o usuário confirmou a exclusão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["confirmacao"] == "sim") {
		// excluir o recado do banco de dados
		$id = $_SESSION["id"];
		$sql = "DELETE FROM tbrecado WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			echo "Recado excluído com sucesso";
			header("Location: portal.php");

		} else {
			echo "Erro ao excluir recado: " . mysqli_error($conn);
		}

	}
}

// exibir a mensagem de confirmação
?>


<!DOCTYPE html>
<html>
<head>
	<title>Excluir recado</title>
	<link rel="stylesheet" href="./excluir_recado.css">
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h1>Excluir recado</h1>
	<p>Tem certeza que deseja excluir o recado da sua conta?</p>
		<input type="radio" name="confirmacao" value="sim">Sim<br>
		<input type="radio" name="confirmacao" value="nao" checked>Não<br>
		<br>
		<input class="botao" type="submit" name="submit" value="Excluir">
		<br><br>
		<button class="botao"><a  href="./portal.php" >Voltar</a></button>
	</form>
</body>
</html>