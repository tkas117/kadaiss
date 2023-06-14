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
      // 定数
      define('TAX_RATE', 0.1); // 消費税率

      // 変数
      $pencilPrice = 100; // 鉛筆の値段（税抜き）
      $eraserPrice = 200; // 消しゴムの値段（税抜き）

      // 計算
      $pencilTaxIncluded = $pencilPrice * (1 + TAX_RATE); // 鉛筆の税込み価格
      $eraserTaxIncluded = $eraserPrice * (1 + TAX_RATE); // 消しゴムの税込み価格

      // 結果の表示
      echo "<p>現在、消費税は" . (TAX_RATE * 100) . "%です。</p>";
      echo "<p>鉛筆が" . $pencilPrice . "円で税込" . $pencilTaxIncluded . "円です。</p>";
      echo "<p>消しゴムが" . $eraserPrice . "円で税込" . $eraserTaxIncluded . "円です。</p>";
    ?>
  </body>
</html>