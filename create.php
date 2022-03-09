<?php
include('header.php');
include('form.php');
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $prijs =        $_POST['prijs'];
    $naam =         $_POST['naam'];
    $imgsource =    $_POST['imgsource'];
    $categorie =    $_POST['categorie'];
    $beschrijving = $_POST['beschrijving'];
    $sql = "INSERT INTO menukaart (prijs, naam, imgsource, categorie, beschrijving) VALUES ($prijs, '$naam', '$imgsource', '$categorie', '$beschrijving')";
    
    if (empty($prijs || $naam || $imgsource || $categorie || $beschrijving)) {
        echo "Vul alle velden in!";
    } else if (isset($_POST['knop'])) {
        echo 'Compleet!';
        // $test = $conn->query($sql);
        // var_dump($test);

        $conn->prepare($sql)->execute();
    } else {
        echo 'idk what happened';
        // var_dump($test);
    }
} else {
    echo "1";
}

?>
    <?php include('footer.php');?>
<?php 

// $naam = $_POST['voornaam']

// if (isset($_POST['knop'])) {
//     $naam = $_POST['voornaam'];
// }



?>