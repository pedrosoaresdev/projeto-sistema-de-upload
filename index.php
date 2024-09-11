<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Soares - Upload de Arquivo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid mt -3">
    <center><img src="imagens/Logo-Pedro-Soares-Dev.png" width="400"</center>  

        <h2>UPLOAD DE ARQUIVOS</h2>
        <div class="card">
        <div class="card-body">
        
        <form action="envia.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar">
        </form>
        </div>
    </div>

    <h6 class="mt - 3"> ARQUIVOS ENVIADOS</h6>
    <?php require 'lista.php'; ?>
   
    <div id="rodape">
    <p>© Desenvolvido por Pedro Soares</p>
    </div>
</body>
</html>
