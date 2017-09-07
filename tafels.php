<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $tafel = 5;
      $einde = 11;
      for($x = 1; $x < $einde; $x++) {
        echo $x . " x " . $tafel . " = " . $x * $tafel . '<br>';
      }

      echo "<br>";

      $x = 1;
      while($x < $einde) {
        echo "(while)  " . $x . " x " . $tafel . " = " . $x * $tafel . '<br>';
        $x++;
      }
     ?>
  </body>
</html>
