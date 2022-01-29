<?php

class Car
{

    protected $color;
    protected $marque;

    public function __construct($color = "black", $marque = "")
    {
        echo "2. car: " . $color . "<br>";
        $this->color = $color;
        $this->marque = $marque;
    }


    public function go($lieu)
    {
        echo $this->marque . "去" . $lieu;
    }

    public function __toString()
    {
        echo "car 里的 string :<br>";
        return "
               color ：$this->color<br>
               marque：$this->marque";
    }
}


class Audi extends Car
{

    private $id;

    public function __construct($color, $marque, $id)
    {
        echo "1.audi car: " . $color . "<br>";
        parent::__construct($color, $marque);
        $this->id = $id;
    }

    public function go($lieu)
    {
        echo $this->id . "去" . $lieu;
    }

    public function __toString()
    {
        $ptosting = parent::__toString();
        return "audi 里的 string :
                        <br>$ptosting 
                        <br> id :   $this->id";
    }
}




$audi = new Audi("red", "audi", "奥迪车");
echo $audi;
// $car = new Car();
// echo $car;
