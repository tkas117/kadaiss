<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題5PHP基礎3-1
  </title>
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
    // 連想配列(商品と価格)
      $pencil = ['name' => '鉛筆', 'price' => 100];
      $eraser = ['name' => '消しゴム', 'price' => 200];

    // 鉛筆の税込価格と1Dzの価格の演算子
      $pencil['tax included'] = $pencil['price'] * 1.1;
      $pencil['Price of 1Dz'] = $pencil['tax included'] * 12;
    
    // 消しゴムの税込価格と1Dzの価格の演算子 
      $eraser['tax included'] = $eraser['price'] * 1.1;
      $eraser['Price of 1Dz'] = $eraser['tax included'] * 12;
    ?> 

    <table>
      <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
        <th>1Dzの価格</th>
      </tr>
      <tr>
        <td><?= $pencil['name']; ?></td>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['tax included']; ?>円</td>
        <td><?= $pencil['Price of 1Dz']; ?>円</td>
      </tr>
      <tr>
        <td><?= $eraser['name']; ?></td>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['tax included']; ?>円</td>
        <td><?= $eraser['Price of 1Dz']; ?>円</td>
      </tr>
    </table> 
    <p>　消費税は10%です。</p>
  </body>
</html>