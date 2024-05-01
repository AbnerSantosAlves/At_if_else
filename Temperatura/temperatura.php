<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: #1b1a1a;
        }
    </style>
</head>
<body>
    <?php 
    $temp = $_POST['temperatura'];
    $mensagem;

    if($temp < 0){
        $mensagem = "Congelante";
    }

    if($temp >=0 and $temp < 15){
        $mensagem = "Muito frio";
    }

    if($temp >= 15 and $temp < 25){
        $mensagem = "Razoável";
    }

    if($temp >= 25){
        $mensagem = "Calor";
    }
    ?>

  <div class="card">
    <p class="exibirTemperatura">Temperatura <?php echo "$temp"?>°</p>
    <p class="mensagem">Hoje está <?php echo "$mensagem"?></p>
  </div>
</body>
</html>