<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diet - program for calculating the daily intake of nutritional values in products.</title>
  <link rel="stylesheet" href="css/style.css">
</head>

  <body>

  <?php

    require_once("nav.php");

  ?>

  <?php

    require_once("header.php");

  ?>

<?php
require_once "dbconnect.php";

$selectedProduct = "SELECT * FROM `nutrional_values`";

if(isset($_POST['submit'])) {
  $products = $_POST['products'];
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $kcal = $_POST['kcal'] * ($quantity/100);
  $protein = $_POST['protein'] * ($quantity/100);
  $fat = $_POST['fat'];
  $carbohydrates= $_POST['carbohydrates'];
  $dietaryFiber = $_POST['dietaryfiber'];
  $sodium = $_POST['sodium'];
  $potassium = $_POST['potassium'];
  $calcium = $_POST['calcium'];
  $phosphor = $_POST['phosphor'];
  $magnesium = $_POST['magnesium'];
  $vitaminA = $_POST['vitaminA'];
  $vitaminD = $_POST['vitaminD'];
  $vitaminE = $_POST['vitaminE'];
  $vitaminB1 = $_POST['vitaminB1'];
  $vitaminB2 = $_POST['vitaminB2'];
  $vitaminB3 = $_POST['vitaminB3'];
  $vitaminC = $_POST['vitaminC'];

  // $kcalM = ($this->kcal) * ($quantity/100);

  $sql = "INSERT INTO `menu` (`id`, `name`, `quantity`, `kcal`, `protein`, `fat`, `carbohydrates`, `dietaryfiber`, `sodium`, `potassium`, `calcium`, `phosphor`, `magnesium`, `vitaminA`, `vitaminD`, `vitaminE`, `vitaminB1`, `vitaminB2`, `vitaminB3`, `vitaminC` ) VALUES (NULL, '$name', '$quantity', '$kcal', '$protein', '$fat', '$carbohydrates', '$dietaryFiber', '$sodium', 
  '$potassium', '$calcium', '$phosphor', '$magnesium', '$vitaminA', '$vitaminD', '$vitaminE', '$vitaminB1', '$vitaminB2', '$vitaminB3',
  '$vitaminC')";

  $result = mysqli_query($connection, $sql);

  $textNutrional = 'Product '. $products.' in quantity '. $quantity .' gram includes:';

  if($result) {
    header("Location: index.php?msg=New product created succesfully");

    echo  "<div>$textNutrional</div>";
  }
  else {
    echo "Failed: " . mysqli_error($connection);
  }
}

