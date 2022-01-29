<?php

class Car{

    protected $color;
    protected $marque;

    public function __construct($color ="black", $marque="")
    {
        echo"2.".$color;
        $this->color = $color;
        $this->marque = $marque;
    }


    public function go($lieu){
        echo $this->marque."去".$lieu; 
    }


}


class Audi extends Car{

    private $id;

    public function __construct($color, $marque, $id)
    {
        echo"1.".$color;
        parent::__construct($color,$marque);
        $this->id = $id;
    }

    public function go($lieu){
        echo $this->id."去".$lieu; 
    }

    public function __toString()
    {
   
        return "$this->color<br>
               $this->marque<br>
               $this->id";
   
    }       
}


$audi=new Audi("red","audi","奥迪车");
echo $audi;
