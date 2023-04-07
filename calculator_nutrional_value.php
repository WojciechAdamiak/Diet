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

  <div class="container">

  <h2>Menu</h2>

    <table>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity (g)</th>
        <th scope="col">Energy (kcal)</th>
        <th scope="col">Protein (g)</th>
        <th scope="col">Fat (g)</th>
        <th scope="col">Carbohydrates (g)</th>
        <th scope="col">Dietary fiber (g)</th>
        <th scope="col">Sodium (mg)</th>
        <th scope="col">Potassium (mg)</th>
        <th scope="col">Calcium (mg)</th>
        <th scope="col">Phosphor (mg)</th>
        <th scope="col">Magnesium (mg)</th>
      </tr>

      <?php
        require_once "dbconnect.php";
            $sql = "SELECT * FROM `menu`";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
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
                  </tr>
                <?php
            }
        ?>
    </table>

    <table>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Vitamin A (μg)</th>
          <th scope="col">Vitamin D (μg)</th>
          <th scope="col">Vitamin E (mg)</th>
          <th scope="col">Vitamin B1 (mg)</th>
          <th scope="col">Vitamin B2 (mg)</th>
          <th scope="col">Vitamin B3 (mg)</th>
          <th scope="col">Vitamin C (mg)</th>
        </tr>

        <?php
        require_once "dbconnect.php";
            $sql = "SELECT * FROM `menu`";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
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
    </table>

    <a href="add_new_product.php" class="promo__button">Add New Product</a>
                      
</div>

  <?php

    require_once("footer.php");

  ?>

</body>
</html>
