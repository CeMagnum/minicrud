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
        <?php include('form.php');?>
        <?php var_dump($result);?>
        <?php  ?>
        <?php $sql = "UPDATE $result SET lastname='Doe';" ?>
        <a onclick="DeleteConfirm()">Delete</a>
        <p>ik wil ook kaas ik ben ook een klant</p>
    </main>

    <?php include('footer.php');?>