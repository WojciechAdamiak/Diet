<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diet - program do obliczania dziennego spożycia wartości odżywczych w produktach.</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav>
    <ul class="promo__menu">
      <li class="promo__menu--item"><a href="index.php" class="promo__menu--link">Strona Główna</a></li>
      <li class="promo__menu--item"><a href="calculator_cpm.php" class="promo__menu--link">Kalkulator zapotrzebowania kalorycznego</a></li>
      <li class="promo__menu--item"><a href="calculator_nutrional_value.php" class="promo__menu--link">Kalkulator Wartości odżywczych</a></li>
      <li class="promo__menu--item"><a href="contact.php" class="promo__menu--link">Kontakt</a></li>
      <li class="promo__menu--item"><a href="about_us.php" class="promo__menu--link">O Nas</a></li>
    </ul>
  </nav>

  <header>
    <h2 class="promo__heading">Diet - program do obliczania dziennego spożycia wartości odżywczych w produktach.</h2>
  </header>

  <div class="diet__calculator">
    <span>Kalkulator zapotrzebowania kalorycznego: </span>
  </div>

  <div class="promo__container">
    <form action="calculator_cpm_result.php" method="post">
      <label for="weight">Wpisz swoja wage w kg:</label><br />
      <input type="number" name="weight" id="weight" value="50"><br />
      <label for="height">Wpisz swój wzrost w cm:</label><br />
      <input type="number" name="height" id="height" value="150"><br />
      <label for="age">Wpisz swój wiek w latach:</label><br />
      <input type="number" name="age" id="age" value="30"><br /><br />
      <label for="gender">Podaj swoją płeć:</label><br />
      <input type="radio" name="gender" value="Mężczyzna" checked id="Man">Mężczyzna<br />
      <input type="radio" name="gender" value="Kobieta" id="Woman">Kobieta<br /><br />
      <label for="activity">Jaki jest poziom twojej aktywności fizycznej:</label><br />
      <select id="activity" name="activity">
        <option value="Siedzący tryb życia">Siedzący tryb życia</option>
        <option value="Niska aktywność fizyczna">Niska aktywność fizyczna</option>
        <option value="Umiarkowana aktywność fizyczna">Umiarkowana aktywność fizyczna</option>
        <option value="Aktywny styl życia">Aktywny styl życia</option>
        <option value="Ekstremalnie wysoka aktywność fizyczna">Ekstremalnie wysoka aktywność fizyczna</option>
      </select><br />
      <input type="submit" value="Wyślij">
    </form>
  </div>

  <img class="diet__image--calc" src="img/oblicz.jpg" alt="oblicz" height="200px" width="200px">

  <footer class="promo__copyright">Diet 2022</footer>

</body>

</html>
