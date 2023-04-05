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
          <th scope="col">Vitamin A</th>
          <th scope="col">Vitamin D</th>
          <th scope="col">Vitamin E</th>
          <th scope="col">Vitamin B1</th>
          <th scope="col">Vitamin B2</th>
          <th scope="col">Vitamin B3</th>
          <th scope="col">Vitamin C</th>
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
