<?php
require_once('common.php');

$id = $_GET['id'];

$member = $db->getsyain($id);

if ($member) {
  show_top('社員情報の追加');
  show_form($member['id'], $member['name'], $member['age'], $member['work'], $member['id'], "update", "登録");
  show_down(true); // フォームの下に戻るボタンを表示
} else {
  echo "エラー: 社員情報が見つかりません。";
}
?>
