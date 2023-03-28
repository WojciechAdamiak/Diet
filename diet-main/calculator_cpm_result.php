<!DOCTYPE html>
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
    <span>The following data was selected: </span>
  </div>

<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bmrWoman = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
    $bmrMan = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
    $activity = $_POST['activity'];

    echo  "<div>Weight: $weight kg<br></div>";
    echo  "<div>Height: $height cm<br></div>";
    echo  "<div>Age: $age lat<br></div";
    echo  "<div>Gender: $gender<br></div";
    echo  "<div>Activity: $activity<br></div>";

    if($gender == "Man")
    {
      echo "<br>Basal metabolism is: <strong>$bmrMan kcal</strong>, while the total metabolism is: ";

      if($activity == "Sedentary lifestyle")
        {
          $cpmManA = $bmrMan*1.4;
          echo "<strong>$cpmManA kcal.</strong>";
        }
      elseif($activity == "Low physical activity")
        {
          $cpmManB = $bmrMan*1.5;
          echo "<strong>$cpmManB kcal.</strong>";
        }
      elseif($activity == "Moderate physical activity")
        {
          $cpmManC = $bmrMan*1.7;
          echo "<strong>$cpmManC kcal.</strong>";
        }
      elseif($activity == "Active lifestyle")
        {
          $cpmManD = $bmrMan*2.0;
          echo "<strong>$cpmManD kcal.</strong>";
        }
      elseif($activity == "Extremely high physical activity")
        {
          $cpmManE = $bmrMan*2.2;
          echo "<strong>$cpmManE kcal.</strong>";
        }
    }
    elseif($gender == "Woman")
    {
      echo "<br>Basal metabolism is: $bmrWoman kcal, while the total metabolism is: ";

      if($activity == "Sedentary lifestyle")
        {
          $cpmWomanA = $bmrWoman*1.4;
          echo "<strong>$cpmWomanA kcal.</strong>";
        }
      elseif($activity == "Low physical activity")
        {
          $cpmWomanB = $bmrWoman*1.5;
          echo "<strong>$cpmWomanB kcal.</strong>";
        }
      elseif($activity == "Moderate physical activity")
        {
          $cpmWomanC = $bmrWoman*1.7;
          echo "<strong>$cpmWomanC kcal.</strong>";
        }
      elseif($activity == "Active lifestyle")
        {
          $cpmWomanD = $bmrWoman*2.0;
          echo "<strong>$cpmWomanD kcal.</strong>";
        }
      elseif($activity == "Extremely high physical activity")
        {
          $cpmWomanE = $bmrWoman*2.2;
          echo "<strong>$cpmWomanE kcal.</strong>";
        };

    }

?>

  <?php

    require_once("footer.php");

  ?>

</body>

</html>
