function validateForm() {
  const username = document.forms["logIn"]["userName"].value;
  const password = document.forms["logIn"]["passWord"].value;
  if (document.getElementById("submit").clicked == true) {
    if (username != "Jasper" || password != "wachtwoord") {
      alert("Incorrecte gebruikersnaam of wachtwoord. Probeer het opnieuw.");
      document.body.style.color = "purple";
      return false;
    }
  }
}
