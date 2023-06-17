<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題9 PHP基礎5-2</title>
  </head>
  <body>
    <?php
      $week = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');

        echo '<ul>';
          $i = 0;
          while ($i < count($week)) {
          echo '<li>' . $week[$i] . '</li>';
          $i++;
          }
        echo '</ul>';
  ?>
  </body>
</html>