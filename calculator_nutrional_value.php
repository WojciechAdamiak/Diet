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
    <span>Kalkulator wartości odżywczych:</span>
  </div>

  <form method="post" action="calc_nutrional.php" id="form" name="form_products" >
    <label for="quantity">Wpisz ilość produktu w gramach: </label><br />
    <input type="number" name="quantity" id="quantity" value="100"><br />
    <label for="products">Wybierz produkt z listy:</label><br />
    <select id="products" name="products">
      <optgroup label="Produkty pochodzenia zwierzęcego">
        <option value="Jogurt naturalny 2%">Jogurt naturalny 2%</option>
        <option value="Serek wiejski 5%">Serek wiejski 5%</option>
        <option value="Jajko">Jajko</option>
        <option value="Pierś z kurczaka">Pierś z kurczaka</option>
        <option value="Dorsz">Dorsz</option>
      </optgroup>
      <optgroup label="Oleje">
        <option value="Olej rzepakowy">Olej rzepakowy</option>
        <option value="Oliwa z oliwek">Oliwa z oliwek</option>
      </optgroup>
      <optgroup label="Produkty zbożowe">
        <option value="Kasza gryczana">Kasza gryczana</option>
        <option value="Kasza jaglana">Kasza jaglana</option>
        <option value="Płatki owsiane">Płatki owsiane</option>
      </optgroup>
      <optgroup label="Warzywa">
        <option value="Pomidor">Pomidor</option>
        <option value="Brokuł">Brokuł</option>
        <option value="Dynia">Dynia</option>
        <option value="Groszek zielony">Groszek zielony</option>
        <option value="Marchewka">Marchewka</option>
        <option value="Ogórek">Ogórek</option>
        <option value="Czerwona papryka">Czerwona papryka</option>
        <option value="Ziemniak">Ziemniak</option>
        <option value="Pieczarki">Pieczarki</option>
      </optgroup>
      <optgroup label="Owoce">
        <option value="Ananas">Ananas</option>
        <option value="Awokado">Awokado</option>
        <option value="Banan">Banan</option>
        <option value="Brzoskwinia">Brzoskwinia</option>
        <option value="Czarne jagody">Czarne jagody</option>
        <option value="Czereśnie">Czereśnie</option>
        <option value="Jabłko">Jabłko</option>
        <option value="Maliny">Maliny</option>
      </optgroup>
      <optgroup label="Orzechy i nasiona">
        <option value="Migdały">Migdały</option>
        <option value="Orzechy włoskie">Orzechy włoskie</option>
        <option value="Nasiona słonecznika">Nasiona słonecznika</option>
      </optgroup>
    </select><br />
    <input type="submit" value="Wybierz" name="submit">
  </form>

  <img src="img/zywnosc.jpg" alt="żywność" height="200px" width="200px">

  <footer class="promo__copyright">Diet 2022</footer>

</body>
</html>
