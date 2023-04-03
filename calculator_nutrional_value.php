<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diet - program for calculating the daily intake of nutritional values in products.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php

    require_once("nav.php");

  ?>

  <?php

    require_once("header.php");

  ?>

  <!-- <div class="diet__calculator">
    <span>Nutritional Value Calculator:</span>
  </div> -->

  <div class="container">

  <p class="h2">Menu</p>

  <table class="table table-hover text-center mb-3">
      <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Kcal</th>
            <th scope="col">Protein</th>
            <th scope="col">Fat</th>
            <th scope="col">Carbohydrates</th>
            <th scope="col">Dietary fiber</th>
            <th scope="col">Sodium</th>
            <th scope="col">Potassium</th>
            <th scope="col">Calcium</th>
            <th scope="col">Phosphor</th>
            <th scope="col">Magnesium</th>
          </tr>
      </thead>
    
      <tbody>
          <?php
          require_once "dbconnect.php";
              $sql = "SELECT * FROM `nutrional_values`";
              $result = mysqli_query($connection, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['quantity'] ?></td>
                      <td><?php echo $row['kcal'] ?></td>
                      <td><?php echo $row['protein'] ?></td>
                      <td><?php echo $row['fat'] ?></td>
                      <td><?php echo $row['carbohydrates'] ?></td>
                      <td><?php echo $row['dietaryfiber'] ?></td>
                      <td><?php echo $row['sodium'] ?></td>
                      <td><?php echo $row['potassium'] ?></td>
                      <td><?php echo $row['calcium'] ?></td>
                      <td><?php echo $row['phosphor'] ?></td>
                      <td><?php echo $row['magnesium'] ?></td>
                      <!-- <td>
                          <a href="edit_group.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                          <a href="delete_group.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                      </td> -->
                  </tr>
                  <tr>
                      
                      <!-- <td>
                          <a href="edit_group.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                          <a href="delete_group.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                      </td> -->
                  </tr>
                  <?php
              }
              ?>
      </tbody>
  </table>

  <table class="table table-hover text-center mb-3">
    <thead class="table-dark">
      <tr>
        <th scope="col">Vitamin A</th>
        <th scope="col">Vitamin D</th>
        <th scope="col">Vitamin E</th>
        <th scope="col">Vitamin B1</th>
        <th scope="col">Vitamin B2</th>
        <th scope="col">Vitamin B3</th>
        <th scope="col">Vitamin C</th>
      </tr>
    </thead>

    <tbody>
      <?php
      require_once "dbconnect.php";
          $sql = "SELECT * FROM `nutrional_values`";
          $result = mysqli_query($connection, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
              <td><?php echo $row['vitaminA'] ?></td>
              <td><?php echo $row['vitaminD'] ?></td>
              <td><?php echo $row['vitaminE'] ?></td>
              <td><?php echo $row['vitaminB1'] ?></td>
              <td><?php echo $row['vitaminB2'] ?></td>
              <td><?php echo $row['vitaminB3'] ?></td>
              <td><?php echo $row['vitaminC'] ?></td>
          </tr>
          <?php
          }
      ?>
    </tbody>
  </table>

<!-- <a href="add_new_group.php" class="btn btn-dark mb-3">Add New Group</a> -->
                      
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

  <!-- <img class="diet__image--food"src="img/zywnosc.jpg" alt="żywność" height="200px" width="200px"> -->

  <?php

    require_once("footer.php");

  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