?>

  <div class="diet__calculator">
    <span>Selected product:</span>
  </div>

  <form method="post" action="" id="form" name="form_products" >
    <label for="quantity">Enter the quantity of product in grams:</label><br />
    <input type="number" name="quantity" id="quantity" value="100"><br />

    <label for="products">Select a product from the list:</label><br />
    <select id="products" name="products">
      <optgroup label="Animal products">
        <option value="Natural yoghurt 2%">Natural yoghurt 2%</option>
        <option value="Cottage chesse 5%">Cottage chesse 5%</option>
        <option value="Egg">Egg</option>
        <option value="Chicken breast">Chicken breast</option>
        <option value="Cod fish">Cod fish</option>
      </optgroup>
      <optgroup label="Oils">
        <option value="Canola oil">Canola oil</option>
        <option value="Olive oil">Olive oil</option>
      </optgroup>
      <optgroup label="Grain products">
        <option value="Buckwheat groats">Buckwheat groats</option>
        <option value="Millet groats">Millet groats</option>
        <option value="Oat flakes">Oat flakes</option>
      </optgroup>
      <optgroup label="Vegetables">
        <option value="Tomato">Tomato</option>
        <option value="Broccoli">Broccoli</option>
        <option value="Pumpkin">Pumpkin</option>
        <option value="Green peas">Green peas</option>
        <option value="Carrot">Carrot</option>
        <option value="Cucumber">Cucumber</option>
        <option value="Red paprika">Red paprika</option>
        <option value="Potato">Potato</option>
        <option value="Champignon">Champignon</option>
      </optgroup>
      <optgroup label="Fruits">
        <option value="Pineapple">Pineapple</option>
        <option value="Avocado">Avocado</option>
        <option value="Banana">Banana</option>
        <option value="Peach">Peach</option>
        <option value="Black berries">Black berries</option>
        <option value="Gean">Gean</option>
        <option value="Apple">Apple</option>
        <option value="Raspberry">Raspberry</option>
      </optgroup>
      <optgroup label="Nuts and seeds">
        <option value="Almonds">Almonds</option>
        <option value="Walnut">Walnut</option>
        <option value="Sunflower seeds">Sunflower seeds</option>
      </optgroup>
    </select><br />
    <input type="submit" value="Add new" name="submit">
  </form>

  <?php

    // class Product {

    //   public $name;
    //   public $kcal;
    //   public $protein;
    //   public $fat;
    //   public $carbohydrates;
    //   public $dietaryFiber;
    //   public $sodium;
    //   public $potassium;
    //   public $calcium;
    //   public $phosphor;
    //   public $magnesium;
    //   public $vitaminA;
    //   public $vitaminD;
    //   public $vitaminE;
    //   public $vitaminB1;
    //   public $vitaminB2;
    //   public $vitaminB3;
    //   public $vitaminC;

      // function __construct($name, $kcal, $protein, $fat, $carbohydrates, $dietaryFiber, $sodium, $potassium, $calcium, $phosphor, $magnesium, $vitaminA, $vitaminD, $vitaminE, $vitaminB1, $vitaminB2, $vitaminB3, $vitaminC)
      // {
      //   $this->name = $name;
      //   $this->kcal = $kcal;
      //   $this->protein = $protein;
      //   $this->fat = $fat;
      //   $this->carbohydrates = $carbohydrates;
      //   $this->dietaryFiber = $dietaryFiber;
      //   $this->sodium = $sodium;
      //   $this->potassium = $potassium;
      //   $this->calcium = $calcium;
      //   $this->phosphor = $phosphor;
      //   $this->magnesium = $magnesium;
      //   $this->vitaminA = $vitaminA;
      //   $this->vitaminD = $vitaminD;
      //   $this->vitaminE = $vitaminE;
      //   $this->vitaminB1 = $vitaminB1;
      //   $this->vitaminB2 = $vitaminB2;
      //   $this->vitaminB3 = $vitaminB3;
      //   $this->vitaminC = $vitaminC;
      // }

      // public function get_table() {

      //   $products = $_POST['products'];
      //   $quantity = $_POST['quantity'];

      //   $kcalM = ($this->kcal) * ($quantity/100);
      //   $proteinM = ($this->protein) * ($quantity/100);
      //   $fatM = ($this->fat) * ($quantity/100);
      //   $carbohydratesM = ($this->carbohydrates) * ($quantity/100);
      //   $dietaryFiberM = ($this->dietaryFiber) * ($quantity/100);
      //   $sodiumM = ($this->sodium) * ($quantity/100);
      //   $potassiumM = ($this->potassium) * ($quantity/100);
      //   $calciumM = ($this->calcium) * ($quantity/100);
      //   $phosphorM = ($this->phosphor) * ($quantity/100);
      //   $magnesiumM = ($this->magnesium) * ($quantity/100);
      //   $vitaminAM = ($this->vitaminA) * ($quantity/100);
      //   $vitaminDM = ($this->vitaminD) * ($quantity/100);
      //   $vitaminEM = ($this->vitaminE) * ($quantity/100);
      //   $vitaminB1M = ($this->vitaminB1) * ($quantity/100);
      //   $vitaminB2M = ($this->vitaminB2) * ($quantity/100);
      //   $vitaminB3M = ($this->vitaminB3) * ($quantity/100);
      //   $vitaminCM = ($this->vitaminC) * ($quantity/100);

      //   $textNutrional = 'Product '. $products.' in quantity '. $quantity .' gram includes:';

      //   echo  "<div>$textNutrional</div>";
                  
    //   }

    // }

        // if($products == "Natural yoghurt 2%")

        //   {
        //     echo '<img src="img/yogurt.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $naturalYoghurt->get_table();
        //   }

        // elseif($products == "Cottage chesse 5%")

        //   {
        //     echo '<img src="img/cottage_chesse.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $cottageChesse->get_table();
        //   }

        // elseif ($products == "Egg")

        //   {
        //     echo '<img src="img/egg.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $egg->get_table();
        //   }

        // elseif ($products == "Chicken breast")

        //   {
        //     echo '<img src="img/chicken_breast.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $chickenBreastMeat->get_table();
        //   }

        // elseif ($products == "Cod fish")

        //   {
        //     echo '<img src="img/cod_fish.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $codFish->get_table();
        //   }

        // elseif ($products == "Canola oil")

        //   {
        //     echo '<img src="img/canola_oil.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $canolaOil->get_table();
        //   }

        // elseif ($products == "Olive oil")

        //   {
        //     echo '<img src="img/olive_oil.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $oliveOil->get_table();
        //   }

        // elseif ($products == "Buckwheat groats")

        //   {
        //     echo '<img src="img/buckwheat_groats.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $buckwheatGroats->get_table();
        //   }

        // elseif ($products == "Millet groats")

        //   {
        //     echo '<img src="img/millet.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $milletGroats->get_table();
        //   }

        // elseif ($products == "Oat flakes")

        //   {
        //     echo '<img src="img/oat.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $oatFlakes->get_table();
        //   }

        // elseif ($products == "Tomato")

        //   {
        //     echo '<img src="img/tomato.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $tomato->get_table();
        //   }

        // elseif ($products == "Broccoli")

        //   {
        //     echo '<img src="img/broccoli.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $broccoli->get_table();
        //   }

        // elseif ($products == "Pumpkin")

        //   {
        //     echo '<img src="img/pumpkin.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $pumpkin->get_table();
        //   }

        // elseif ($products == "Green peas")

        //   {
        //     echo '<img src="img/peas.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $greenPeas->get_table();
        //   }

        // elseif ($products == "Carrot")

        //   {
        //     echo '<img src="img/carrot.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $carrot->get_table();
        //   }

        // elseif ($products == "Cucumber")

        //   {
        //     echo '<img src="img/cucumber.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $cucumber->get_table();
        //   }

        // elseif ($products == "Red paprika")

        //   {
        //     echo '<img src="img/paprika.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $redPaprika->get_table();
        //   }

        // elseif ($products == "Champignon")

        //   {
        //     echo '<img src="img/champignon.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $champignon->get_table();
        //   }

        // elseif ($products == "Potato")

        //   {
        //     echo '<img src="img/potato.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $potato->get_table();
        //   }

        // elseif ($products == "Pineapple")

        //   {
        //     echo '<img src="img/pineapple.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $pineapple->get_table();
        //   }

        // elseif ($products == "Avocado")

        //   {
        //     echo '<img src="img/avocado.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $avocado->get_table();
        //   }

        // elseif ($products == "Banana")

        //   {
        //     echo '<img src="img/banana.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $banana->get_table();
        //   }

        // elseif ($products == "Peach")

        //   {
        //     echo '<img src="img/peach.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $peach->get_table();
        //   }

        // elseif ($products == "Black berries")

        //   {
        //     echo '<img src="img/black_berries.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $blackBerries->get_table();
        //   }

        // elseif ($products == "Gean")

        //   {
        //     echo '<img src="img/gean.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $gean->get_table();
        //   }

        // elseif ($products == "Apple")

        //   {
        //     echo '<img src="img/apple.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $apple->get_table();
        //   }

        // elseif ($products == "Raspberry")

        //   {
        //     echo '<img src="img/raspberry.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $raspberry->get_table();
        //   }

        // elseif ($products == "Almonds")

        //   {
        //     echo '<img src="img/almonds.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $almonds->get_table();
        //   }

        // elseif ($products == "Walnut")

        //   {
        //     echo '<img src="img/walnut.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $walnut->get_table();
        //   }

        // elseif ($products == "Sunflower seeds")

        //   {
        //     echo '<img src="img/sunflower_seeds.jpg" border="1px" width="260" height="200" style="margin-bottom: 12px">';
        //     echo $sunflowerSeeds->get_table();
        //   }

        // *"Wartość odżywcza wybranych produktów spożywczych i typowych potraw" prof. dr hab.H.Kunachowicz, dr I. Nadolna, inż. K. Iwanow, dr inż. B. Przygoda, Wydawnictwo lekarskie PZWL 2012, Wydanie VI uaktualnione i rozszerzone.
    ?>

    <?php

      require_once("footer.php");

    ?>

  </body>
</html>
