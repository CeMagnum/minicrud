<?php
include('header.php');
include('form.php');
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $prijs = $_POST['prijs'];
    $naam = $_POST['naam'];
    $imgsource = $_POST['imgsource'];
    $categorie = $_POST['categorie'];
    $beschrijving = $_POST['beschrijving'];
    $sql = "INSERT INTO menukaart (prijs, naam, imgsource, categorie, beschrijving) VALUES ($prijs, '$naam', '$imgsource', '$categorie', '$beschrijving')";
    
    if (empty($prijs || $naam || $imgsource || $categorie || $beschrijving)) {
        echo "Vul alle velden in!";
    } else {
        echo 'Compleet!';
        $test = $conn->query($sql);
        var_dump($test);

        $conn->prepare($sql)->execute($test);
    }
}

?>
    <?php include('footer.php');?>