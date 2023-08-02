<?php
require_once('common.php');

// フォームからのデータを受け取る
if (isset($_POST["id"])) {
  $id = $_POST["id"];
}
if (isset($_POST["name"])) {
  $name = $_POST["name"];
}
if (isset($_POST["age"])) {
  $age = $_POST["age"];
}
if (isset($_POST["work"])) {
  $work = $_POST["work"];
}

show_top('社員情報の更新確認'); // 更新確認画面のタイトル表示

// 更新確認のフォームを表示
echo <<<CONFIRM_FORM
<form action="post_data.php" method="post">
  <h2>以下の情報で更新しますか？</h2>
  <p>社員番号: {$id}</p>
  <p>名前: {$name}</p>
  <p>年齢: {$age}</p>
  <p>勤務形態: {$work}</p>
  <input type="hidden" name="id" value="{$id}">
  <input type="hidden" name="name" value="{$name}">
  <input type="hidden" name="age" value="{$age}">
  <input type="hidden" name="work" value="{$work}">
  <input type="hidden" name="status" value="update"> <!-- 更新処理を識別するための値 -->
  <button type="submit" name="button" value="update">更新する</button>
  <button type="button" onclick="history.back();">戻る</button>
</form>
CONFIRM_FORM;

show_down(true);
?>
