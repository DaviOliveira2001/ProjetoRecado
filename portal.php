<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/portal.css">
    <title>Portal</title>
</head>
<body> 
    <header><h1>Portal do Usuário</h1></header>
    
    <div class="cabecalho">
        <div class="botao">
            <button><a href="formRecado.php">Add Recado</a></button>
            <button><a href="perfil.php">Perfil</a></button>
            <button><input type="submit" id="sair" name="sair" value="Sair"></button>
        </div>
    </div>
    <?php
    if(empty($_POST) || (empty($_POST["recado"])) || (empty($_POST["data"])) || (empty($_POST["email"])) || (empty($_POST["senha"]))){
        print("<script>alert('Preencha os campos do formulário.');

        location.href='formRecado.php';</script>");
   }
    $recado = $_POST["recado"];
    $data = $_POST["data"];

    echo"<div class='container'>";
    if($recado != null){
        echo"ID: ".$id." <br>";
        echo"Recado: ".$recado." <br>";
        echo"Data: ".$data." <br>";
        echo"<button>Editar</button>";
        echo"<button>Excluir</button>";
    }
    echo"</div>";
    ?>

    
</body>
</html>