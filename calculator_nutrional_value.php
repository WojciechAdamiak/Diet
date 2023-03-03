<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diet - program do obliczania dziennego spożycia wartości odżywczych w produktach.</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php

    require_once("nav.php");

   ?>

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
        <option value="jogurt naturalny 2%">Jogurt naturalny 2%</option>
        <option value="serek wiejski 5%">Serek wiejski 5%</option>
        <option value="jajko">Jajko</option>
        <option value="pierś z kurczaka">Pierś z kurczaka</option>
        <option value="dorsz">Dorsz</option>
      </optgroup>
      <optgroup label="Oleje">
        <option value="olej rzepakowy">Olej rzepakowy</option>
        <option value="oliwa z oliwek">Oliwa z oliwek</option>
      </optgroup>
      <optgroup label="Produkty zbożowe">
        <option value="kasza gryczana">Kasza gryczana</option>
        <option value="kasza jaglana">Kasza jaglana</option>
        <option value="płatki owsiane">Płatki owsiane</option>
      </optgroup>
      <optgroup label="Warzywa">
        <option value="pomidor">Pomidor</option>
        <option value="brokuł">Brokuł</option>
        <option value="dynia">Dynia</option>
        <option value="groszek zielony">Groszek zielony</option>
        <option value="marchewka">Marchewka</option>
        <option value="ogórek">Ogórek</option>
        <option value="czerwona papryka">Czerwona papryka</option>
        <option value="ziemniak">Ziemniak</option>
        <option value="pieczarki">Pieczarki</option>
      </optgroup>
      <optgroup label="Owoce">
        <option value="ananas">Ananas</option>
        <option value="awokado">Awokado</option>
        <option value="banan">Banan</option>
        <option value="brzoskwinia">Brzoskwinia</option>
        <option value="czarne jagody">Czarne jagody</option>
        <option value="czereśnie">Czereśnie</option>
        <option value="jabłko">Jabłko</option>
        <option value="maliny">Maliny</option>
      </optgroup>
      <optgroup label="Orzechy i nasiona">
        <option value="migdały">Migdały</option>
        <option value="orzechy włoskie">Orzechy włoskie</option>
        <option value="nasiona słonecznika">Nasiona słonecznika</option>
      </optgroup>
    </select><br />
    <input type="submit" value="Wybierz" name="submit">
  </form>

  <img class="diet__image--food"src="img/zywnosc.jpg" alt="żywność" height="200px" width="200px">

  <?php

    require_once("footer.php");

  ?>

</body>
</html>
