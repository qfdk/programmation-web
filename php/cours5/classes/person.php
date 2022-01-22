<?php
class  Person
{
    private $name;

    /**
     * @param mixed $name 姓名
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function __toString()
    {
        return "My name is : $this->name";
    }
}
