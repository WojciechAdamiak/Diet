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

  <div class="diet__calculator">
    <span>Nutritional Value Calculator:</span>
  </div>

  <form method="post" action="calc_nutrional.php" id="form" name="form_products" >
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

  <img class="diet__image--food"src="img/zywnosc.jpg" alt="żywność" height="200px" width="200px">

  <?php

    require_once("footer.php");

  ?>

</body>
</html>
