<?php
trait Weight{
    protected $weight;
    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight, $unit)
    {
        if($weight > 0){
            $this->weight = $weight . $unit;
        }else{
            $this->weight = null;
        }
        return $this;
    }
}
?>