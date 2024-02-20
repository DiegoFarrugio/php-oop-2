<?php

require_once "./product.php";
require_once "./food.php";
require_once "./games.php";
require_once "./kennels.php";

//$productProva = new product("casuale", 48, true, false, true);
//var_dump($productProva);

$Monge = new food("Monge", 33, true, true, false, "12/12/12", 33);
$Monge->img = "https://www.bauzaar.it/media/catalog/product/h/y/hypoallergenic-12kg_1.jpg?store=default&image-type=image";
//var_dump($Monge);

$pallaVolante = new games("Palla volante", 6, true, true, true, "Plastica", "Palla");
$pallaVolante->img = "https://m.media-amazon.com/images/I/51mZbaOlXrL.jpg";
//var_dump($pallaVolante);

$cucciaRinforzata = new kennels("Cuccia di legno", 150, true, true, false, true, "3m*2m");
$cucciaRinforzata->img = "https://shop-cdn-m.mediazs.com/bilder/6/400/23639_pla_hundehuette_spike_classic_xl_fg_8237_6.jpg";
//var_dump($cucciaRinforzata);

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

<h2 class="text-center mb-5">I nostri articoli</h2>

<div class="d-flex justify-content-around bg-danger-subtle">

<div class="card bg-info" style="width: 18rem;">
  <img src="<?php echo $Monge->img ?>" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title"><?php echo $Monge->nome; ?></h5>
     <p class="card-text">Prezzo : €<?php echo $Monge->price ?></p>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">Scadenza : <?php echo $Monge->expiration?> </li>
    <li class="list-group-item">Disponibilità : 
        <?php
            if($Monge->stock == true){
                echo 'Si';
            } 
            else{
                echo 'No';
            } 
        ?></li>
    <li class="list-group-item">Kg: <?php echo $Monge->kg?></li>

    <li class="list-group-item">Consigliato per cani? 
        <?php
        if($Monge->forDog == true){
            echo "Si";
        }
        else{
            echo "No";
        }  
        ?> </li>

    <li class="list-group-item">Consigliato per gatti?
        <?php
        if($Monge->forCat == true){
            echo "Si";
        }
        else{
            echo "No";
        }
        ?>
    </li>
  </ul>
</div>

<div class="card bg-info" style="width: 18rem;">
  <img src="<?php echo $pallaVolante->img ?>" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title"><?php echo $pallaVolante->nome; ?></h5>
     <p class="card-text">Prezzo : €<?php echo $pallaVolante->price ?></p>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">Materiale : <?php echo $pallaVolante->material?> </li>
    <li class="list-group-item">Disponibilità : 
        <?php
            if($pallaVolante->stock == true){
                echo 'Si';
            } 
            else{
                echo 'No';
            } 
        ?></li>
    <li class="list-group-item">Tipo di gioco: <?php echo $pallaVolante->gameType?></li>

    <li class="list-group-item">Consigliato per cani? 
        <?php
        if($pallaVolante->forDog == true){
            echo "Si";
        }
        else{
            echo "No";
        }  
        ?> </li>

    <li class="list-group-item">Consigliato per gatti?
        <?php
        if($pallaVolante->forCat == true){
            echo "Si";
        }
        else{
            echo "No";
        }
        ?>
    </li>
  </ul>
</div>

<div class="card bg-info" style="width: 18rem;">
  <img src="<?php echo $cucciaRinforzata->img ?>" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title"><?php echo $cucciaRinforzata->nome; ?></h5>
     <p class="card-text">Prezzo : €<?php echo $cucciaRinforzata->price ?></p>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">Impermeabile : 
    <?php
    if($cucciaRinforzata->waterproof == true){
        echo "Si";
    }
    else{
        echo "No";
    }
     ?> </li>
    <li class="list-group-item bg-danger">Disponibilità : 
        <?php
            if($cucciaRinforzata->stock == true){
                echo 'No';
            } 
            else{
                echo 'Si';
            } 
        ?></li>
    <li class="list-group-item">Misure: <?php echo $cucciaRinforzata->dimension?></li>

    <li class="list-group-item">Consigliato per cani? 
        <?php
        if($cucciaRinforzata->forDog == true){
            echo "Si";
        }
        else{
            echo "No";
        }  
        ?> </li>

    <li class="list-group-item">Consigliato per gatti?
        <?php
        if($cucciaRinforzata->forCat == false){
            echo "No";
        }
        else{
            echo "Si";
        }
        ?>
    </li>
  </ul>
</div>

</div>
    
</body>
</html>