<?php include('header.php');?>
<?php //var_dump($_GET);?>
    <main>
        <?php
        $stm = $conn->prepare("SELECT * FROM menukaart WHERE ID = :product_id");
        $stm->bindParam(":product_id", $_GET['product_id'], PDO::PARAM_INT);
        $stm->execute();


        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        foreach($result as $i)
        {echo "<div><h2>".$i['prijs']."<h2><br>".$i['naam']."<br><img src=\"".$i['imgsource']."\" alt='".$i['beschrijving']."' /><br>Categorie: ".$i['categorie']."<br>".$i['beschrijving']."</div>";}?>
        <form method="post" action="create.php">
            <input type="text" name="prijs"         placeholder="Prijs (double)">
            <input type="text" name="naam"          placeholder="Naam (varchar)">
            <input type="text" name="imgsource"     placeholder="Locatie afbeelding (varchar)">
            <input type="text" name="categorie"     placeholder="Categorie (varchar)">
            <input type="text" name="beschrijving"  placeholder="Beschrijving (varchar)">
        </form>
        <?php #$sql = "UPDATE $result SET lastname='Doe';" ?>






        <form action="verwijder.php" method="POST">
            <input class="onzichtbaar" type="text" value="<?php echo $_GET['product_id']?>" name="product_id" />
    <button type="submit" name="verwijderItem" value="Verwijder item">Delete</button>
</form>
    </main>

    <?php include('footer.php');?>