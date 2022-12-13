<?php
include_once __DIR__ . '/Product.php';

class Kennel extends Product{
    private string $size;
    private array $material;

    function __construct(string $_title, string $_image, float $_price, Category $_category, string $_size, array $_material){
        parent::__construct($_title, $_image, $_price, $_category);
        $this->setSize($_size);
        $this->setMaterial($_material);
    }
    public function getSize()
    {
        return $this->size;
    } 
    public function setSize($size)
    {
        if(strlen($size)){
            $this->size = $size;
        }else{
            $this->size = 'none';
        }
        return $this;
    }
    public function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial($material)
    {
        if(count($material)){
            $this->material = $material;
        }else{
            $this->material = ['Unknown'];
        }
        return $this;
    }
}
?>