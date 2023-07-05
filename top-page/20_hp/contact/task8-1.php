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
      <section class="sec_02">
        <div class="contact">
          <form action="task8-1.php">
            <table class="contact-table">
              <tr>
                <th class="contact-item">
                  <label>お名前<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="山田太郎" name="お名前" class="form-text">
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>フリガナ<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="ヤマダタロウ" name="フリガナ" class="form-text">
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>メールアドレス<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="info@fast-creademy.jp" name="メールアドレス" class="form-text">
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>電話番号<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <input type="text" placeholder="info@fast-creademy.jp" name="電話番号" class="form-text">
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>お問い合わせ項目<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <select name="お問い合わせ項目" class="form-select">
                    <option>選択してください</option>
                    <option>ジムの入会</option>
                    <option>休会する</option>
                    <option>退会する</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>お問い合わせ内容<span>必須</span></label>
                </th>
                <td class="contact-body">
                  <textarea name="お問い合わせ内容" placeholder="こちらにお問い合わせ内容をご記入ください" class="form-textarea"></textarea>
                </td>
              </tr>
              <tr>
                <th class="contact-item">
                  <label>個人情報保護方針<span>必須</span></label>
                  </th>
                <td class="contact-body">
                  <input type="checkbox"  name="personal information" value="private">
                  <a class="information" href="#"><u>個人情報保護方針</u></a>に同意します。
                </td>
              </tr>
            </table>
            <input class="contact-submit" type="submit" value="確認" >
          </form>
        </div>
      </section>
      </input>
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
    </main>
    <footer>
      <p>ここには会社名が入ります©copyright.</p>
    </footer>
    </main> 
  </body>
</html>
