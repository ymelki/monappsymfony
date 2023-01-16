<?php
// le namespace sert à avoir un dossier virtuelle
// dans lequelle on place nos classes 
// pour s'organiser
namespace App;


class Personne {

    // propriété
    private $nom;
    public $prenom;
    public $age;

    public function __construct($nom,$prenom,int $age)
    { 
        $this->nom=$nom;
        $this->prenom=$prenom;
         $this->age=$age;

    }
    //Méthode (fonctions qui vont appartenir a ma classe)
    function afficher(){
        echo "je m'appelle  ".$this->nom." ".$this->prenom." et j'ai ".$this->age;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        // Changement de nom : je vais pouvoir mettre des contrôles
        // si le nombres de 2 < caracteres < 15
        $this->nom = $nom;

        return $this;
    }
}

?>