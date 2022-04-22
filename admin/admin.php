<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="pagina">

      <div class="table">
        
        <table style="width: 100%">
          <tr style="height: 60px">
              <th style="width: 16%">ID</th>
              <th style="width: 17%">Naam</th>
              <th style="width: 17%">Prijs</th>
              <th style="width: 17%">Categorie</th>
              <th style="width: 17%">Update</th>
              <th style="width: 17%">Delete</th>
            </tr>
        <?php 
                  require_once("includes/connect.php");

                  $query = "SELECT * FROM gerechten ORDER BY categorie";
                  $stmt = $connect->prepare($query);
                  $stmt->execute();

                  $result = $stmt->fetchAll();

                  foreach($result as $product) {
                  ?>
          
          <tr style="height: 50px">
            <td><p><?php echo $product['id']; ?></p></td>
            <td><p><?php echo $product['naam']; ?></p></td>
            <td><p><?php echo $product['prijs']; ?></p></td>
            <td><p><?php echo $product['categorie']; ?></p></a></td>
            <td><a href="update.php?id=<?php echo $product['id']; ?>"><button value="Update">Update</button></td>
            <td><a href="php/delete.php?id=<?php echo $product['id']; ?>"><button value="Delete">Delete</button></a></td>
          </tr>
                 <?php } ?>
        </table>
      </div>
      <div class="button">
          <a href="create.php"><button class="submit">Create</button></a>
          <a href="../index.php"><button class="submit">Logout</button></a>
      </div>
    </div>
  </body>
</html>
