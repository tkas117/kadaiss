<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題3 PHP基礎2-1</title>
  </head>
  <body>
    <?php
      $week = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
    ?>
  
    <ul>
      <li><?php echo $week[0]; ?></li>
      <li><?php echo $week[1]; ?></li>
      <li><?php echo $week[2]; ?></li>
      <li><?php echo $week[3]; ?></li>
      <li><?php echo $week[4]; ?></li>
      <li><?php echo $week[5]; ?></li>
      <li><?php echo $week[6]; ?></li>
    </ul>    
  </body>
</html>

    <!-- ↑配列の要素をループして表示するパターンも念の為、記載。--
      <ul>
        <？php
          foreach ($week as $day) {
            echo "<li>$day</li>";            
          }
        ?>    
    -->    