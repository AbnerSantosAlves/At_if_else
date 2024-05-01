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
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3 = $_POST['n3'];

    $media = ($nota1+$nota2+$nota3) / 3;
    $estado;

    if ($media >= 7){
        $estado = "Aprovado";
    }
    else{
        $estado = "Reprovado";
    }
    ?>

  <div class="card">
    <p class="resultadoMedia">A média das notas é <?php echo "$media"?></p>
    <p class="resultadoClass">Classificação: <?php echo "$estado"?></p>
  </div>
</body>
</html>