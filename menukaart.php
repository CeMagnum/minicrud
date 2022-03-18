<?php include('header.php');?>
    <main>
        <?php
        if(isset($_GET['category'])){
            $stm = $conn->prepare("SELECT * FROM menukaart WHERE categorie = :cat");
            $stm->bindParam(":cat", $_GET['category'], PDO::PARAM_STR);

        } else {
            $stm = $conn->query("SELECT * FROM menukaart");
        }
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $i)
        {echo "<div><h2>¥ ".$i['prijs']."<h2><br>".$i['naam']."<br><img src=\"".$i['imgsource']."\" alt='".$i['beschrijving']."' /><br>Categorie: ".$i['categorie']."<br>".$i['beschrijving']."<a href=\"product.php?product_id=".$i['ID']."\"><br>CRUD</a></div>";}?>
    </main>

    <?php include('footer.php');?>