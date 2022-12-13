<?php
include_once __DIR__ . '/Product.php';

class Food extends Product{
    private int $weight;
    private array $ingredients;
    private string $expirationDate;

    function __construct(string $_title, string $_image, float $_price, Category $_category, int $_weight, array $_ingredients, string $_expirationDate){
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setWeight($_weight);
        $this->setExpirationDate($_expirationDate);
        $this->setIngredients($_ingredients);
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}
?>