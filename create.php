<?php include('header.php');?>
<form action="welcome.php" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="prijs" placeholder="Prijs (double)">
    <input type="text" name="naam" placeholder="Naam (varchar)">
    <input type="text" name="imgsource" placeholder="Locatie afbeelding (varchar)">
    <input type="text" name="categorie" placeholder="Categorie (varchar)">
    <input type="text" name="beschrijving" placeholder="Beschrijving (varchar)">
    <input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $prijs = $_POST['prijs'];
    $naam = $_POST['naam'];
    $imgsource = $_POST['imgsource'];
    $categorie = $_POST['categorie'];
    $beschrijving = $_POST['beschrijving'];
    $sql = "INSERT INTO menukaart (prijs, naam, imgsource, categorie, beschrijving) VALUES ($prijs, $naam, $imgsource, $categorie, $beschrijving)";
    if (empty($prijs || $naam || $imgsource || $categorie || $beschrijving)) {
        echo "Vul alle velden in!";
    } else {
        echo 'Compleet!';
    }
}

?>

    <?php include('footer.php');?>