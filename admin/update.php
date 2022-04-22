<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="pagina">
      <div class="container">
        <?php 
              require_once("includes/connect.php");

              $id = $_GET['id'];

              $query = "SELECT * FROM gerechten WHERE id = :id";
              $stmt = $connect->prepare($query);
              $stmt->bindParam(':id', $id);
              $stmt->execute();

              $result = $stmt->fetch();
        ?>
        <form action="php/update.php" method="post">
          <label>Id</label>
          <input type="text" name="id" value="<?php echo $result['id'];?>" readonly/>
          <label>Naam</label>
          <input type="text" name="naam" value="<?php echo $result['naam'];?>" />
          <label>Prijs</label>
          <input type="text" name="prijs" value="<?php echo $result['prijs'];?>" />
          <label>Categorie</label>
          <input type="text" name="categorie" value="<?php echo $result['categorie'];?>"/>
          <button type="submit">Update</button>
        </form>
      </div>
    </div>
  </body>
</html>