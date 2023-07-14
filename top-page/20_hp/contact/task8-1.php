<?php
//直リンクされた場合index.htmlにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.html");
	exit();
}

//各項目を内容を取得
$name = $_POST['お名前'];
$kana = $_POST['フリガナ'];
$email = $_POST['メールアドレス'];
$phone = $_POST['電話番号'];
$inquiry = $_POST['お問い合わせ項目'];
$message = $_POST['お問い合わせ内容'];
$agreement = isset($_POST['personal_information']) ? $_POST['personal_information'] : '';


// 赤字でエラー表示するために、まず、連想配列を作成。
$errors = array();

// 必須項目のチェック
if (empty($name)) {
    $errors['name'] = "お名前は必須項目です。";
}

if (empty($kana)) {
    $errors['kana'] = "フリガナは必須項目です。";
}

if (empty($email)) {
    $errors['email'] = "メールアドレスは必須項目です。";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "正しい形式でメールアドレスを入力してください。";
}

if (empty($phone)) {
    $errors['phone'] = "電話番号は必須項目です。";
  } elseif (!preg_match('/^\d{10,11}$/', $phone)) {
    $errors['phone'] = "正しい形式で電話番号を入力してください。";
}

if (empty($inquiry) || $inquiry === '選択してください') {
  $errors['inquiry'] = "お問い合わせ項目は必須項目です。";
}

if (empty($message)) {
  $errors['message'] = "お問い合わせ内容は必須項目です。";
}

if (empty($agreement)) {
  $errors['agreement'] = "個人情報保護方針は必須項目です。";
}
?>

  <script>
    function changeTextColor(selectElement) {
      var selectedOption = selectElement.options[selectElement.selectedIndex];
      selectElement.style.color = "#000000";
      selectedOption.style.color = "#000000";
    }
  </script>

  <style>
    .error-message {
      color: red;
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
            <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>
            後ほど担当者よりご連絡させていただきます。</p>
          </div>
        </div>
      </section>
      <?php if (count($errors) > 0) {
        echo '<div class="error-message" style="text-align: center; color: red;">';
        echo "必須項目がすべて入力されていません。<br>";
        foreach ($errors as $error) {
        echo $error . "<br>";
        }   
        echo "</div>";
        } else {
        echo "<div style='text-align: center; color: green;'>";
        echo "お問い合わせありがとうございます。<br>";
        echo "下記の内容でよろしいでしょうか。<br>";  
        echo "</div>"; 
        }
      ?>
      <section class="sec_02">
        <div class="contact">
          <form action="task8-2.php" method="post">
            <table class="contact-table">
            <tr>
              <th class="contact-item">
                <label>お名前<span>必須</span></label>
              </th>
              <td class="contact-body">
                <input type="text" placeholder="山田太郎" name="お名前" class="form-text" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="error-message"><?php if(isset($errors['name'])) echo 'お名前は必須項目です'; ?></div>
              </td>
            </tr>
              <tr>
                <th class="contact-item">
                  <label>フリガナ<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="ヤマダタロウ" name="フリガナ" class="form-text" value = "<?php echo htmlspecialchars($kana,ENT_QUOTES,'UTF-8'); ?>">
                  <div class="error-message"><?php if(isset($errors['kana'])) echo 'フリガナは必須項目です。'; ?></div>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>メールアドレス<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="info@fast-creademy.jp" name="メールアドレス" class="form-text" value = "<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>">
                  <div class="error-message"><?php if(isset($errors['email'])) echo $errors['email']; ?></div>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>電話番号<span>必須</span></label>
                </th>
                <td class="contact-body">
                <input type="text" placeholder="info@fast-creademy.jp" name="電話番号" class="form-text" value = "<?php echo htmlspecialchars($phone,ENT_QUOTES,'UTF-8');?>">
                <div class="error-message"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></div>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>お問い合わせ項目<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <select name="お問い合わせ項目" class="form-select"     onchange="changeTextColor(this)">
                  <option <?php if ($inquiry === '選択してください') echo 'selected'; ?>>選択してください</option>
                  <option <?php if ($inquiry === 'ジムの入会') echo 'selected'; ?>>ジムの入会</option>
                  <option <?php if ($inquiry === '休会する') echo 'selected'; ?>>休会する</option>
                  <option <?php if ($inquiry === '退会する') echo 'selected'; ?>>退会する</option>
                  </select>
                  <div class="error-message"><?php if(isset($errors['inquiry'])) echo $errors['inquiry']; ?></div>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>お問い合わせ内容<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <textarea name="お問い合わせ内容" placeholder="こちらにお問い合わせ内容をご記入ください" class="form-textarea"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
                  <div class="error-message"><?php if(isset($errors['message'])) echo $errors['message']; ?></div>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>個人情報保護方針<span>必須</span></label>
                  </th>
                <td class="contact-body">
                <input type="checkbox" name="personal_information" value="private"<?php if ($agreement) echo ' checked'; ?>> <a class="information" href="#"><u>個人情報保護方針</u></a>に同意します。
                <div class="error-message"><?php if(isset($errors['agreement'])) echo $errors['agreement']; ?></div>
                </td>
              </tr>
            </table>
            <?php if (count($errors) > 0): ?>
              <input type='button' onclick='history.back()' value='戻る' class="contact-submit">
              <?php else: ?>               
              <button type='submit' name='submit' class="contact-submit">送信</button>
              <?php endif; ?>              
              <input type="hidden" name="お名前" value="<?php echo $name;?>">
              <input type="hidden" name="フリガナ" value="<?php echo $kana;?>">
              <input type="hidden" name="メールアドレス" value="<?php echo $email;?>">
              <input type="hidden" name="電話番号" value="<?php echo $phone;?>">
              <input type="hidden" name="お問い合わせ項目" value="<?php echo $inquiry;?>">
              <input type="hidden" name="お問い合わせ内容" value="<?php echo $message;?>">
              <input type="hidden" name="personal_information" value="<?php echo $agreement;?>">
          </form>       
        </div>
      </section>
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
