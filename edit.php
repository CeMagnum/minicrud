<?php include('header.php') ?>
    <?php
        if(isset($_POST['editItem'])){
            $stm = $conn->prepare("UPDATE menukaart SET lastname='Doe' WHERE id=:product_id");
            $stm->bindParam(":product_id", $_POST['product_id'], PDO::PARAM_INT);
            $stm->execute();
        }
?>