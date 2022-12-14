<?php
include_once __DIR__ . '/Product.php';

class Food extends Product{
    // private mixed $weight;
    private array $ingredients;
    private string $expirationDate;

    function __construct(string $_title, string $_image, float $_price, Category $_category, array $_ingredients, string $_expirationDate = 'yyyy-mm-dd'){
        parent::__construct($_title, $_image, $_price, $_category);
        // $this->setWeight($_weight);
        $this->setExpirationDate($_expirationDate);
        $this->setIngredients($_ingredients);
    }
    // public function getWeight()
    // {
    //     return $this->weight;
    // }
    // public function setWeight($weight)
    // {
    //     if($weight > 0){
    //         $this->weight = $weight;
    //     }else{
    //         $this->weight = null;
    //     }
    //     return $this;
    // }
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    public function setExpirationDate($expirationDate)
    {
        $dateNow = new DateTime("now");
        $dateEx = new DateTime($expirationDate);
        if($dateNow < $dateEx){
            $this->expirationDate = $expirationDate;
        }else{
            $this->expirationDate = 'Expired';
        }
        return $this;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function setIngredients($ingredients)
    {
        if(count($ingredients)){
            $this->ingredients = $ingredients;
        }else{
            $this->ingredients = ["Unknown"];
        }
        return $this;
    }
}
?>