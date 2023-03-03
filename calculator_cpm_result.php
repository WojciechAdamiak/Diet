<!DOCTYPE html>
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

  <Header>
    <h2 class="promo__heading">Diet - program do obliczania dziennego spożycia wartości odżywczych w produktach.</h2>
  </Header>

  <div class="diet__calculator">
    <span>Wybrano następujące dane: </span>
  </div>

<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $bmrWoman = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
    $bmrMan = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
    $activity = $_POST['activity'];

    echo  "<div>Waga: $weight kg<br></div>";
    echo  "<div>Wzrost: $height cm<br></div>";
    echo  "<div>Wiek: $age lat<br></div";
    echo  "<div>Płeć: $gender<br></div";
    echo  "<div>Aktywność: $activity<br></div>";

    if($gender == "Mężczyzna")
    {
      echo "<br>Podstawowa przemiana materii wynosi: <strong>$bmrMan kcal</strong>, natomiast całkowita przemiana materii to: ";

      if($activity == "Siedzący tryb życia")
        {
          $cpmManA = $bmrMan*1.4;
          echo "<strong>$cpmManA kcal.</strong>";
        }
      elseif($activity == "Niska aktywność fizyczna")
        {
          $cpmManB = $bmrMan*1.5;
          echo "<strong>$cpmManB kcal.</strong>";
        }
      elseif($activity == "Umiarkowana aktywność fizyczna")
        {
          $cpmManC = $bmrMan*1.7;
          echo "<strong>$cpmManC kcal.</strong>";
        }
      elseif($activity == "Aktywny styl życia")
        {
          $cpmManD = $bmrMan*2.0;
          echo "<strong>$cpmManD kcal.</strong>";
        }
      elseif($activity == "Ekstremalnie wysoka aktywność fizyczna")
        {
          $cpmManE = $bmrMan*2.2;
          echo "<strong>$cpmManE kcal.</strong>";
        }
    }
    elseif($gender == "Kobieta")
    {
      echo "<br>Podstawowa przemiana materii wynosi: $bmrWoman kcal, natomiast całkowita przemiana materii to: ";

      if($activity == "Siedzący tryb życia")
        {
          $cpmWomanA = $bmrWoman*1.4;
          echo "<strong>$cpmWomanA kcal.</strong>";
        }
      elseif($activity == "Niska aktywność fizyczna")
        {
          $cpmWomanB = $bmrWoman*1.5;
          echo "<strong>$cpmWomanB kcal.</strong>";
        }
      elseif($activity == "Umiarkowana aktywność fizyczna")
        {
          $cpmWomanC = $bmrWoman*1.7;
          echo "<strong>$cpmWomanC kcal.</strong>";
        }
      elseif($activity == "Aktywny styl życia")
        {
          $cpmWomanD = $bmrWoman*2.0;
          echo "<strong>$cpmWomanD kcal.</strong>";
        }
      elseif($activity == "Ekstremalnie wysoka aktywność fizyczna")
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
