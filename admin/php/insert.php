<?php
    require_once("../includes/connect.php");

    $query = "INSERT INTO gerechten (naam, prijs, categorie) VALUES (:naam, :prijs, :categorie)";

    $stmt = $connect->prepare($query);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->execute();

    header("Location: ../admin.php");
?>