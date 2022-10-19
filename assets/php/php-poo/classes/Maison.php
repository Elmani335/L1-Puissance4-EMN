<?php

class Maison {

    // ici mes atributs
    private $fenetres;
    protected $portes;
    public $piece;

    protected $garage;

    // Et ici mes méthodes
    public function ouvrirFenetre() {
        return 'Je suis une fenêtre ouverte';
    }
    protected function ouvrirPorte () {
        return 'Je suis une porte ouverte';
    }
    private function compterPiece () {
        return 'Il y a quelque pièce';
    }
    protected function ouvrirGarage () {
        return 'Je suis un garage ouvert';
    }
}