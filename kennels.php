<?php

require_once __DIR__.'/product.php';

class kennels extends product{
    public $waterproof;
    public $dimension;

    public function __construct(
        $nome, 
        $price,
        $stock,
        $forDog,
        $forCat,
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
        $this->waterproof = $waterproof;
        $this->dimension = $dimension;
    }


}

?>