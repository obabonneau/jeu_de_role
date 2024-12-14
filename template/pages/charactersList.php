<?php

// RECUPERATION, VALIDATION DU PARAMETRE "classe" si lien conforme dans classList.php
$classe = $_GET['classe'] ?? null;

if ($classe) {

    // INSTANCIATION D'UN OBJET getPersonnages
    $getPersonnages = new PersonnageManager();

    // RECUPERATION D'OBJET(S) LIE(S) A $classe si existant
    $personnages = $getPersonnages->getList($classe);

    if ($personnages) {       
?>
        <h1>Listes des personnages de la classe <?php echo $classe; ?> </h1>

        <!-- RECUPERATION DE LA DESCRIPTION DE $classe -->
        <p><?php echo $classe::getDescription(); ?></p>

        <div class="conteneurPersonnage">

            <?php
            // AFFICHAGE DES PERSONNAGES
            foreach ($personnages as $personnage) {
            ?>
                <div class="personnage">
                    <h3><?php echo $personnage->getNom(); ?></h3>
                    <p><?php echo $personnage->getClasse(); ?></p>
                    <p><?php echo $personnage->getCivilisation(); ?></p>
                    <p>Endurance : <?php echo $personnage->getEndurance(); ?></p>
                    <p>Puissance : <?php echo $personnage->getPuissance(); ?></p>
                    <p>Orientation : <?php echo $personnage->getOrientation(); ?></p>
                    <p>Résistance : <?php echo $personnage->getResistance(); ?></p>
                </div>
            <?php
            }
            ?>
        </div>
<?php
    } else {
        echo "<p>Aucun personnage trouvé !</p>";
    }
} else {
    echo "<p>Paramètres non spécifiés ou manquants !</p>";
}
