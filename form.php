<?php
    $censura = $_GET['censura'];
    $testo = $_GET['testo'];

    $testoCensurato = str_replace($censura, "***", $testo);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>testo originale <?= $testo; ?> <br> lunghezza testo originale <?= strlen($testo); ?></h1>

    <h1>censura <?= $censura; ?></h1>
    
    <h1>testo censurato <?= $testoCensurato; ?></h1>

</head>
<body>
    
</body>
</html>