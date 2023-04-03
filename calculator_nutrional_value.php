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
                $sql = "SELECT * FROM `menu`";
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
            $sql = "SELECT * FROM `menu`";
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

    <a href="calc_nutrional.php" class="btn btn-dark mb-3">Add New</a>
                      
</div>

  <!-- <img class="diet__image--food"src="img/zywnosc.jpg" alt="żywność" height="200px" width="200px"> -->

  <?php

    require_once("footer.php");

  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
