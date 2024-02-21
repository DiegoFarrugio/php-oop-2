<?php

require_once __DIR__.'/product.php';
require_once __DIR__.'/./trait/traits.php';

class games extends product{

    use allMeasure;
    
    public $material;
    public $gameType;

    public function __construct(
        $nome, 
        $price,
        $stock,
        $forDog,
        $forCat,
        $material,
        $measure
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
        $this->measure = $measure;
    }


}

?>