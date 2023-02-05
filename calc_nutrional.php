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
        <li class="promo__menu--item"><a href="index.html" class="promo__menu--link">Strona Główna</a></li>
        <li class="promo__menu--item"><a href="calculator_bmi.html" class="promo__menu--link">Kalkulator BMI</a></li>
        <li class="promo__menu--item"><a href="calculator_nutrional_value.html" class="promo__menu--link">Kalkulator Wartości odżywczych</a></li>
        <li class="promo__menu--item"><a href="contact.html" class="promo__menu--link">Kontakt</a></li>
        <li class="promo__menu--item"><a href="about_us.html" class="promo__menu--link">O Nas</a></li>
      </ul>
    </nav>

    <div class="diet__calculator">
      <span>Wybrany produkt:</span>
    </div>

    <?php

      <h3>Dziękujemy za wypełnienie formularza!</h3>

      <p>Twój wybór:</p>

      <ul>

      echo $_POST['products']

      echo $_POST['quantity']

      </ul>

     ?>

  </body>
</html>
