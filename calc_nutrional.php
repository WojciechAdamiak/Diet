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
        <li class="promo__menu--item"><a href="calculator_cpm.php" class="promo__menu--link">Kalkulator zapotrzebowania kalorycznego</a></li>
        <li class="promo__menu--item"><a href="calculator_nutrional_value.php" class="promo__menu--link">Kalkulator Wartości odżywczych</a></li>
        <li class="promo__menu--item"><a href="contact.php" class="promo__menu--link">Kontakt</a></li>
        <li class="promo__menu--item"><a href="about_us.php" class="promo__menu--link">O Nas</a></li>
      </ul>
    </nav>

    <div class="diet__calculator">
      <span>Wybrany produkt:</span>
    </div>

    <?php

    class Product {

      public $name;
      public $quantity;
      public $kcal;
      public $protein;
      public $fat;
      public $carbohydrates;
      public $dietaryFiber;
      public $sodium;
      public $potassium;
      public $calcium;
      public $phosphor;
      public $magnesium;
      public $vitaminA;
      public $vitaminD;
      public $vitaminE;
      public $vitaminB1;
      public $vitaminB2;
      public $vitaminB3;
      public $vitaminC;

    }

    $naturalYoghurt = new Product();
    $naturalYoghurt -> name = 'Jogurt naturalny 2%';
    $naturalYoghurt -> kcal = 60;
    $naturalYoghurt -> protein = 4.3;
    $naturalYoghurt -> fat = 2.0;
    $naturalYoghurt -> carbohydrates = 6.2;
    $naturalYoghurt -> dietaryFiber = 0;
    $naturalYoghurt -> sodium = 63;
    $naturalYoghurt -> potassium = 200;
    $naturalYoghurt -> calcium = 170;
    $naturalYoghurt -> phosphor = 122;
    $naturalYoghurt -> magnesium = 17;
    $naturalYoghurt -> vitaminA = 16;
    $naturalYoghurt -> vitaminD = 0.03;
    $naturalYoghurt -> vitaminE = 0.03;
    $naturalYoghurt -> vitaminB1 = 0.046;
    $naturalYoghurt -> vitaminB2 = 0.216;
    $naturalYoghurt -> vitaminB3 = 0.14;
    $naturalYoghurt -> vitaminC = 1;

    $cottageChesse = new Product();
    $cottageChesse -> name = 'Serek wiejski 5%';
    $cottageChesse -> kcal = 133;
    $cottageChesse -> protein = 18.7;
    $cottageChesse -> fat = 4.7;
    $cottageChesse -> carbohydrates = 3.7;
    $cottageChesse -> dietary_fiber = 0;
    $cottageChesse -> sodium = 44;
    $cottageChesse -> potassium = 113;
    $cottageChesse -> calcium = 94;
    $cottageChesse -> phosphor = 227;
    $cottageChesse -> magnesium = 9;
    $cottageChesse -> vitaminA = 39;
    $cottageChesse -> vitaminD = 0.09;
    $cottageChesse -> vitaminE = 0.08;
    $cottageChesse -> vitaminB1 = 0.030;
    $cottageChesse -> vitaminB2 = 0.450;
    $cottageChesse -> vitaminb3 = 0.18;
    $cottageChesse -> vitaminC = 0;

    $egg = new Product();
    $egg -> name = "Jajko";
    $egg -> kcal = 139;
    $egg -> protein = 12.5;
    $egg -> fat = 9.7;
    $egg -> carbohydrates = 0.6;
    $egg -> dietary_fiber = 0;
    $egg -> sodium = 141;
    $egg -> potassium = 133;
    $egg -> calcium = 47;
    $egg -> phosphor = 204;
    $egg -> magnesium = 12;
    $egg -> vitaminA = 272;
    $egg -> vitaminD = 1.7;
    $egg -> vitaminE = 0.73;
    $egg -> vitaminB1 = 0.064;
    $egg -> vitaminB2 = 0.542;
    $egg -> vitaminB3 = 0.06;
    $egg -> vitaminC = 0;

    $chickenBreastMeat = new Product();
    $chickenBreastMeat -> name = "Pierś z kurczaka";
    $chickenBreastMeat -> kcal = 99;
    $chickenBreastMeat -> protein = 21.5;
    $chickenBreastMeat -> fat = 1.3;
    $chickenBreastMeat -> carbohydrates = 0;
    $chickenBreastMeat -> dietary_fiber = 0;
    $chickenBreastMeat -> sodium = 55;
    $chickenBreastMeat -> potassium = 385;
    $chickenBreastMeat -> calcium = 5;
    $chickenBreastMeat -> phosphor = 240;
    $chickenBreastMeat -> magnesium = 33;
    $chickenBreastMeat -> vitaminA = 6;
    $chickenBreastMeat -> vitaminD = 0;
    $chickenBreastMeat -> vitaminE = 0.3;
    $chickenBreastMeat -> vitaminB1 = 0.09;
    $chickenBreastMeat -> vitaminB2 = 0.153;
    $chickenBreastMeat -> vitaminB3 = 12.44;
    $chickenBreastMeat -> vitaminC = 0;

    $codFish = new Product();
    $codFish -> name = "Dorsz";
    $codFish -> kcal = 78;
    $codFish -> protein = 17.7;
    $codFish -> fat = 0.7;
    $codFish -> carbohydrates = 0;
    $codFish -> dietary_fiber = 0;
    $codFish -> sodium = 72;
    $codFish -> potassium = 356;
    $codFish -> calcium = 9;
    $codFish -> phosphor = 184;
    $codFish -> magnesium = 25;
    $codFish -> vitaminA = 7;
    $codFish -> vitaminD = 1;
    $codFish -> vitaminE = 0.44;
    $codFish -> vitaminB1 = 0.055;
    $codFish -> vitaminB2 = 0.046;
    $codFish -> vitaminB3 = 2.3;
    $codFish -> vitaminC = 2;

    $canolaOil = new Product();
    $canolaOil -> name = "Olej rzepakowy";
    $canolaOil -> kcal = 884;
    $canolaOil -> protein = 0;
    $canolaOil -> fat = 100;
    $canolaOil -> carbohydrates = 0;
    $canolaOil -> dietaryFiber = 0;
    $canolaOil -> sodium = 0;
    $canolaOil -> potassium = 0;
    $canolaOil -> calcium = 0;
    $canolaOil -> phosphor = 0;
    $canolaOil -> magnesium = 0;
    $canolaOil -> vitaminA = 0;
    $canolaOil -> vitaminD = 0;
    $canolaOil -> vitaminE = 26.73;
    $canolaOil -> vitaminB1 = 0;
    $canolaOil -> vitaminB2 = 0;
    $canolaOil -> vitaminB3 = 0;
    $canolaOil -> vitaminC = 0;

    $oliveOil = new Product();
    $oliveOil -> name = "Oliwa z oliwek";
    $oliveOil -> kcal = 882;
    $oliveOil -> protein = 0;
    $oliveOil -> fat = 99.6;
    $oliveOil -> carbohydrates = 0.02;
    $oliveOil -> dietaryFiber = 0;
    $oliveOil -> sodium = 1;
    $oliveOil -> potassium = 0;
    $oliveOil -> calcium = 0;
    $oliveOil -> phosphor = 1;
    $oliveOil -> magnesium = 0;
    $oliveOil -> vitaminA = 0;
    $oliveOil -> vitaminD = 0;
    $oliveOil -> vitaminE = 11.95;
    $oliveOil -> vitaminB1 = 0;
    $oliveOil -> vitaminB2 = 0;
    $oliveOil -> vitaminB3 = 0;
    $oliveOil -> vitaminC = 0;

    $buckwheatGroats = new Product();
    $buckwheatGroats -> name = "Kasza gryczana";
    $buckwheatGroats -> kcal = 347;
    $buckwheatGroats -> protein = 12.6;
    $buckwheatGroats -> fat = 3.1;
    $buckwheatGroats -> carbohydrates = 69.3;
    $buckwheatGroats -> dietaryFiber = 5.9;
    $buckwheatGroats -> sodium = 5;
    $buckwheatGroats -> potassium = 443;
    $buckwheatGroats -> calcium = 25;
    $buckwheatGroats -> phosphor = 459;
    $buckwheatGroats -> magnesium = 218;
    $buckwheatGroats -> vitaminA = 0;
    $buckwheatGroats -> vitaminD = 0;
    $buckwheatGroats -> vitaminE = 0.31;
    $buckwheatGroats -> vitaminB1 = 0.541;
    $buckwheatGroats -> vitaminB2 = 0.127;
    $buckwheatGroats -> vitaminB3 = 1.95;
    $buckwheatGroats -> vitaminC = 0;

    $milletGroats = new Product();
    $milletGroats -> name = "Kasza jaglana";
    $milletGroats -> kcal = 352;
    $milletGroats -> protein = 10.5;
    $milletGroats -> fat = 2.9;
    $milletGroats -> carbohydrates = 71.6;
    $milletGroats -> dietaryFiber = 3.2;
    $milletGroats -> sodium = 5;
    $milletGroats -> potassium = 220;
    $milletGroats -> calcium = 10;
    $milletGroats -> phosphor = 240;
    $milletGroats -> magnesium = 100;
    $milletGroats -> vitaminA = 0;
    $milletGroats -> vitaminD = 0;
    $milletGroats -> vitaminE = 0.10;
    $milletGroats -> vitaminB1 = 0.730;
    $milletGroats -> vitaminB2 = 0.380;
    $milletGroats -> vitaminB3 = 2.3;
    $milletGroats -> vitaminC = 0;

    $oatFlakes = new Product();
    $oatFlakes -> name = "Płatki owsiane";
    $oatFlakes -> kcal = 379;
    $oatFlakes -> protein = 11.9;
    $oatFlakes -> fat = 7.2;
    $oatFlakes -> carbohydrates = 69.3;
    $oatFlakes -> dietaryFiber = 6.9;
    $oatFlakes -> sodium = 5;
    $oatFlakes -> potassium = 379;
    $oatFlakes -> calcium = 54;
    $oatFlakes -> phosphor = 433;
    $oatFlakes -> magnesium = 129;
    $oatFlakes -> vitaminA = 0;
    $oatFlakes -> vitaminD = 0;
    $oatFlakes -> vitaminE = 1.8;
    $oatFlakes -> vitaminB1 = 0.462;
    $oatFlakes -> vitaminB2 = 0.151;
    $oatFlakes -> vitaminB3 = 0.87;
    $oatFlakes -> vitaminC = 0;

    $tomato = new Product();
    $tomato -> name = "Pomidor";
    $tomato -> kcal = 20;
    $tomato -> protein = 0.9;
    $tomato -> fat = 0.2;
    $tomato -> carbohydrates = 4.1;
    $tomato -> dietaryFiber = 1.2;
    $tomato -> sodium = 8;
    $tomato -> potassium = 282;
    $tomato -> calcium = 9;
    $tomato -> phosphor = 21;
    $tomato -> magnesium = 8;
    $tomato -> vitaminA = 107;
    $tomato -> vitaminD = 0;
    $tomato -> vitaminE = 1.22;
    $tomato -> vitaminB1 = 0.064;
    $tomato -> vitaminB2 = 0.042;
    $tomato -> vitaminB3 = 1;
    $tomato -> vitaminC = 23;

    $broccoli = new Product();
    $broccoli -> name = "Brokuł";
    $broccoli -> kcal = 31;
    $broccoli -> protein = 3;
    $broccoli -> fat = 0.4;
    $broccoli -> carbohydrates = 5.2;
    $broccoli -> dietaryFiber = 2.5;
    $broccoli -> sodium = 7;
    $broccoli -> potassium = 385;
    $broccoli -> calcium = 48;
    $broccoli -> phosphor = 66;
    $broccoli -> magnesium = 23;
    $broccoli -> vitaminA = 153;
    $broccoli -> vitaminD = 0;
    $broccoli -> vitaminE = 1.3;
    $broccoli -> vitaminB1 = 0.07;
    $broccoli -> vitaminB2 = 0.12;
    $broccoli -> vitaminB3 = 0.6;
    $broccoli -> vitaminC = 83;

    $pumpkin = new Product();
    $pumpkin -> name = "Dynia";
    $pumpkin -> kcal = 33;
    $pumpkin -> protein = 1.3;
    $pumpkin -> fat = 0.3;
    $pumpkin -> carbohydrates = 7.7;
    $pumpkin -> dietaryFiber = 2.8;
    $pumpkin -> sodium = 4;
    $pumpkin -> potassium = 278;
    $pumpkin -> calcium = 66;
    $pumpkin -> phosphor = 43;
    $pumpkin -> magnesium = 14;
    $pumpkin -> vitaminA = 496;
    $pumpkin -> vitaminD = 0;
    $pumpkin -> vitaminE = 1.03;
    $pumpkin -> vitaminB1 = 0.050;
    $pumpkin -> vitaminB2 = 0.12;
    $pumpkin -> vitaminB3 = 0.5;
    $pumpkin -> vitaminC = 8;

    $greenPeas = new Product();
    $greenPeas -> name = "Groszek zielony";
    $greenPeas -> kcal = 87;
    $greenPeas -> protein = 6.7;
    $greenPeas -> fat = 0.4;
    $greenPeas -> carbohydrates = 17;
    $greenPeas -> dietaryFiber = 6;
    $greenPeas -> sodium = 2;
    $greenPeas -> potassium = 353;
    $greenPeas -> calcium = 22;
    $greenPeas -> phosphor = 122;
    $greenPeas -> magnesium = 29;
    $greenPeas -> vitaminA = 68;
    $greenPeas -> vitaminD = 0;
    $greenPeas -> vitaminE = 0.39;
    $greenPeas -> vitaminB1 = 0.34;
    $greenPeas -> vitaminB2 = 0.16;
    $greenPeas -> vitaminB3 = 2.7;
    $greenPeas -> vitaminC = 34.2;

    $carrot = new Product();
    $carrot -> name = "Marchewka";
    $carrot -> kcal = 33;
    $carrot -> protein = 1;
    $carrot -> fat = 0.2;
    $carrot -> carbohydrates = 8.7;
    $carrot -> dietaryFiber = 3.6;
    $carrot -> sodium = 82;
    $carrot -> potassium = 282;
    $carrot -> calcium = 36;
    $carrot -> phosphor = 32;
    $carrot -> magnesium = 16;
    $carrot -> vitaminA = 1656;
    $carrot -> vitaminD = 0;
    $carrot -> vitaminE = 0.51;
    $carrot -> vitaminB1 = 0.054;
    $carrot -> vitaminB2 = 0.054;
    $carrot -> vitaminB3 = 0.45;
    $carrot -> vitaminC = 3.4;

    $cucumber = new Product();
    $cucumber -> name = "Ogórek";
    $cucumber -> kcal = 14;
    $cucumber -> protein = 0.7;
    $cucumber -> fat = 0.1;
    $cucumber -> carbohydrates = 2.9;
    $cucumber -> dietaryFiber = 0.5;
    $cucumber -> sodium = 11;
    $cucumber -> potassium = 125;
    $cucumber -> calcium = 15;
    $cucumber -> phosphor = 23;
    $cucumber -> magnesium = 8;
    $cucumber -> vitaminA = 28;
    $cucumber -> vitaminD = 0;
    $cucumber -> vitaminE = 0.16;
    $cucumber -> vitaminB1 = 0.029;
    $cucumber -> vitaminB2 = 0.038;
    $cucumber -> vitaminB3 = 0.19;
    $cucumber -> vitaminC = 8;

    $redPaprika = new Product();
    $redPaprika -> name = "Czerwona papryka";
    $redPaprika -> kcal = 32;
    $redPaprika -> protein = 1.3;
    $redPaprika -> fat = 0.5;
    $redPaprika -> carbohydrates = 6.6;
    $redPaprika -> dietaryFiber = 2;
    $redPaprika -> sodium = 3;
    $redPaprika -> potassium = 255;
    $redPaprika -> calcium = 13;
    $redPaprika -> phosphor = 31;
    $redPaprika -> magnesium = 11;
    $redPaprika -> vitaminA = 528;
    $redPaprika -> vitaminD = 0;
    $redPaprika -> vitaminE = 2.9;
    $redPaprika -> vitaminB1 = 0.04;
    $redPaprika -> vitaminB2 = 0.12;
    $redPaprika -> vitaminB3 = 1.6;
    $redPaprika -> vitaminC = 144;

    $potato = new Product();
    $potato -> name = "Ziemniak";
    $potato -> kcal = 80;
    $potato -> protein = 1.9;
    $potato -> fat = 0.1;
    $potato -> carbohydrates = 18.3;
    $potato -> dietaryFiber = 1.5;
    $potato -> sodium = 7;
    $potato -> potassium = 443;
    $potato -> calcium = 4;
    $potato -> phosphor = 56;
    $potato -> magnesium = 23;
    $potato -> vitaminA = 1;
    $potato -> vitaminD = 0;
    $potato -> vitaminE = 0.05;
    $potato -> vitaminB1 = 0.087;
    $potato -> vitaminB2 = 0.046;
    $potato -> vitaminB3 = 1.46;
    $potato -> vitaminC = 14;

    $champignon = new Product();
    $champignon -> name = "Pieczarki";
    $champignon -> kcal = 21;
    $champignon -> protein = 2.7;
    $champignon -> fat = 0.4;
    $champignon -> carbohydrates = 2.6;
    $champignon -> dietaryFiber = 2;
    $champignon -> sodium = 6;
    $champignon -> potassium = 289;
    $champignon -> calcium = 11;
    $champignon -> phosphor = 165;
    $champignon -> magnesium = 12;
    $champignon -> vitaminA = 2;
    $champignon -> vitaminD = 1.94;
    $champignon -> vitaminE = 0.11;
    $champignon -> vitaminB1 = 0.023;
    $champignon -> vitaminB2 = 0.599;
    $champignon -> vitaminB3 = 4.81;
    $champignon -> vitaminC = 5;

    $pineapple = new Product();
    $pineapple -> name = "Ananas";
    $pineapple -> kcal = 56;
    $pineapple -> protein = 0.4;
    $pineapple -> fat = 0.2;
    $pineapple -> carbohydrates = 13.6;
    $pineapple -> dietaryFiber = 1.2;
    $pineapple -> sodium = 1;
    $pineapple -> potassium = 220;
    $pineapple -> calcium = 17;
    $pineapple -> phosphor = 12;
    $pineapple -> magnesium = 15;
    $pineapple -> vitaminA = 7;
    $pineapple -> vitaminD = 0;
    $pineapple -> vitaminE = 0.10;
    $pineapple -> vitaminB1 = 0.090;
    $pineapple -> vitaminB2 = 0.04;
    $pineapple -> vitaminB3 = 0.4;
    $pineapple -> vitaminC = 15;

    $avocado = new Product();
    $avocado -> name = "Awokado";
    $avocado -> kcal = 166;
    $avocado -> protein = 2;
    $avocado -> fat = 15.3;
    $avocado -> carbohydrates = 7.4;
    $avocado -> dietaryFiber = 3.3;
    $avocado -> sodium = 10;
    $avocado -> potassium = 600;
    $avocado -> calcium = 11;
    $avocado -> phosphor = 41;
    $avocado -> magnesium = 39;
    $avocado -> vitaminA = 7;
    $avocado -> vitaminD = 0;
    $avocado -> vitaminE = 1.3;
    $avocado -> vitaminB1 = 0.11;
    $avocado -> vitaminB2 = 0.12;
    $avocado -> vitaminB3 = 1.9;
    $avocado -> vitaminC = 8;

    $banana = new Product();
    $banana -> name = "Banana";
    $banana -> kcal = 99;
    $banana -> protein = 1;
    $banana -> fat = 0.3;
    $banana -> carbohydrates = 23.5;
    $banana -> dietaryFiber = 1.7;
    $banana -> sodium = 1;
    $banana -> potassium = 395;
    $banana -> calcium = 6;
    $banana -> phosphor = 20;
    $banana -> magnesium = 33;
    $banana -> vitaminA = 8;
    $banana -> vitaminD = 0;
    $banana -> vitaminE = 0.27;
    $banana -> vitaminB1 = 0.04;
    $banana -> vitaminB2 = 0.1;
    $banana -> vitaminB3 = 0.5;
    $banana -> vitaminC = 9;

    $peach = new Product();
    $peach -> name = "Brzoskwinia";
    $peach -> kcal = 50;
    $peach -> protein = 1;
    $peach -> fat = 0.2;
    $peach -> carbohydrates = 11.9;
    $peach -> dietaryFiber = 1.9;
    $peach -> sodium = 3;
    $peach -> potassium = 200;
    $peach -> calcium = 9;
    $peach -> phosphor = 24;
    $peach -> magnesium = 8;
    $peach -> vitaminA = 99;
    $peach -> vitaminD = 0;
    $peach -> vitaminE = 0.96;
    $peach -> vitaminB1 = 0.022;
    $peach -> vitaminB2 = 0.054;
    $peach -> vitaminB3 = 0.97;
    $peach -> vitaminC = 2.7;

    $blackBerries = new Product();
    $blackBerries -> name = "Czarne jagody";
    $blackBerries -> kcal = 51;
    $blackBerries -> protein = 0.8;
    $blackBerries -> fat = 0.6;
    $blackBerries -> carbohydrates = 12.2;
    $blackBerries -> dietaryFiber = 3.2;
    $blackBerries -> sodium = 1;
    $blackBerries -> potassium = 62;
    $blackBerries -> calcium = 15;
    $blackBerries -> phosphor = 14;
    $blackBerries -> magnesium = 2;
    $blackBerries -> vitaminA = 6;
    $blackBerries -> vitaminD = 0;
    $blackBerries -> vitaminE = 1.88;
    $blackBerries -> vitaminB1 = 0.018;
    $blackBerries -> vitaminB2 = 0.018;
    $blackBerries -> vitaminB3 = 0.28;
    $blackBerries -> vitaminC = 14.7;

    $gean = new Product();
    $gean -> name = "Czereśnie";
    $gean -> kcal = 63;
    $gean -> protein = 1;
    $gean -> fat = 0.3;
    $gean -> carbohydrates = 14.3;
    $gean -> dietaryFiber = 1.3;
    $gean -> sodium = 2;
    $gean -> potassium = 202;
    $gean -> calcium = 13;
    $gean -> phosphor = 16;
    $gean -> magnesium = 7;
    $gean -> vitaminA = 12;
    $gean -> vitaminD = 0;
    $gean -> vitaminE = 0.13;
    $gean -> vitaminB1 = 0.041;
    $gean -> vitaminB2 = 0.049;
    $gean -> vitaminB3 = 0.33;
    $gean -> vitaminC = 15;

    $apple = new Product();
    $apple -> name = "Jabłko";
    $apple -> kcal = 50;
    $apple -> protein = 0.4;
    $apple -> fat = 0.4;
    $apple -> carbohydrates = 12.1;
    $apple -> dietaryFiber = 2;
    $apple -> sodium = 2;
    $apple -> potassium = 134;
    $apple -> calcium = 4;
    $apple -> phosphor = 9;
    $apple -> magnesium = 3;
    $apple -> vitaminA = 4;
    $apple -> vitaminD = 0;
    $apple -> vitaminE = 0.49;
    $apple -> vitaminB1 = 0.034;
    $apple -> vitaminB2 = 0.026;
    $apple -> vitaminB3 = 0.17;
    $apple -> vitaminC = 9.2;

    $raspberry = new Product();
    $raspberry -> name = "Maliny";
    $raspberry -> kcal = 42;
    $raspberry -> protein = 1.3;
    $raspberry -> fat = 0.3;
    $raspberry -> carbohydrates = 12;
    $raspberry -> dietaryFiber = 6.7;
    $raspberry -> sodium = 2;
    $raspberry -> potassium = 203;
    $raspberry -> calcium = 35;
    $raspberry -> phosphor = 33;
    $raspberry -> magnesium = 20;
    $raspberry -> vitaminA = 3;
    $raspberry -> vitaminD = 0;
    $raspberry -> vitaminE = 0.48;
    $raspberry -> vitaminB1 = 0.018;
    $raspberry -> vitaminB2 = 0.062;
    $raspberry -> vitaminB3 = 0.26;
    $raspberry -> vitaminC = 31.4;

    $almonds = new Product();
    $almonds -> name = "Migdały";
    $almonds -> kcal = 597;
    $almonds -> protein = 20;
    $almonds -> fat = 52;
    $almonds -> carbohydrates = 20.5;
    $almonds -> dietaryFiber = 12.9;
    $almonds -> sodium = 14;
    $almonds -> potassium = 778;
    $almonds -> calcium = 239;
    $almonds -> phosphor = 454;
    $almonds -> magnesium = 269;
    $almonds -> vitaminA = 0;
    $almonds -> vitaminD = 0;
    $almonds -> vitaminE = 24;
    $almonds -> vitaminB1 = 0.21;
    $almonds -> vitaminB2 = 0.78;
    $almonds -> vitaminB3 = 3.4;
    $almonds -> vitaminC = 5.6;

    $walnut = new Product();
    $walnut -> name = "Orzech włoski";
    $walnut -> kcal = 657;
    $walnut -> protein = 16;
    $walnut -> fat = 60.3;
    $walnut -> carbohydrates = 18.0;
    $walnut -> dietaryFiber = 6.5;
    $walnut -> sodium = 4;
    $walnut -> potassium = 474;
    $walnut -> calcium = 87;
    $walnut -> phosphor = 332;
    $walnut -> magnesium = 99;
    $walnut -> vitaminA = 8;
    $walnut -> vitaminD = 0;
    $walnut -> vitaminE = 2.6;
    $walnut -> vitaminB1 = 0.39;
    $walnut -> vitaminB2 = 0.12;
    $walnut -> vitaminB3 = 1.19;
    $walnut -> vitaminC = 5.8;

    $sunflowerSeeds = new Product();
    $sunflowerSeeds -> name = "Nasiona słonecznika";
    $sunflowerSeeds -> kcal = 573;
    $sunflowerSeeds -> protein = 24.4;
    $sunflowerSeeds -> fat = 43.7;
    $sunflowerSeeds -> carbohydrates = 24.6;
    $sunflowerSeeds -> dietaryFiber = 6;
    $sunflowerSeeds -> sodium = 3;
    $sunflowerSeeds -> potassium = 793;
    $sunflowerSeeds -> calcium = 131;
    $sunflowerSeeds -> phosphor = 784;
    $sunflowerSeeds -> magnesium = 359;
    $sunflowerSeeds -> vitaminA = 5;
    $sunflowerSeeds -> vitaminD = 0;
    $sunflowerSeeds -> vitaminE = 27.81;
    $sunflowerSeeds -> vitaminB1 = 1.318;
    $sunflowerSeeds -> vitaminB2 = 0.263;
    $sunflowerSeeds -> vitaminB3 = 6.97;
    $sunflowerSeeds -> vitaminC = 0;

        $products = $_POST['products'];
        $quantity = $_POST['quantity'];

        $textNutrional = $products.' w ilości '. $quantity .' gram zawiera:';
        echo  "<div>$textNutrional</div>";

        if($products == "Jogurt naturalny 2%")

        {
          echo $naturalYoghurt -> kcal*($quantity/100) ." kcal,<br>";
          echo $naturalYoghurt -> protein*($quantity/100) ."g białka,<br>";
          echo $naturalYoghurt -> fat*($quantity/100) ."g tłuszczu,<br>";
          echo $naturalYoghurt -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
          echo $naturalYoghurt -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
          echo $naturalYoghurt -> sodium*($quantity/100) ."mg sodu,<br>";
          echo $naturalYoghurt -> potassium*($quantity/100) ."mg potasu,<br>";
          echo $naturalYoghurt -> calcium*($quantity/100) ."mg wapnia,<br>";
          echo $naturalYoghurt -> phosphor*($quantity/100) ."mg fosforu,<br>";
          echo $naturalYoghurt -> magnesium*($quantity/100) ."mg magnezu,<br>";
          echo $naturalYoghurt -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
          echo $naturalYoghurt -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
          echo $naturalYoghurt -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
          echo $naturalYoghurt -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
          echo $naturalYoghurt -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
          echo $naturalYoghurt -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
          echo $naturalYoghurt -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
        }

        elseif($products == "Serek wiejski 5%")

        {
          echo $cottageChesse -> kcal*($quantity/100) ." kcal,<br>";
          echo $cottageChesse -> protein*($quantity/100) ."g białka,<br>";
          echo $cottageChesse -> fat*($quantity/100) ."g tłuszczu,<br>";
          echo $cottageChesse -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
          echo $cottageChesse -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
          echo $cottageChesse -> sodium*($quantity/100) ."mg sodu,<br>";
          echo $cottageChesse -> potassium*($quantity/100) ."mg potasu,<br>";
          echo $cottageChesse -> calcium*($quantity/100) ."mg wapnia,<br>";
          echo $cottageChesse -> phosphor*($quantity/100) ."mg fosforu,<br>";
          echo $cottageChesse -> magnesium*($quantity/100) ."mg magnezu,<br>";
          echo $cottageChesse -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
          echo $cottageChesse -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
          echo $cottageChesse -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
          echo $cottageChesse -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
          echo $cottageChesse -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
          echo $cottageChesse -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
          echo $cottageChesse -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
        }

        elseif ($products == "Jajko") {
          {
            echo $egg -> kcal*($quantity/100) ." kcal,<br>";
            echo $egg -> protein*($quantity/100) ."g białka,<br>";
            echo $egg -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $egg -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $egg -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $egg -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $egg -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $egg -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $egg -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $egg -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $egg -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $egg -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $egg -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $egg -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $egg -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $egg -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $egg -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Pierś z kurczaka") {
          {
            echo $chickenBreastMeat -> kcal*($quantity/100) ." kcal,<br>";
            echo $chickenBreastMeat -> protein*($quantity/100) ."g białka,<br>";
            echo $chickenBreastMeat -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $chickenBreastMeat -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $chickenBreastMeat -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $chickenBreastMeat -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $chickenBreastMeat -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $chickenBreastMeat -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $chickenBreastMeat -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $chickenBreastMeat -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $chickenBreastMeat -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $chickenBreastMeat -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $chickenBreastMeat -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $chickenBreastMeat -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $chickenBreastMeat -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $chickenBreastMeat -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $chickenBreastMeat -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Dorsz") {
          {
            echo $codFish -> kcal*($quantity/100) ." kcal,<br>";
            echo $codFish -> protein*($quantity/100) ."g białka,<br>";
            echo $codFish -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $codFish -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $codFish -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $codFish -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $codFish -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $codFish -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $codFish -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $codFish -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $codFish -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $codFish -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $codFish -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $codFish -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $codFish -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $codFish -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $codFish -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Olej rzepakowy") {
          {
            echo $canolaOil -> kcal*($quantity/100) ." kcal,<br>";
            echo $canolaOil -> protein*($quantity/100) ."g białka,<br>";
            echo $canolaOil -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $canolaOil -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $canolaOil -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $canolaOil -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $canolaOil -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $canolaOil -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $canolaOil -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $canolaOil -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $canolaOil -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $canolaOil -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $canolaOil -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $canolaOil -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $canolaOil -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $canolaOil -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $canolaOil -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Oliwa z oliwek") {
          {
            echo $oliveOil -> kcal*($quantity/100) ." kcal,<br>";
            echo $oliveOil -> protein*($quantity/100) ."g białka,<br>";
            echo $oliveOil -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $oliveOil -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $oliveOil -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $oliveOil -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $oliveOil -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $oliveOil -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $oliveOil -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $oliveOil -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $oliveOil -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $oliveOil -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $oliveOil -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $oliveOil -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $oliveOil -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $oliveOil -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $oliveOil -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Kasza gryczana") {
          {
            echo $buckwheatGroats -> kcal*($quantity/100) ." kcal,<br>";
            echo $buckwheatGroats -> protein*($quantity/100) ."g białka,<br>";
            echo $buckwheatGroats -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $buckwheatGroats -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $buckwheatGroats -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $buckwheatGroats -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $buckwheatGroats -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $buckwheatGroats -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $buckwheatGroats -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $buckwheatGroats -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $buckwheatGroats -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $buckwheatGroats -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $buckwheatGroats -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $buckwheatGroats -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $buckwheatGroats -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $buckwheatGroats -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $buckwheatGroats -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Kasza jaglana") {
          {
            echo $milletGroats -> kcal*($quantity/100) ." kcal,<br>";
            echo $milletGroats -> protein*($quantity/100) ."g białka,<br>";
            echo $milletGroats -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $milletGroats -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $milletGroats -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $milletGroats -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $milletGroats -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $milletGroats -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $milletGroats -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $milletGroats -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $milletGroats -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $milletGroats -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $milletGroats -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $milletGroats -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $milletGroats -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $milletGroats -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $milletGroats -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Płatki owsiane") {
          {
            echo $oatFlakes -> kcal*($quantity/100) ." kcal,<br>";
            echo $oatFlakes -> protein*($quantity/100) ."g białka,<br>";
            echo $oatFlakes -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $oatFlakes -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $oatFlakes -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $oatFlakes -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $oatFlakes -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $oatFlakes -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $oatFlakes -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $oatFlakes -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $oatFlakes -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $oatFlakes -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $oatFlakes -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $oatFlakes -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $oatFlakes -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $oatFlakes -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $oatFlakes -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Pomidor") {
          {
            echo $tomato -> kcal*($quantity/100) ." kcal,<br>";
            echo $tomato -> protein*($quantity/100) ."g białka,<br>";
            echo $tomato -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $tomato -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $tomato -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $tomato -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $tomato -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $tomato -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $tomato -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $tomato -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $tomato -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $tomato -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $tomato -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $tomato -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $tomato -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $tomato -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $tomato -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Brokuł") {
          {
            echo $broccoli -> kcal*($quantity/100) ." kcal,<br>";
            echo $broccoli -> protein*($quantity/100) ."g białka,<br>";
            echo $broccoli -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $broccoli -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $broccoli -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $broccoli -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $broccoli -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $broccoli -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $broccoli -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $broccoli -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $broccoli -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $broccoli -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $broccoli -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $broccoli -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $broccoli -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $broccoli -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $broccoli -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Dynia") {
          {
            echo $pumpkin -> kcal*($quantity/100) ." kcal,<br>";
            echo $pumpkin -> protein*($quantity/100) ."g białka,<br>";
            echo $pumpkin -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $pumpkin -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $pumpkin -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $pumpkin -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $pumpkin -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $pumpkin -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $pumpkin -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $pumpkin -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $pumpkin -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $pumpkin -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $pumpkin -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $pumpkin -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $pumpkin -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $pumpkin -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $pumpkin -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Groszek zielony") {
          {
            echo $greenPeas -> kcal*($quantity/100) ." kcal,<br>";
            echo $greenPeas -> protein*($quantity/100) ."g białka,<br>";
            echo $greenPeas -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $greenPeas -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $greenPeas -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $greenPeas -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $greenPeas -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $greenPeas -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $greenPeas -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $greenPeas -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $greenPeas -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $greenPeas -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $greenPeas -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $greenPeas -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $greenPeas -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $greenPeas -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $greenPeas -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Marchewka") {
          {
            echo $carrot -> kcal*($quantity/100) ." kcal,<br>";
            echo $carrot -> protein*($quantity/100) ."g białka,<br>";
            echo $carrot -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $carrot -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $carrot -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $carrot -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $carrot -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $carrot -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $carrot -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $carrot -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $carrot -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $carrot -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $carrot -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $carrot -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $carrot -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $carrot -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $carrot -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Ogórek") {
          {
            echo $cucumber -> kcal*($quantity/100) ." kcal,<br>";
            echo $cucumber -> protein*($quantity/100) ."g białka,<br>";
            echo $cucumber -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $cucumber -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $cucumber -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $cucumber -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $cucumber -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $cucumber -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $cucumber -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $cucumber -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $cucumber -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $cucumber -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $cucumber -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $cucumber -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $cucumber -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $cucumber -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $cucumber -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Czerwona papryka") {
          {
            echo $redPaprika -> kcal*($quantity/100) ." kcal,<br>";
            echo $redPaprika -> protein*($quantity/100) ."g białka,<br>";
            echo $redPaprika -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $redPaprika -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $redPaprika -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $redPaprika -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $redPaprika -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $redPaprika -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $redPaprika -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $redPaprika -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $redPaprika -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $redPaprika -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $redPaprika -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $redPaprika -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $redPaprika -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $redPaprika -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $redPaprika -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Pieczarki") {
          {
            echo $champignon -> kcal*($quantity/100) ." kcal,<br>";
            echo $champignon -> protein*($quantity/100) ."g białka,<br>";
            echo $champignon -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $champignon -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $champignon -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $champignon -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $champignon -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $champignon -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $champignon -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $champignon -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $champignon -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $champignon -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $champignon -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $champignon -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $champignon -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $champignon -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $champignon -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Ziemniak") {
          {
            echo $potato -> kcal*($quantity/100) ." kcal,<br>";
            echo $potato -> protein*($quantity/100) ."g białka,<br>";
            echo $potato -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $potato -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $potato -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $potato -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $potato -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $potato -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $potato -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $potato -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $potato -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $potato -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $potato -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $potato -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $potato -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $potato -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $potato -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Ananas") {
          {
            echo $pineapple -> kcal*($quantity/100) ." kcal,<br>";
            echo $pineapple -> protein*($quantity/100) ."g białka,<br>";
            echo $pineapple -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $pineapple -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $pineapple -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $pineapple -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $pineapple -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $pineapple -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $pineapple -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $pineapple -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $pineapple -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $pineapple -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $pineapple -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $pineapple -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $pineapple -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $pineapple -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $pineapple -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Awokado") {
          {
            echo $avocado -> kcal*($quantity/100) ." kcal,<br>";
            echo $avocado -> protein*($quantity/100) ."g białka,<br>";
            echo $avocado -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $avocado -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $avocado -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $avocado -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $avocado -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $avocado -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $avocado -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $avocado -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $avocado -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $avocado -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $avocado -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $avocado -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $avocado -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $avocado -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $avocado -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Banan") {
          {
            echo $banana -> kcal*($quantity/100) ." kcal,<br>";
            echo $banana -> protein*($quantity/100) ."g białka,<br>";
            echo $banana -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $banana -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $banana -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $banana -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $banana -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $banana -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $banana -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $banana -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $banana -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $banana -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $banana -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $banana -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $banana -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $banana -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $banana -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Brzoskwinia") {
          {
            echo $peach -> kcal*($quantity/100) ." kcal,<br>";
            echo $peach -> protein*($quantity/100) ."g białka,<br>";
            echo $peach -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $peach -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $peach -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $peach -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $peach -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $peach -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $peach -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $peach -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $peach -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $peach -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $peach -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $peach -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $peach -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $peach -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $peach -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Czarne jagody") {
          {
            echo $blackBerries -> kcal*($quantity/100) ." kcal,<br>";
            echo $blackBerries -> protein*($quantity/100) ."g białka,<br>";
            echo $blackBerries -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $blackBerries -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $blackBerries -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $blackBerries -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $blackBerries -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $blackBerries -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $blackBerries -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $blackBerries -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $blackBerries -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $blackBerries -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $blackBerries -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $blackBerries -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $blackBerries -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $blackBerries -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $blackBerries -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Czereśnie") {
          {
            echo $gean -> kcal*($quantity/100) ." kcal,<br>";
            echo $gean -> protein*($quantity/100) ."g białka,<br>";
            echo $gean -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $gean -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $gean -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $gean -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $gean -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $gean -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $gean -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $gean -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $gean -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $gean -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $gean -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $gean -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $gean -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $gean -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $gean -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Jabłko") {
          {
            echo $apple -> kcal*($quantity/100) ." kcal,<br>";
            echo $apple -> protein*($quantity/100) ."g białka,<br>";
            echo $apple -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $apple -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $apple -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $apple -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $apple -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $apple -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $apple -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $apple -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $apple -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $apple -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $apple -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $apple -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $apple -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $apple -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $apple -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Maliny") {
          {
            echo $raspberry -> kcal*($quantity/100) ." kcal,<br>";
            echo $raspberry -> protein*($quantity/100) ."g białka,<br>";
            echo $raspberry -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $raspberry -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $raspberry -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $raspberry -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $raspberry -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $raspberry -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $raspberry -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $raspberry -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $raspberry -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $raspberry -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $raspberry -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $raspberry -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $raspberry -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $raspberry -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $raspberry -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Migdały") {
          {
            echo $almonds -> kcal*($quantity/100) ." kcal,<br>";
            echo $almonds -> protein*($quantity/100) ."g białka,<br>";
            echo $almonds -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $almonds -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $almonds -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $almonds -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $almonds -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $almonds -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $almonds -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $almonds -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $almonds -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $almonds -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $almonds -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $almonds -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $almonds -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $almonds -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $almonds -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Orzechy włoskie") {
          {
            echo $walnut -> kcal*($quantity/100) ." kcal,<br>";
            echo $walnut -> protein*($quantity/100) ."g białka,<br>";
            echo $walnut -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $walnut -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $walnut -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $walnut -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $walnut -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $walnut -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $walnut -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $walnut -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $walnut -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $walnut -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $walnut -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $walnut -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $walnut -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $walnut -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $walnut -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        elseif ($products == "Nasiona słonecznika") {
          {
            echo $sunflowerSeeds -> kcal*($quantity/100) ." kcal,<br>";
            echo $sunflowerSeeds -> protein*($quantity/100) ."g białka,<br>";
            echo $sunflowerSeeds -> fat*($quantity/100) ."g tłuszczu,<br>";
            echo $sunflowerSeeds -> carbohydrates*($quantity/100) ."g węglowodanów,<br>";
            echo $sunflowerSeeds -> dietaryFiber*($quantity/100) ."g błonnika pokarmowego,<br>";
            echo $sunflowerSeeds -> sodium*($quantity/100) ."mg sodu,<br>";
            echo $sunflowerSeeds -> potassium*($quantity/100) ."mg potasu,<br>";
            echo $sunflowerSeeds -> calcium*($quantity/100) ."mg wapnia,<br>";
            echo $sunflowerSeeds -> phosphor*($quantity/100) ."mg fosforu,<br>";
            echo $sunflowerSeeds -> magnesium*($quantity/100) ."mg magnezu,<br>";
            echo $sunflowerSeeds -> vitaminA*($quantity/100) ."μg witaminy A,<br>";
            echo $sunflowerSeeds -> vitaminD*($quantity/100) ."μg witaminy D,<br>";
            echo $sunflowerSeeds -> vitaminE*($quantity/100) ."mg witaminy E,<br>";
            echo $sunflowerSeeds -> vitaminB1*($quantity/100) ."mg witaminy B1,<br>";
            echo $sunflowerSeeds -> vitaminB2*($quantity/100) ."mg witaminy B2,<br>";
            echo $sunflowerSeeds -> vitaminB3*($quantity/100) ."mg witaminy B3,<br>";
            echo $sunflowerSeeds -> vitaminC*($quantity/100) ."mg witaminy C.<br>";
          }
        }

        // *"Wartość odżywcza wybranych produktów spożywczych i typowych potraw" prof. dr hab.H.Kunachowicz, dr I. Nadolna, inż. K. Iwanow, dr inż. B. Przygoda, Wydawnictwo lekarskie PZWL 2012, Wydanie VI uaktualnione i rozszerzone.
    ?>

  </body>
</html>
