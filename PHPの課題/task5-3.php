<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題10 PHP基礎5-3</title>
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
    $items = [
      ['name' => '鉛筆', 'price' => 100, 'tax included' => 110],
      ['name' => '消しゴム', 'price' => 200, 'tax included' => 220],
      ['name' => '定規', 'price' => 300, 'tax included' => 330]
    ];
  ?>

   <table>
      <tr>
      <?php foreach (['商品', '価格', '税込価格'] as $header): ?>
        <th><?= $header ?></th>
      <?php endforeach; ?>    
      </tr>
      <?php foreach ($items as $item): ?>
      <tr>
        <td><?= $item['name'];?></td>
        <td><?= $item['price'];?>円</td>
        <td><?= $item['tax included'];?>円</td>    
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>