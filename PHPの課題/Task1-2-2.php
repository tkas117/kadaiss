<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題2PHP基礎1-2</title>
  </head>
  <body>
    <?php
      $taxRate = 0.1; // 消費税率（10％）

      $pencilPrice = 100; // 鉛筆の価格
      $pencilPriceTaxIncluded = $pencilPrice * (1 + $taxRate); // 税込価格
    
      $eraserPrice = 200; // 消しゴムの価格
      $eraserPriceTaxIncluded = $eraserPrice * (1 + $taxRate); // 税込価格
    
      // 文章の表示
      echo "<p>現在、消費税は10%です。</p>";
      echo "<p>鉛筆が" . $pencilPrice . "円で税込" . $pencilPriceTaxIncluded . "円です。</p>";
      echo "<p>消しゴムが" . $eraserPrice . "円で税込" . $eraserPriceTaxIncluded . "円です。</p>";
    ?>
  </body>
</html>