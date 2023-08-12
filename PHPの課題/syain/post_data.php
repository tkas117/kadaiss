<?php
require_once('common.php');

if (isset($_POST["status"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $age = $_POST["age"];
  $work = $_POST["work"];
  if ($_POST["status"] == "create") {

      // エラーチェック
      if (check_input($id, $name, $age, $work, $error) == false) {
          header("Location: syain_create.php?error={$error}&id={$id}&name={$name}&age={$age}&work={$work}");
          exit();
      }
      if ($db->idexist($id) == true) {
          $error = "既に使用されているIDです";
          header("Location: syain_create.php?error={$error}&id={$id}&name={$name}&age={$age}&work={$work}");
          exit();
      }
      if ($db->createsyain($id, $name, $age, $work) == false) {
          $error = "DBエラー";
          header("Location: syain_create.php?error={$error}&id={$id}&name={$name}&age={$age}&work={$work}");
          exit();
      }
      header("Location: index.php");
      exit();
  } elseif ($_POST["status"] == "update") {
    $id = $_POST["old_id"]; // 旧社員番号を使用
    $new_id = $_POST["id"]; // 新しい社員番号を取得
    $name = $_POST["name"];
    $age = $_POST["age"];
    $work = $_POST["work"];
    
    // エラーチェック
    if (check_input($new_id, $name, $age, $work, $error) == false) {
        header("Location: syain_update.php?id={$id}&error={$error}");
        exit();
    }

    // 既に使用されているIDかどうかチェック
    if ($new_id != $id && $db->idexist($new_id)) {
        $error = "既に使用されているIDです";
        header("Location: syain_update.php?id={$id}&error={$error}&name={$name}&age={$age}&work={$work}");
        exit();
    }

    // データベース更新処理
    if ($db->updatesyain($id, $new_id, $name, $age, $work)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "DBエラー";
        header("Location: syain_update.php?id={$id}&error={$error}");
        exit();
    }
}elseif ($_POST["status"] == "delete") {
    if ($db->deletesyain($id) == false) {
      $error = "DBエラー";
      header("Location: syain_delete.php?error={$error}&id={$id}");
      exit();
    }
    header("Location: index.php");
    exit();    
  }
}
?>

