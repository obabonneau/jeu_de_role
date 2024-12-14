<?php

// IDENTITE
class Ouvrier extends Personnage
{
    // ATTRIBUTS - PROPRIETES
    private static $description = "Un ouvrier est une personne qui effectue des tâches manuelles dans divers secteurs de l'industrie, de la construction, de l'artisanat ou d'autres domaines nécessitant un travail physique ou technique. Selon le domaine, les ouvriers peuvent travailler sur des chantiers, dans des ateliers, des usines, des laboratoires ou encore dans des entreprises de maintenance.";

    // METHODE GETTER
    public static function getDescription()
    {        
        return self::$description;
    }
}