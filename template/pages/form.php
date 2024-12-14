<h1>Créer un personnage</h1>

<!-- FORMULAIRE -->
<form class="formulaire" method="post" action="index.php?page=add">

    <!-- CHAMP NOM -->
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom"><br>

    <!-- CHAMP CLASSE -->
    <label for="classe">Classe</label>
    <select id="classe" name="classe">
        <option value="" selected hidden>A sélectionner</option>
        <option>Guerrier</option>
        <option>Ouvrier</option>
        <option>Explorateur</option>
    </select><br>

    <!-- CHAMP CIVILISATION -->
    <label for="civilisation">Civilisation</label>
    <select id="civilisation" name="civilisation">
        <option value="" selected hidden>A sélectionner</option>
        <option>Norvège</option>
        <option>Angleterre</option>
        <option>France</option>
    </select><br>

    <!-- BOUTON D'ENVOI -->
    <input type="submit" value="Ajouter">
</form>