<?php

// IDENTITE
class Guerrier extends Personnage
{
    // ATTRIBUTS - PROPRIETES
    private static $description = "La propriété d'un guerrier, qu'elle soit matérielle (armes, territoires, trophées), symbolique (honneur, réputation), ou liée à des compétences spécifiques (tactiques de guerre, héritage), varie selon les contextes historiques et culturels. Les guerriers détiennent souvent des biens et des statuts qui incarnent leur rôle dans la société, leur capacité à défendre leur peuple ou à s'imposer dans les luttes militaires.";

    // METHODE GETTER
    public static function getDescription()
    {        
        return self::$description;
    }
}