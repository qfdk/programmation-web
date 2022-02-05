<?php
class Site
{
    private $nom;
    private $adresse;
    private $visites;

    public function __construct($nom, $adresse)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
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

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function __toString()
    {
        return "
                $this->nom<br>
                $this->adresse<br>
                $this->visites";
    }
}
