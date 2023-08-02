<?php
require_once('common.php');

$id = $_GET['id'];

// 提供されたIDを使用して社員の詳細情報を取得
$member = $db->getsyain($id);

if ($member) {
  show_top('社員情報');
  show_syain($member);
  show_down(true);
} else {
  echo "エラー: 社員情報が見つかりません。";
}
?>

