<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題4 PHP基礎2-2</title>
  </head>
  <body>
    <style>
      table {
        border-collapse: collapse;
      }
      td, th {
        border: 1px solid black;
        padding: 5px;
      }
    </style>

    <?php
      $pencil = ['name' => '鉛筆', 'price' => 100, 'tax included' => 110];
      $eraser = ['name' => '消しゴム', 'price' => 200, 'tax included' => 220];
      $ruler = ['name' => '定規', 'price' => 300, 'tax included' => 330];
    ?>

    <table>
      <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
      </tr>
      <tr>
        <td><?= $pencil['name']; ?></td>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['tax included']; ?>円</td>
      </tr>
      <tr>
        <td><?= $eraser['name']; ?></td>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['tax included']; ?>円</td>
      </tr>
      <tr>
        <td><?= $ruler['name']; ?></td>
        <td><?= $ruler['price']; ?>円</td>
        <td><?= $ruler['tax included']; ?>円</td>
      </tr>
    </table>
  </body>
</html>
    
    
