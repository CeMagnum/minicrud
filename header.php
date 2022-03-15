<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

    <!-- Importeer css-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Titel en favicon-->
    <title>Menukaart</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico">

</head>
<body>
<div class="prlx1"><header>
        <nav>
            <a href="index.php">Home</a> |
            <a href="menukaart.php">Menukaart</a> |
            <a href="menukaart.php?category=dranken">dranken</a> |
            <a href="menukaart.php?category=voorgerechten">voorgerechten</a> |
            <a href="menukaart.php?category=hoofdgerechten">hoofdgerechten</a> |
            <a href="menukaart.php?category=nagerechten">nagerechten</a> |
            <a href="create.php">create</a>
        </nav></div>
    

<!-- DATABASE CONNECTIE -->
<?php $servername = "localhost";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=project_foodcards", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
        } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }?>
    </header>