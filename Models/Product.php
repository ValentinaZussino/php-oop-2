<?php
include_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Weight.php';
 class Product {
    use Weight;
    protected string $title;
    protected string $image;
    protected float $price;
    public Category $category;
    private bool $available;

    function __construct(string $_title, string $_image = null, float $_price, Category $_category){
        $this->setTitle($_title);
        $this->setImage($_image);
        $this->setPrice($_price);
        $this->category = $_category;
        $this->setAvailable();
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    { 
        if(strlen($title)){
            $this->title = $title;
        }else {
            $this->title = null;
        }
        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        if(strlen($image)){
            $this->image = $image;
        }else {
            $this->image = 'default-product-img.webp';
        }
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    } 
    public function setPrice($price)
    {
        if($price > 0){
            $this->price = $price;
        }else {
            $this->price = 0;
        }
        return $this;
    }
    public function getAvailable()
    {
        return $this->available;
    }
    private function setAvailable()
    {
        if($this->price == 0){
            $this->available = false;
        }else {
            $this->available = true;
        }

        return $this;
    }
 }

?>