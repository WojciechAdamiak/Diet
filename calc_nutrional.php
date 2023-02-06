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
    $naturalYoghurt -> quantity = 0;
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
    $naturalYoghurt -> vitaminB3: 0.14;
    $naturalYoghurt -> vitaminC: 1;

    echo 'Produkt to '.$naturalYoghurt -> name . ' zawiera w 100 gramach następujące wartości składników odżywczych: ' . $naturalYoghurt -> kcal . ' kcal, ' . $naturalYoghurt -> protein . ' g białka,' . $naturalYoghurt -> fat .
    ' g tłuszczu,' . $naturalYoghurt -> carbohydrates . 'g węglowodanów,' . $naturalYoghurt -> dietaryFiber . 'g błonnika pokarmowego,' . $naturalYoghurt -> sodium . ' sodu, '   ;


    public Function showProduct() {
      return $this->name;
    }
        $products = $_POST['products'];
        $quantity = $_POST['quantity'];
        echo  "<h1>"."Podałeś napis"." ".$products." ".$quantity." "."</h1>";
    ?>

  </body>
</html>
