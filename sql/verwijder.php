<?php include('connect.php');
        if(isset($_POST['verwijderItem'])){
            $stm = $conn->prepare("DELETE FROM menukaart WHERE ID = :product_id");
            $stm->bindParam(":product_id", $_POST['product_id'], PDO::PARAM_INT);
            $stm->execute();
        }
        header("Location: ../menukaart.php#gerechten");
        exit();
?>