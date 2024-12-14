<h1>Création d'un personnage</h1>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // RECUPERATION, VALIDATION DES CHAMPS si formulaire conforme dans form.php
    $nom = $_POST['nom'] ?? null;
    $classe = $_POST['classe'] ?? null;
    $civilisation = $_POST['civilisation'] ?? null;
    
    if ($nom && $classe && $civilisation) {

        // INSTANCIATION D'UN OBJET grace à $classe
        $newPersonnage = new $classe();

        // PASSAGE DES CHAMPS AVEC SETTER
        $newPersonnage->setNom($nom);
        $newPersonnage->setClasse($classe);
        $newPersonnage->setCivilisation($civilisation);
        $newPersonnage->setEndurance("7");
        $newPersonnage->setPuissance("6");
        $newPersonnage->setOrientation("4");
        $newPersonnage->setResistance("5");

        // INSTANCIATION D'UN OBJET addPersonnage
        $addPersonnage = new PersonnageManager();

        // UTILISATION DE LA METHODE add DE L'OBJET addPersonnage POUR AJOUTER L'OBJET personnage
        // RECUPERATION DE l'ACCUSE D'EXECUTION
        $ack = $addPersonnage->add($newPersonnage);

        if ($ack) {
            echo "<p>Personnage crée avec succès !";
        } else {
            echo "<p>Erreur dans la création du personnage !";
        }
    } else {
        echo "<p>Paramètres non spécifiés ou manquants !";
    }
}
?>

<p>Vous allez être redirigé sur la page d'accueil dans 5 sec.</p>
<meta http-equiv="refresh" content="5;index.php?page=home">