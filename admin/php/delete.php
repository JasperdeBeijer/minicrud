<?php
    require_once("../includes/connect.php");

    $id = $_GET['id'];

    $query = "DELETE FROM gerechten WHERE id = :id";


    $stmt = $connect->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: ../admin.php");
?>