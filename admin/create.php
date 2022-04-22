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
        <form action="php/insert.php" method="post">
          <label>Naam</label>
          <input type="text" name="naam" />
          <label>Prijs</label>
          <input type="text" name="prijs" />
          <label>Categorie</label>
          <input type="text" name="categorie"/>
          <button type="submit">Create</button>
        </form>
      </div>
    </div>
  </body>
</html>
