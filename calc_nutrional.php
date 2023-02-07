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


    ?>

  </body>
</html>
