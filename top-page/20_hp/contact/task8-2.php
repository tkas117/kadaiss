<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>完了ページ|トレース用</title>
  <style>
    body {
      text-align: center;
    }
  </style>
</head>
<body>
<?php
// 送信されたデータの取得
$name = $_POST['お名前'];
$kana = $_POST['フリガナ'];
$email = $_POST['メールアドレス'];
$phone = $_POST['電話番号'];
$inquiry = $_POST['お問い合わせ項目'];
$message = $_POST['お問い合わせ内容'];
$agreement = isset($_POST['personal_information']) ? $_POST['personal_information'] : '';

// 送信完了メッセージの表示
echo '<h1>送信完了しました。</h1>';
echo '<div>お名前: ' . $name . '</div>';
echo '<div>フリガナ: ' . $kana . '</div>';
echo '<div>メールアドレス: ' . $email . '</div>';
echo '<div>電話番号: ' . $phone . '</div>';
echo '<div>お問い合わせ項目: ' . $inquiry . '</div>';
echo '<div>お問い合わせ内容: ' . $message . '</div>';
echo '<div>個人情報保護方針に同意: ' . ($agreement ? '同意する' : '') . '</div>';
?>
</body>
</html>
