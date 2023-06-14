<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題6 PHP基礎4-1</title>
  </head>
  <body>
    <?php
    // 1～100％の範囲を、まず指定。
    $a = mt_rand(1,100); 

    if ($a <= 5) {
      $fortune = "大凶";
    } elseif ($a <= 20) {
      $fortune = "凶";
    } elseif ($a <= 50) {
      $fortune = "吉";
    } elseif ($a <= 80) {
      $fortune = "中吉";
    } else {
      $fortune = "大吉";
    }
    ?>  

    <h1>今日の運勢は"<?= $fortune; ?>"です。</h1>
  </body>
</html>