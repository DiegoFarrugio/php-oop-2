<?php

require_once __DIR__.'/product.php';
require_once __DIR__.'/./trait/traits.php';

class kennels extends product{

    use allMeasure;
    
    public $waterproof;
    public $dimension;

    public function __construct(
        $nome, 
        $price,
        $stock,
        $forDog,
        $forCat,
        $measure,
        $waterproof,
        $dimension
    ) 
    {
        parent::__construct(
            $nome,
            $price, 
            $stock,
            $forDog,
            $forCat
        );
        $this->dimension = $dimension;
        $this->measure = $measure;
    }


}

?>