<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Diet - a program for calculating the daily intake of nutritional values in products.</title>
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
    <span>Contact: </span>
  </div>

  <form action="">
    <label for="name">Email:</label><br />
    <input type="text" name="name" id="name"><br />

    <label for="contact">Message:</label> <br />
    <input type="textarea" name="contact" id="contact"><br />
    <input type="submit" value="Send">
  </form>

  <?php

    require_once("footer.php");

  ?>

</body>
</html>
