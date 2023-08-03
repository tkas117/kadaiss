<?php
require_once('common.php');

$id = $_GET['id'];

// 提供されたIDを使用して社員の詳細情報を取得
$member = $db->getsyain($id);

if ($member) {
  show_top('社員情報');

  // // リンクを追加して更新画面への遷移を実現
  // echo '<a href="syain_update.php?id=' . $member['id'] . '">社員情報の更新</a>';
  
  show_syain($member);
  show_down(true);
} else {
  echo "エラー: 社員情報が見つかりません。";
}
?>


