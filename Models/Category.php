<?php
class Category {
    private string $species;

    function __construct(string $_species){
        $this->setSpecies($_species);
    }

    public function getSpecies()
    {
        return $this->species;
    }
    public function setSpecies($species)
    {
        if(strlen($species)){
            $this->species = $species;
        }else{
            $this->species = 'Unknown';
        }
        return $this;
    }
}


?>