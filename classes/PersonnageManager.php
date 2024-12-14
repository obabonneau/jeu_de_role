<?php

// CLASSE DE MANAGEMENT DES PERSONNAGES EN BDD
class PersonnageManager extends DbConnect
{
    // ATTRIBUTS - PROPRIETES
    private $ack;

    // METHODE D'AJOUT D'UN PERSONNAGE EN BASE DE DONNEES
    public function add(Personnage $newPersonnage)
    {
        try {

            // PREPARATION DE LA REQUETE SQL
            $requete = $this->connexion->prepare("INSERT INTO personnage (nom, classe, civilisation, endurance, puissance, orientation, resistance)
            VALUES (:nom, :classe, :civilisation, :endurance, :puissance, :orientation, :resistance)");
            $requete->bindValue(':nom', $newPersonnage->getNom());
            $requete->bindValue(':classe', $newPersonnage->getClasse());
            $requete->bindValue(':civilisation', $newPersonnage->getCivilisation());
            $requete->bindValue(':endurance', $newPersonnage->getEndurance());
            $requete->bindValue(':puissance', $newPersonnage->getPuissance());
            $requete->bindValue(':orientation', $newPersonnage->getOrientation());
            $requete->bindValue(':resistance', $newPersonnage->getResistance());

            // EXECUTION DE LA REQUETE SQL
            $requete->execute();

            // ACCUSE DE TRAITEMENT OK
            $this->ack = 1;
        } catch (PDOException $e) {
            // echo 'Erreur:'. $e->getMessage();

            // ACCUSE DE TRAITEMENT KO
            $this->ack = 0;
        }
        return $this->ack;
    }

    // METHODE DE LECTURE DE PERSONNAGES EN BASE DE DONNEES
    public function getList($classe)
    {
        try {

            // PREPARATION DE LA REQUETE SQL
            $requete = $this->connexion->prepare("SELECT * FROM personnage WHERE classe = :classe");
            $requete->bindParam(':classe', $classe);

            // EXECUTION DE LA REQUETE SQL
            $requete->execute();

            // FORMATAGE DU RESULTAT DE LA REQUETE EN TABLEAU
            $resultat = $requete->fetchall(PDO::FETCH_ASSOC);

            // PASSAGE DU TABLEAU DANS DES OBJETS
            $personnages = []; //OU $charactersType = array();
            foreach ($resultat as $cle => $personnage) {
                $personnages[$cle] = new $classe();
                $personnages[$cle]->setNom($personnage['nom']);
                $personnages[$cle]->setClasse($personnage['classe']);
                $personnages[$cle]->setCivilisation($personnage['civilisation']);
                $personnages[$cle]->setPuissance($personnage['puissance']);
                $personnages[$cle]->setEndurance($personnage['endurance']);
                $personnages[$cle]->setOrientation($personnage['orientation']);
                $personnages[$cle]->setResistance($personnage['resistance']);
            }
            
            return $personnages;           
        } catch (PDOException $e) {
            //echo 'Erreur:' . $e->getMessage();
        }        
    }
}