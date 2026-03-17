<?php
class Candidat
{
    public string $prenom;
    public string $nom;
    public string $typeQCM;

    public function __construct($prenom, $nom, $typeQCM)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->typeQCM = $typeQCM;
    }

    public function getPrenom()
    {
        return ($this->prenom);
    }
}
