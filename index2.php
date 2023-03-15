<?php
$color = "ff0000";
if(isset($_GET['color'])){
    $color = $_GET['color'];
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: blue;
        }
        h2 {
            color: green;
        }

        a {
            color: orange;
        }
    </style>
</head>

<body style="background-color:#<?=$color?>;">

    <h1>Web Mechanika</h1>
    <h2>Uzduotis 2</h2>

    <!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

    <a href="./index2.php">1 nuoroda</a>

</body>

</html>