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

    <!-- Import css en java -->
    <script src="./assets/js/main.js" async></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Titel en favicon-->
    <title>Menukaart</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico">

</head>
<body>
    <header>
        <nav>
            <a href="#dranken">dranken</a> |
            <a href="#voorgerechten">voorgerechten</a> |
            <a href="#hoofdgerechten">hoofdgerechten</a> |
            <a href="#nagerechten">nagerechten</a> |
            <a href="#login">login</a>
        </nav>
        


        <?php
$servername = "localhost";

try {
   // new PDO('mysql:host=localhost;dbname=test', $user, $pass);
  $conn = new PDO("mysql:host=$servername;dbname=project_foodcards", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 ?>


    </header>
    
    <main>
        <?php
        $stm = $conn->query("SELECT * FROM menukaart");

        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        foreach($result as $i)
        {echo "<div><h2>".$i['ID']."<h2><br>".$i['naam']."<br><img src=\"".$i['imgsource']."\" alt='".$i['beschrijving']."' /><br>Categorie: ".$i['categorie']."<br>".$i['beschrijving']."</div>";}?>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </main>


<img src="" alt="">
    <footer>
        This website was made by Boris van Maaren.
    </footer>
</body>
</html>