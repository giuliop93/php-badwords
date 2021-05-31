<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $testo = "ciao Tizio come va?";
    $badword = $_GET{"badword"};
    
    echo strlen($testo);
    ?>
    <br/>
    <?php
    echo str_replace("va?", "***", $testo);
    $testoModificato = str_replace($badword, "***", $testo);

    ?>
</body>
</html>