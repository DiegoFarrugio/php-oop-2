<?php

require_once "./product.php";
require_once "./food.php";
require_once "./games.php";
require_once "./kennels.php";

$productProva = new product("casuale", 48, true, false, true);
var_dump($productProva);

$foodProva = new food("Monge", 33, true, false, true, "12/12/12", "33kg");
var_dump($foodProva);

$gamesProva = new games("Palla volante", 6, true, true, true, "Plastica", "Palla");
var_dump($gamesProva);

$kennelsProva = new kennels("Cuccia di legno", 150, true, true, false, true, "3m*2m");
var_dump($kennelsProva);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Php Oop 2</title>
</head>
<body>

    <header>
        HEADER
    </header>

    <main>
        MAIN
    </main>

    <footer>
        FOOTER
    </footer>
    
</body>
</html>