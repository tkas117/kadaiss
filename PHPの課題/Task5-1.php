<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題8 PHP基礎5-1</title>
  </head>
  <body>
    <style>
      td {
        padding: 5px;
      }
    </style>

    <table>
      <?php
        for ($i = 1; $i <= 9; $i++) {
          echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
              echo "<td>" . $i . "×" . $j . "＝" . ($i * $j) . "</td>";
            }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>