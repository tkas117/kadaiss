<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題12 PHP基礎6-2</title>
  </head>
  <body>
    <?php
      function max_number ($n1,$n2){
        if ($n1>$n2){
          return $n1;           
          }else {
          return $n2;
        }
      }

      $a = 9;
      $b = 21;

      echo "\$a = $a<br>";
      echo "\$b = $b<br>";

      echo "\$aと\$bのうち最大値は" . max_number($a, $b) . "です。";
    ?>  
  </body>
</html>