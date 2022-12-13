<?php
class Category {
    private string $species;
    private string $icon;

    function __construct(string $_species, string $_icon){
        $this->setSpecies($_species);
        $this->setIcon($_icon);
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
    public function getIcon()
    {
        return $this->icon;
    }
    public function setIcon($icon)
    {
        if(strlen($icon)){
            $this->icon = $icon;
        }else {
            $this->icon = 'default.jpg';
        }
        return $this;
    }
}


?>