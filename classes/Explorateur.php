<?php

// IDENTITE
class Explorateur extends Personnage
{
    // ATTRIBUTS - PROPRIETES
    private static $description = "La propriété d'un explorateur englobe donc une gamme étendue d'objets, de ressources et d'idées, allant des biens matériels qui soutiennent l'exploration elle-même, aux découvertes intellectuelles et scientifiques qui en résultent.";

    // METHODE GETTER
    public static function getDescription()
    { 
        return self::$description;
    }
}