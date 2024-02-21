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
        if(is_numeric($price)) {
            $this->price = $price;
        }
        else{
            throw new Exception ('Inserire un numero');
        }
        $this->stock = $stock;
        $this->forDog = $forDog;
        $this->forCat = $forCat;
    }
}



?>

