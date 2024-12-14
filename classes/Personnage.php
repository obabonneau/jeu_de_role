<?php

// CLASSE PERSONNAGE
abstract class Personnage
{
    // ATTRIBUTS - PROPRIETES
    protected $id;
    protected $nom;
    protected $classe;
    protected $civilisation;
    protected $endurance;
    protected $puissance;
    protected $orientation;
    protected $resistance;

    // METHODE GETTER
    public function getNom()
    {
        return $this->nom;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function getCivilisation()
    {
        return $this->civilisation;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }

    public function getpuissance()
    {
        return $this->puissance;
    }

    public function getOrientation()
    {
        return $this->orientation;
    }

    public function getResistance()
    {
        return $this->resistance;
    }

    // METHODE SETTER
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function setCivilisation($civilisation)
    {
        $this->civilisation = $civilisation;
    }

    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;
    }

    public function setpuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }
}