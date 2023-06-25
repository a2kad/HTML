<?php
class Voiture{
    private $immatriculation;
    private $couleur;
    private $poids;
    private $puissance;
    private $capacite_reservoir;
    private $niveau_essence;
    private $nombre_place;
    private $assure;
    private $message;

    public function __construct($uneImmat, $uneCouleur, $unPoids, $unePuissance, $uneCapacite, $unNmbr_places)
    {
        $this->immatriculation = $uneImmat;
        $this->couleur = $uneCouleur;
        $this->poids = $unPoids;
        $this->puissance = $unePuissance;
        $this->capacite_reservoir = (float)$uneCapacite;
        $this->niveau_essence = $unNmbr_places;
        $this->nombre_place = 5.0;
        $this->assure = false;
        $this->message = "Bonjour";
    }

    

    /**
     * Get the value of immatriculation
     */
    public function getImmatriculation() {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     */
    public function setImmatriculation($immatriculation): self {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur() {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur($couleur): self {
        $this->couleur = $couleur;
        return $this;
    }

    /**
     * Get the value of poids
     */
    public function getPoids() {
        return $this->poids;
    }

    /**
     * Set the value of poids
     */
    public function setPoids($poids): self {
        $this->poids = $poids;
        return $this;
    }

    /**
     * Get the value of puissance
     */
    public function getPuissance() {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     */
    public function setPuissance($puissance): self {
        $this->puissance = $puissance;
        return $this;
    }

    /**
     * Get the value of capacite_reservoir
     */
    public function getCapaciteReservoir() {
        return $this->capacite_reservoir;
    }

    /**
     * Set the value of capacite_reservoir
     */
    public function setCapaciteReservoir($capacite_reservoir): self {
        $this->capacite_reservoir = $capacite_reservoir;
        return $this;
    }

    /**
     * Get the value of niveau_essence
     */
    public function getNiveauEssence() {
        return $this->niveau_essence;
    }

    /**
     * Set the value of niveau_essence
     */
    public function setNiveauEssence($niveau_essence): self {
        $this->niveau_essence = $niveau_essence;
        return $this;
    }

    /**
     * Get the value of nombre_place
     */
    public function getNombrePlace() {
        return $this->nombre_place;
    }

    /**
     * Set the value of nombre_place
     */
    public function setNombrePlace($nombre_place): self {
        $this->nombre_place = $nombre_place;
        return $this;
    }

    /**
     * Get the value of assure
     */
    public function getAssure() {
        return $this->assure;
    }

    /**
     * Set the value of assure
     */
    public function setAssure($assure) {
        $this->assure = $assure;
        if ($assure){
            $this->message = "Merci de m\'avoir assurés";
        }else{
            $this->message  ="Attention : je ne suis plus assurée !";
        }
    }

    /**
     * Get the value of message
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage($message): self {
        $this->message = $message;
        return $this;
    }
    public function Repeindre ($uneCouleur= null){
        if(!isset($uneCouleur)){
            $this->message = 'Erreur : j\'ai besoin de connaître la nouvell couleur !';
            return false;
        };
        if ($uneCouleur != $this->couleur)
        {
            $this->message = ucfirst($uneCouleur);
            $this->message .='!. Tu m\'as changé de couleur !';
        }else {
            $this->message = 'Merci de m\'avoir rafraîchi le teint !';
        }
        $this->couleur = $uneCouleur;
        return true;
    }
    public function Mettre_essense($quantite){
        if ($quantite > ($this->capacite_reservoir - $this->niveau_essence)){
            $this->message = $quantite. 'l ! Tu vas moiller tes chaussures ! J\'ai déjà ';
            $this->message .= $this->niveau_essence.' l.';
        }else{
            $this->niveau_essence += $quantite;
            $this->message = 'Merci pour le carburant ! J\'ai maintenant '. $this->niveau_essence.' l.';
        }
        return $this->niveau_essence;
    }
}
?>