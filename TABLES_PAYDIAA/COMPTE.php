<?php

/* Generated from GenMyModel */

class COMPTE {

	public $id_membre;
	public $pseudo;
    public $libelle_membre;
    public $date_creation;
	public $mot_de_passe;
	public $categorie_preferee;
	public $type;
	public $role;
	public $nom;
	public $prenom;
	public $avatar;
	public $adresse_mail;

    public function __construct($pseudo)

    {
        echo $pseudo;
    }
}

    $obj = new COMPTE('branletto');
