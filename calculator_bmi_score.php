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

  <Header>
  <h2 class="promo__heading">Diet - program do obliczania dziennego spożycia wartości odżywczych w produktach.</h2>
  </Header>

  <nav>
    <ul class="promo__menu">
      <li class="promo__menu--item"><a href="index.php" class="promo__menu--link">Strona Główna</a></li>
      <li class="promo__menu--item"><a href="calculator_bmi.php" class="promo__menu--link">Kalkulator zapotrzebowania kalorycznego</a></li>
      <li class="promo__menu--item"><a href="calculator_nutrional_value.php" class="promo__menu--link">Kalkulator Wartości odżywczych</a></li>
      <li class="promo__menu--item"><a href="contact.php" class="promo__menu--link">Kontakt</a></li>
      <li class="promo__menu--item"><a href="about_us.php class="promo__menu--link">O Nas</a></li>
    </ul>
  </nav>

  <div class="diet__calculator">
    <span>Kalkulator zapotrzebowania kalorycznego: </span>
  </div>

  <!-- Dla kobiet:

BMR = 655 + (9,6 × waga w kg) + (1,8 × wysokość w cm) - (4,7 × wiek w latach),

Dla mężczyzn:

BMR = 66 + (13,7 × waga w kg) + (5 × wysokość w cm) - (6,8 × wiek w latach). -->

  <div class="promo__container">
    <form action="calc_bmi.php" method="post">
      <label for="weight">Wpisz swoja wage w kg:</label><br />
      <input type="number" name="weight" id="weight" value="50"><br />
      <label for="height">Wpisz swój wzrost w cm:</label><br />
      <input type="number" name="height" id="height" value="150"><br />
      <label for="age">Wpisz swój wiek w latach:</label><br />
      <input type="number" name="age" id="age" value="30"><br /><br />
      <label for="gender">Podaj swoją płeć:</label><br />
      <input type="radio" name="gender" id="man">Mężczyzna<br />
      <input type="radio" name="gender" id="woman">Kobieta<br /><br />
      <label for="gender">Jaki jest poziom twojej aktywności fizycznej:</label><br />
      <input type="radio" name="activity" id="seated">Siedząca<br />
      <input type="radio" name="activity" id="slightly_active">Mało aktywny<br />
      <input type="radio" name="activity" id="moderately_active">Umiarkowanie aktywny<br />
      <input type="radio" name="activity" id="very_active">Bardzo aktywny<br />
      <input type="radio" name="activity" id="extra_active">Ekstra aktywny<br />
      <input type="submit" value="Wyślij">
    </form>
  </div>

  <footer class="promo__copyright">Diet 2022</footer>

</body>

</html>
