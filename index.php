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
    <div class="pagina">
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
      <div class="container">
        <div class="indexafb">
          <img src="images/indexpizza.jpg" / width="1519" height="694">
        </div>
        <div class="restaurantinfo">
          <div class="containerrestaurantinfo">
            <div class="restauranttitel">
              <h1>Restaurant MamaMia</h1>
            </div>
            <div class="restaurantbeschrijving">
              <p>
                Welkom bij restaurant MamaMia! Wij maken het allerbeste
                Italiaanse gerechten voor u klaar en zorgen voor een gezellige
                sfeer. Komt bij ons eten! Voor vragen of feedback kunt u altijd
                bij ons terecht. Zie de "Contact" pagina.
              </p>
            </div>
          </div>
        </div>
        <div class="indexlocatie">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4537.180513059931!2d5.093573729564017!3d51.99099631563083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c663f49612e697%3A0xf2eebbdd75e4ad3b!2sMamma%20Mia!5e0!3m2!1snl!2snl!4v1650436919907!5m2!1snl!2snl"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="zoekbalk">
          <div class="zoekbalktekst"><p>Zoek uw favoriete gerecht:</p></div>
          <form action="zoekresultaten.php">
            <input type="text" name="zoekbalk">
            <input type="submit" name="submit" value="Zoeken">
          </form>
        </div>
      </div>
    </div>
    <footer>© Restaurant MamaMia</footer>
  </body>
</html>
