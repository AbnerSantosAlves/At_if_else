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
    $peso = $_POST['peso'];
    $altr = $_POST['altura'];
    $altura = ($altr/100) * ($altr/100);
    $imc = $peso / $altura;
    $classificacao;

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso normal";
    } 
    if ($imc >= 18.5 && $imc < 25.0) {
        $classificacao = "Peso normal";
    } 
    if ($imc >= 25.0 && $imc < 30.0) {
        $classificacao = "Excesso de peso";
    } 
    if ($imc >= 30.0 && $imc < 35.0) {
        $classificacao = "Obesidade classe I";
    } 
    if ($imc >= 35.0 && $imc < 40.0) {
        $classificacao = "Obesidade classe II";
    } 
    else {
        $classificacao = "Obesidade classe III";
    }
    ?>

 <div class="card">
    <p class="resultadoIMC"><?php echo "O seu IMC é ". number_format($imc, 2)?></p>
    <p class="resultadoClass">Classificação: <?php echo "$classificacao"?></p>
  </div>
</body>
</html>