<?php

require_once __DIR__.'/product.php';

class games extends product{
    public $material;
    public $measure;
    public $gameType;

    public function __construct(
        $nome, 
        $price,
        $stock,
        $forDog,
        $forCat,
        $material,
        $gameType,
    ) 
    {
        parent::__construct(
            $nome,
            $price, 
            $stock,
            $forDog,
            $forCat
        );
        $this->material = $material;
        $this->gameType = $gameType;
    }


}

?>