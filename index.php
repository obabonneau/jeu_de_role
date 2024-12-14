<?php

// UTILISATION DES CLASSES suivantes
include "classes/DbConnect.php";
include "classes/Personnage.php";
include "classes/Guerrier.php";
include "classes/Ouvrier.php";
include "classes/Explorateur.php";
include "classes/PersonnageManager.php";

// INTEGRATION DE LA PAGE header
include "template/layout/header.php";

// RECUPERATION, SWITCH VERS LA PAGE
$page = $_GET["page"] ?? "home";

switch ($page) {

    // LES PAGES DU SITE
    case "home":
        include "template/pages/home.php";
        break;
    
    case "form":
        include "template/pages/form.php";
        break;

    case "add":
        include "traitement/add.php";
        break;

    case "classList":
        include "template/pages/classList.php";
        break;

    case "charactersList":
        include "template/pages/charactersList.php";
        break;

    // LA PAGE PAGE PAR DEFAUT
    default:
        include "template/pages/home.php";
        break;
}

// INTEGRATION DE LA PAGE footer
include "template/layout/footer.php";