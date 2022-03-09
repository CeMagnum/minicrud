<form method="post" action="create.php">
    <input type="text" name="prijs"         placeholder="Prijs (double)">
    <input type="text" name="naam"          placeholder="Naam (varchar)">
    <input type="text" name="imgsource"     placeholder="Locatie afbeelding (varchar)">
    <input type="text" name="categorie"     placeholder="Categorie (varchar)">
    <input type="text" name="beschrijving"  placeholder="Beschrijving (varchar)">
    <input type="submit" value="verzenden" name="knop">
</form>

<?php# echo $_SERVER['PHP_SELF'];?>