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

  <?php

    require_once("header.php");

  ?>

  <div class="diet__calculator">
    <span>Wybrany produkt:</span>
  </div>

  <?php

    $products = $_POST['products'];
    $quantity = $_POST['quantity'];

    class Product {

      public $name;
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

      function __construct($name, $kcal, $protein, $fat, $carbohydrates, $dietaryFiber, $sodium, $potassium, $calcium, $phosphor, $magnesium, $vitaminA, $vitaminD, $vitaminE, $vitaminB1, $vitaminB2, $vitaminB3, $vitaminC)
      {
        $this->name = $name;
        $this->kcal = $kcal;
        $this->protein = $protein;
        $this->fat = $fat;
        $this->carbohydrates = $carbohydrates;
        $this->dietaryFiber = $dietaryFiber;
        $this->sodium = $sodium;
        $this->potassium = $potassium;
        $this->calcium = $calcium;
        $this->phosphor = $phosphor;
        $this->magnesium = $magnesium;
        $this->vitaminA = $vitaminA;
        $this->vitaminD = $vitaminD;
        $this->vitaminE = $vitaminE;
        $this->vitaminB1 = $vitaminB1;
        $this->vitaminB2 = $vitaminB2;
        $this->vitaminB3 = $vitaminB3;
        $this->vitaminC = $vitaminC;
      }

      public function get_table() {

        $products = $_POST['products'];
        $quantity = $_POST['quantity'];

        $kcalM = ($this->kcal) * ($quantity/100);
        $proteinM = ($this->protein) * ($quantity/100);
        $fatM = ($this->fat) * ($quantity/100);
        $carbohydratesM = ($this->carbohydrates) * ($quantity/100);
        $dietaryFiberM = ($this->dietaryFiber) * ($quantity/100);
        $sodiumM = ($this->sodium) * ($quantity/100);
        $potassiumM = ($this->potassium) * ($quantity/100);
        $calciumM = ($this->calcium) * ($quantity/100);
        $phosphorM = ($this->phosphor) * ($quantity/100);
        $magnesiumM = ($this->magnesium) * ($quantity/100);
        $vitaminAM = ($this->vitaminA) * ($quantity/100);
        $vitaminDM = ($this->vitaminD) * ($quantity/100);
        $vitaminEM = ($this->vitaminE) * ($quantity/100);
        $vitaminB1M = ($this->vitaminB1) * ($quantity/100);
        $vitaminB2M = ($this->vitaminB2) * ($quantity/100);
        $vitaminB3M = ($this->vitaminB3) * ($quantity/100);
        $vitaminCM = ($this->vitaminC) * ($quantity/100);

        $textNutrional = 'Produkt '. $products.' w ilości '. $quantity .' gram zawiera:';

        echo  "<div>$textNutrional</div>";

        echo "<table>
           <tr>
             <td><b>Energia (kcal)</b></td>
             <td><b>Białko (g)</b></td>
             <td><b>Tłuszcz (g)</b></td>
             <td><b>Węglowodany (g)</b></td>
             <td><b>Błonnik pokarmowy (g)</b></td>
           </tr>";

           echo "
             <tr>
               <td>$kcalM</td>
               <td>$proteinM</td>
               <td>$fatM</td>
               <td>$carbohydratesM</td>
               <td>$dietaryFiberM</td>
             </tr>";

           echo "</table>";

           echo "<table>
              <tr>
                <td><b>Sód (mg)</b></td>
                <td><b>Potas (mg)</b></td>
                <td><b>Wapń (mg)</b></td>
                <td><b>Fosfor (mg)</b></td>
                <td><b>Magnez (mg)</b></td>
              </tr>";

              echo "
                <tr>
                  <td>$sodiumM</td>
                  <td>$potassiumM</td>
                  <td>$calciumM</td>
                  <td>$phosphorM</td>
                  <td>$magnesiumM</td>
                </tr>";

              echo "</table>";

              echo "<table>
                 <tr>
                   <td><b>Witamina A (μg)</b></td>
                   <td><b>Witamina D (μg)</b></td>
                   <td><b>Witamina E (mg)</b></td>
                 </tr>";

                 echo "
                   <tr>
                     <td>$vitaminAM</td>
                     <td>$vitaminDM</td>
                     <td>$vitaminEM</td>
                   </tr>";

                 echo "</table>";

                 echo "<table>
                    <tr>
                      <td><b>Witamina B1 (mg)</b></td>
                      <td><b>Witamina B2 (mg)</b></td>
                      <td><b>Witamina B3 (mg)</b></td>
                      <td><b>Witamina C (mg)</b></td>
                    </tr>";

                    echo "
                      <tr>
                        <td>$vitaminB1M</td>
                        <td>$vitaminB2M</td>
                        <td>$vitaminB3M</td>
                        <td>$vitaminCM</td>
                      </tr>";

                    echo "</table>";
      }

    }

    $naturalYoghurt = new Product("Jogurt naturalny 2%", 60, 4.3, 2.0, 6.2, 0, 63, 200, 170, 122, 17, 16, 0.03, 0.03, 0.046, 0.216, 0.14, 1);

    $cottageChesse = new Product("Serek wiejski 5%", 133, 18.7, 4.7, 3.7, 0, 44, 113, 94, 227, 9, 39, 0.09, 0.08, 0.030, 0.450, 0.18, 0);

    $egg = new Product("Jajko", 139, 12.5, 9.7, 0.6, 0, 141, 133, 47, 204, 12, 272, 1.7, 0.73, 0.064, 0.542, 0.06, 0);

    $chickenBreastMeat = new Product("Pierś z kurczaka", 99, 21.5, 1.3, 0, 0, 55, 385, 5, 240, 33, 6, 0, 0.3, 0.09, 0.153, 12.44, 0);

    $codFish = new Product("Dorsz", 78, 17.7, 0.7, 0, 0, 72, 356, 9, 184, 25, 7, 1, 0.44, 0.055, 0.046, 2.3, 2);

    $canolaOil = new Product("Olej rzepakowy", 884, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 26.73, 0, 0, 0, 0);

    $oliveOil = new Product("Oliwa z oliwek", 884, 0, 99.6, 0.02, 0, 1, 0, 0, 1, 0, 0, 0, 11.95, 0, 0, 0, 0);

    $buckwheatGroats = new Product("Kasza gryczana", 347, 12.6, 3.1, 69.3, 5.9, 5, 443, 25, 459, 218, 0, 0, 0.31, 0.541, 0.127, 1.95, 0);

    $milletGroats = new Product("Kasza jaglana", 352, 10.5, 2.9, 71.6, 3.2, 5, 220, 10, 240, 100, 0, 0, 0.10, 0.730, 0.380, 2.3, 0);

    $oatFlakes = new Product("Płatki owsiane", 379, 11.9, 7.2, 69.3, 6.9, 5, 379, 54, 433, 129, 0, 0, 1.8, 0.462, 0.151, 0.87, 0);

    $tomato = new Product("Pomidor", 20, 0.9, 0.2, 4.1, 1.2, 8, 282, 9, 21, 8, 107, 0, 1.22, 0.064, 0.042, 1, 23);

    $broccoli = new Product("Brokuł", 31, 3, 0.4, 5.2, 2.5, 7, 385, 48, 66, 23, 153, 0, 1.3, 0.07, 0.12, 0.6, 83);

    $pumpkin = new Product("Dynia", 33, 1.3, 0.3, 7.7, 2.8, 4, 278, 66, 43, 14, 496, 0, 1.03, 0.050, 0.12, 0.5, 8);

    $greenPeas = new Product("Groszek zielony", 87, 6.7, 0.4, 17, 6, 2, 353, 22, 122, 29, 68, 0, 0.39, 0.34, 0.16, 2.7, 34.2);

    $carrot = new Product("Marchewka", 33, 1, 0.2, 8.7, 3.6, 82, 282, 36, 32, 16, 1656, 0, 0.51, 0,054, 0.054, 0.45, 3.4);

    $cucumber = new Product("Ogórek", 14, 0.7, 0.1, 2.9, 0.5, 11, 125, 15, 23, 8, 28, 0, 0.16, 0.029, 0.038, 0.19, 8);

    $redPaprika = new Product("Czerwona papryka", 32, 1.3, 0.5, 6.6, 2, 3, 255, 13, 31, 11, 528, 0, 2.9, 0.04, 0.12, 1.6, 144);

    $potato = new Product("Ziemniak", 80, 1.9, 0.1, 18.3, 1.5, 7, 443, 4, 56, 23, 1, 0, 0.05, 0.087, 0.046, 1.46, 14);

    $champignon = new Product("Pieczarki", 21, 2.7, 0.4, 2.6, 2, 6, 289, 11, 165, 12, 2, 1.94, 0.11, 0.023, 0.599, 4.81, 5);

    $pineapple = new Product("Ananas", 56, 0.4, 0.2, 13.6, 1.2, 1, 220, 17, 12, 15, 7, 0, 0.10, 0.090, 0.04, 0.4, 15);

    $avocado = new Product("Awokado", 166, 2, 15.3, 7.4, 3.3, 10, 600, 11, 41, 39, 7, 0, 1.3, 0.11, 0.12, 1.9, 8);

    $banana = new Product("Banan", 99, 1, 0.3, 23.5, 1.7, 1, 395, 6, 20, 33, 8, 0, 0.27, 0.04, 0.1, 0.5, 9);

    $peach = new Product("Brzoskwinia", 50, 1, 0.2, 11.9, 1.9, 3, 200, 9, 24, 8, 99, 0, 0.96, 0.022, 0.054, 0.97, 2.7);

    $blackBerries = new Product("Czarne jagody", 51, 0.8, 0.6, 12.2, 3.2, 1, 62, 15, 14, 2, 6, 0, 1.88, 0.018, 0.018, 0.28, 14.7);

    $gean = new Product("Czereśnie", 63, 1, 0.3, 14.3, 1.3, 2, 202, 13, 16, 7, 12, 0, 0.13, 0.041, 0.049, 0.33, 15);

    $apple = new Product("Jabłko", 50, 0.4, 0.4, 12.1, 2, 2, 134, 4, 9, 3, 4, 0, 0.49, 0.034, 0.026, 0.17, 9.2);

    $raspberry = new Product("Maliny", 42, 1.3, 0.3, 12, 6.7, 2, 203, 35, 33, 20, 3, 0, 0.48, 0.018, 0.062, 0.26, 31.4);

    $almonds = new Product("Migdały", 597, 20, 52, 20.5, 12.9, 14, 778, 239, 454, 269, 0, 0, 24, 0.21, 0.78, 3.4, 5.6);

    $walnut = new Product("Orzech włoski", 657, 16, 60.3, 18.0, 6.5, 4, 474, 87, 332, 99, 8, 0, 2.6, 0.39, 0.12, 1.19, 5.8);

    $sunflowerSeeds = new Product("Nasiona słonecznika", 573, 24.4, 43.7, 24.6, 6, 3, 793, 131, 784, 359, 5, 0, 27.81, 1.318, 0.263, 6.97, 0);


        if($products == "jogurt naturalny 2%")

          {
            echo '<img src="img/yogurt.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $naturalYoghurt->get_table();
          }

        elseif($products == "serek wiejski 5%")

          {
            echo '<img src="img/cottage_chesse.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $cottageChesse->get_table();
          }

        elseif ($products == "jajko")

          {
            echo '<img src="img/egg.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $egg->get_table();
          }

        elseif ($products == "pierś z kurczaka")

          {
            echo '<img src="img/chicken_breast.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $chickenBreastMeat->get_table();
          }

        elseif ($products == "dorsz")

          {
            echo '<img src="img/cod_fish.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $codFish->get_table();
          }

        elseif ($products == "olej rzepakowy")

          {
            echo '<img src="img/canola_oil.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $canolaOil->get_table();
          }

        elseif ($products == "oliwa z oliwek")

          {
            echo '<img src="img/olive_oil.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $oliveOil->get_table();
          }

        elseif ($products == "kasza gryczana")

          {
            echo '<img src="img/buckwheat_groats.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $buckwheatGroats->get_table();
          }

        elseif ($products == "kasza jaglana")

          {
            echo '<img src="img/millet.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $milletGroats->get_table();
          }

        elseif ($products == "płatki owsiane")

          {
            echo '<img src="img/oat.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $oatFlakes->get_table();
          }

        elseif ($products == "pomidor")

          {
            echo '<img src="img/tomato.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $tomato->get_table();
          }

        elseif ($products == "brokuł")

          {
            echo '<img src="img/broccoli.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $broccoli->get_table();
          }

        elseif ($products == "dynia")

          {
            echo '<img src="img/pumpkin.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $pumpkin->get_table();
          }

        elseif ($products == "groszek zielony")

          {
            echo '<img src="img/peas.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $greenPeas->get_table();
          }

        elseif ($products == "marchewka")

          {
            echo '<img src="img/carrot.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $carrot->get_table();
          }

        elseif ($products == "ogórek")

          {
            echo '<img src="img/cucumber.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $cucumber->get_table();
          }

        elseif ($products == "czerwona papryka")

          {
            echo '<img src="img/paprika.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $redPaprika->get_table();
          }

        elseif ($products == "pieczarki")

          {
            echo '<img src="img/champignon.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $champignon->get_table();
          }

        elseif ($products == "ziemniak")

          {
            echo '<img src="img/potato.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $potato->get_table();
          }

        elseif ($products == "ananas")

          {
            echo '<img src="img/pineapple.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $pineapple->get_table();
          }

        elseif ($products == "awokado")

          {
            echo '<img src="img/avocado.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $avocado->get_table();
          }

        elseif ($products == "banan")

          {
            echo '<img src="img/banana.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $banana->get_table();
          }

        elseif ($products == "brzoskwinia")

          {
            echo '<img src="img/peach.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $peach->get_table();
          }

        elseif ($products == "czarne jagody")

          {
            echo '<img src="img/black_berries.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $blackBerries->get_table();
          }

        elseif ($products == "czereśnie")

          {
            echo '<img src="img/gean.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $gean->get_table();
          }

        elseif ($products == "jabłko")

          {
            echo '<img src="img/apple.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $apple->get_table();
          }

        elseif ($products == "maliny")

          {
            echo '<img src="img/raspberry.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $raspberry->get_table();
          }

        elseif ($products == "migdały")

          {
            echo '<img src="img/almonds.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $almonds->get_table();
          }

        elseif ($products == "orzechy włoskie")

          {
            echo '<img src="img/walnut.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $walnut->get_table();
          }

        elseif ($products == "nasiona słonecznika")

          {
            echo '<img src="img/sunflower_seeds.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
            echo $sunflowerSeeds->get_table();
          }

        // *"Wartość odżywcza wybranych produktów spożywczych i typowych potraw" prof. dr hab.H.Kunachowicz, dr I. Nadolna, inż. K. Iwanow, dr inż. B. Przygoda, Wydawnictwo lekarskie PZWL 2012, Wydanie VI uaktualnione i rozszerzone.
    ?>

    <?php

      require_once("footer.php");

    ?>

  </body>
</html>
