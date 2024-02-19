<?php

require_once __DIR__.'/product.php';

class food extends product{
    public $expiration;
    public $typeFood;
    public $kg;

    public function __construct(
        $nome, 
        $price,
        $stock,
        $forDog,
        $forCat,
        $expiration,
        $kg
    ) 
    {
        parent::__construct(
            $nome,
            $price, 
            $stock,
            $forDog,
            $forCat
        );
        $this->expiration = $expiration;
        $this->kg = $kg;
    }


}


?>