<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/perfil.css">
    <title> Editar Perfil </title>

</head>
<body>
    <!--
              <div class="wrapper">  
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
    </div>
 
    -->
    <h1> Adicionar Recado </h1>
    
        
    <div class="fm">
        <form action="portal.php" method="post">

            <div id="sg"> <label for="mensagem"> Recado </label> </div>
            <textarea id="recado" name="recado" rows="5" cols="50">

            </textarea>

        </form>
    </div>

    <div id="dt"> <label for="data"> Data </label> </div>
    <div class="dia"> <input type="date"> </div>


    <div class="botao1">
        <input type="submit" id="enviar">
    </div>
    <div class="botao2">
        <button id="btnCancelar">Cancelar</button>
    </div>
    
    <script src="perfil.js"></script>

</body>
</html>