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
        <form action="admin.php" name="logIn" onsubmit="return validateForm()" method="post">
          <label>Username</label>
          <input type="text" name="userName" required/>
          <label>Password</label>
          <input type="text" name="passWord" required/>
          <button type="submit" name="submit">Login</button>
        </form>
      </div>
    </div>
    <script src="js/admin.js"></script>
  </body>
</html>
