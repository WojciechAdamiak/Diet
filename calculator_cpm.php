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
    <span>Caloric requirement calculator: </span>
  </div>

  <div class="promo__container">
    <form action="calculator_cpm_result.php" method="post">
      <label for="weight">Enter your weight in kg:</label><br />
      <input type="number" name="weight" id="weight" value="50"><br />
      <label for="height">Enter your height in cm:</label><br />
      <input type="number" name="height" id="height" value="150"><br />
      <label for="age">Enter your age in years:</label><br />
      <input type="number" name="age" id="age" value="30"><br /><br />
      <label for="gender">Enter your gender:</label><br />
      <input type="radio" name="gender" value="Man" checked id="Man">Man<br />
      <input type="radio" name="gender" value="Woman" id="Woman">Woman<br /><br />
      <label for="activity">What is your level of physical activity:</label><br />
      <select id="activity" name="activity">
        <option value="Sedentary lifestyle">Sedentary lifestyle</option>
        <option value="Low physical activity">Low physical activity</option>
        <option value="Moderate physical activity">Moderate physical activity</option>
        <option value="Active lifestyle">Active lifestyle</option>
        <option value="Extremely high physical activity">Extremely high physical activity</option>
      </select><br />
      <input type="submit" value="Send">
    </form>
  </div>

  <img class="diet__image--calc" src="img/oblicz.jpg" alt="oblicz" height="200px" width="200px">

  <?php

    require_once("footer.php");

  ?>

</body>

</html>
