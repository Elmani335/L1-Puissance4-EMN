<?php

class Personnage
{
//Crée 2 personnages avec 100 points de vie chacun, une force de 20, et une defence de 10, faire en sorte d'attaquer un personnage et changer ses point de vie en fonction de la force et de la defense de l'autre personnage

    private $vie = 1;
    private $force = 1;
    private $defense = 1;

    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    public function frapper(Personnage $perso)
    {
        $newVie = $perso->getVie() - ($this->force - $perso->defense);
        if ($newVie > $perso->getVie()) {
            return;
        }
        $perso->setVie($newVie);
    }

    public function __construct($vie, $force, $defense) {
        $this->vie = $vie;
        $this->force = $force;
        $this->defense = $defense;
    }
    //afficher les points du pesonnage
    public function getVie() {
        return $this->vie;
    }
    public function getForce() {
        return $this->force;
    }
    public function getDef() {
        return $this->defense;
    }

}
?>