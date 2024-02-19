<?php 

class product {
    public $nome;
    public $price;   
    public $stock;
    public $forDog;
    public $forCat;
    public $description;
    public $img;

    public function __construct($nome, $price, $stock = false, $forDog = false, $forCat = false){
        $this->nome = $nome;
        $this->price = $price;
        $this->stock = $stock;
        $this->forDog = $forDog;
        $this->forCat = $forCat;
    }
}



?>

