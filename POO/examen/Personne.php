<?php
class Personne
{
    private $id;
    private $nom;
    private $visites;

    public function __construct($id,$nom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->visites = array();
    }

    public function ajouterVisite($visite)
    {
        $this->visites[$visite->getId()] = $visite;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        $STRING = implode ("separator", $this->visites);
        return "
                $this->id<br>
                $this->nom<br>
                $STRING";
    }

}
