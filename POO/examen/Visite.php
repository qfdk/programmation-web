<?php
class Visite
{
    private $date;
    private $heure;
    private $id;
    private $site;
    private $personne;

    public function __construct($id, $date, $heure, $personne, $site)
    {
        $this->id = $id;
        $this->date = $date;
        $this->heure = $heure;
        $this->personne = $personne;
        $this->personne->ajouterVisite($this);
        $this->site = $site;
        $this->site->ajouterVisite($this);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getHeure()
    {
        return $this->heure;
    }

    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    public function __toString()
    {
        return "
                $this->id<br>
                $this->date<br>
                $this->heure";
    }
}
