<?php
    require_once("../includes/connect.php");

    $query = "UPDATE gerechten SET naam = :naam, prijs = :prijs, categorie = :categorie WHERE id = :id";
    
    $stmt = $connect->prepare($query);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: ../admin.php");
?>