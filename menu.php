<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@400;700&family=Raleway:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="paginamenu">
      <div class="navbar">
        <div class="logo">
          <p>Logo</p>
        </div>
        <div class="link">
          <a href="index.php"><p>Home</p></a>
          <a href="menu.php"><p>Menu</p></a>
          <a href="contact.php"><p>Contact</p></a>
        </div>
      </div>
      <div class="menurij">
        <div class="gerechtbeschr">
          <div class="naamrij">
            <p>Pizza</p>
          </div>
          <div class="gerechten">
            <?php 
              require_once("includes/connect.php");

              $query = "SELECT * FROM gerechten WHERE categorie = 'pizza'";
              $stmt = $connect->prepare($query);
              $stmt->execute();

              $result = $stmt->fetchAll();

              foreach($result as $product) {
                ?>

                <div class="gerecht">
                  <div class="gerechtinfo">
                    <p><?php echo $product['naam']; ?></p>
                  </div>
                  <div class="gerechtprijs">
                    <p>€<?php echo $product['prijs']; ?>,-</p>
                  </div>
                </div>

            <?php
              }
            ?>

          </div>
        </div>
        <div class="gerechtimg">
          <img src="images/pizzamenu.jpg" />
        </div>
      </div>
      <div class="menurij">
        <div class="gerechtimg">
          <img src="images/pastamenu.jpg" />
        </div>
        <div class="gerechtbeschr">
          <div class="naamrij">
            <p>Pasta</p>
          </div>
          <div class="gerechten">
          <?php 
              require_once("includes/connect.php");

              $query = "SELECT * FROM gerechten WHERE categorie = 'pasta'";
              $stmt = $connect->prepare($query);
              $stmt->execute();

              $result = $stmt->fetchAll();

              foreach($result as $product) {
                ?>

                <div class="gerecht">
                  <div class="gerechtinfo">
                    <p><?php echo $product['naam']; ?></p>
                  </div>
                  <div class="gerechtprijs">
                    <p>€<?php echo $product['prijs']; ?>,-</p>
                  </div>
                </div>

            <?php
              }
            ?>
          </div>
        </div>
      </div>
      <div class="menurij">
        <div class="gerechtbeschr">
          <div class="naamrij">
            <p>Toetjes</p>
          </div>
          <div class="gerechten">
          <?php 
              require_once("includes/connect.php");

              $query = "SELECT * FROM gerechten WHERE categorie = 'toetjes'";
              $stmt = $connect->prepare($query);
              $stmt->execute();

              $result = $stmt->fetchAll();

              foreach($result as $product) {
                ?>

                <div class="gerecht">
                  <div class="gerechtinfo">
                    <p><?php echo $product['naam']; ?></p>
                  </div>
                  <div class="gerechtprijs">
                    <p>€<?php echo $product['prijs']; ?>,-</p>
                  </div>
                </div>

            <?php
              }
            ?>
          </div>
        </div>
        <div class="gerechtimg">
          <img src="images/toetjemenu.jpg" />
        </div>
      </div>
    </div>
    <footer>© Restaurant MamaMia</footer>
  </body>
</html>
