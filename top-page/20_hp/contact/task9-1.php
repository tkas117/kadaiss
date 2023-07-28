<?php
  session_start();
  try {
    $pdo = new PDO(
      'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
      'root',
      'root',
      [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 例外モードを有効にするために、この行を追加します
      ]
    );
  
    // $pdo->query("DROP TABLE IF EXISTS inquiries");
    // $pdo->query(
    //   "CREATE TABLE inquiries(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     name  VARCHAR(128),
    //     kana  VARCHAR(128),
    //     email  VARCHAR(128),
    //     phone  VARCHAR(128),
    //     inquiry  VARCHAR(128),
    //     message  TEXT,
    //     agreement  VARCHAR(128),
    //     created_at DATETIME
    //   )"
    // );
   
      // セッションに保存したデータを変数に代入
      $name = $_SESSION['name'];
      $kana = $_SESSION['kana'];
      $email = $_SESSION['email'];
      $phone = $_SESSION['phone'];
      $inquiry = $_SESSION['inquiry'];
      $message = $_SESSION['message'];
      $agreement = $_SESSION['agreement'];
      $created_at = $_SESSION['created_at'];

      // セッションに保存したデータをデータベースに挿入
      $stmt = $pdo->prepare("INSERT INTO inquiries (name, kana, email, phone, inquiry, message, agreement, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->execute([$name, $kana, $email, $phone, $inquiry, $message, $agreement, $created_at]);    
    

  }catch(PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
  }
?>

<style>
  .sec_01_title p{
    color: blue;
    font-size: 20px;
  }
</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>contactページ|トレース用</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stylesheet.css">
   </head>
  <body>
    <header>
      <div class="header">
        <h1>ここには会社名が入ります</h1>
        <a href="#" class="head_btn01">ボタン01</a>
        <a href="#" class="head_btn02">ボタン02</a>
      </div>
    </header>
    <div class="mv">
      <div class="mv_btns">
        <a href="#" class="mv_btn01">メニュー01</a>
        <a href="#" class="mv_btn02">メニュー02</a>
        <a href="#" class="mv_btn03">メニュー03</a>
      </div>
      <img src="mv.png" alt="mvの写真">  
    </div>
    <main>
      <section class="sec_01">
        <div class="wrapper">
          <div class="sec_01_title">
            <h1>お問い合わせ</h1>
            <p>送信完了しました。</p>       
      <section class="sec_btn">
        <div class="wrapper">
          <div class="btns">
            <div class="btn_box01">
              <h3>こちらからご購入ください</h3>
              <a href="#" class="btn">ネットショップ</a>
            </div>
            <div class="btn_box02">
              <h3>お気軽にお問い合わせください</h3>
              <a href="#" class="btn">お問い合わせ</a>
            </div>
          </div>         
        </div>        
      </section>
      <section class="sec_05">
        <div class="sec_05_box">
          <h3>ここには会社名が入ります</h3>
          <p>住所が入ります<br>
          03-1234-5678<br>
          営業時間: 9:00～18:00
        </p>
        </div>
      </section>
      <section class="link">
        <div class="link_btns">
          <div class="link_row">
            <a href="#" class="link_btn">リンク01</a>
            <a href="#" class="link_btn">リンク02</a>
            <a href="#" class="link_btn">リンク03</a>
            <a href="#" class="link_btn">リンク04</a>
            <a href="#" class="link_btn">リンク05</a>
            <div>
              <a href="#" class="link_btn">リンク06</a>
            </div>
          </div>         
            <a href="#" class="link_btn1">リンク07</a> 
          </div>
        </div>               
      </section>
      <footer>
        <p>ここには会社名が入ります©copyright.</p>
      </footer>
    </main> 
  </body>
</html>
