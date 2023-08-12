<?php
require_once('common.php');

$id = $_GET['id'];
$member = $db->getsyain($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_id = $_POST["id"];
    $new_name = $_POST["name"];
    $new_age = $_POST["age"];
    $new_work = $_POST["work"];

    // エラーチェック
    if (check_input($new_id, $new_name, $new_age, $new_work, $error) == false) {
        header("Location: syain_update.php?id={$id}&error={$error}&name={$new_name}&age={$new_age}&work={$new_work}");
        exit();
    }

    // 既に使用されているIDかどうかチェック
    if ($new_id != $id && $db->idexist($new_id)) {
        $error = "既に使用されているIDです";
        // エラーメッセージとともにリダイレクト（すべてのデータを保持）
        header("Location: syain_update.php?id={$id}&error={$error}&name={$new_name}&age={$new_age}&work={$new_work}");
        exit();
    }

    // データベース更新処理
    if ($db->updatesyain($id, $new_id, $new_name, $new_age, $new_work)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "DBエラー";
        // エラーメッセージとともにリダイレクト（すべてのデータを保持）
        header("Location: syain_update.php?id={$id}&error={$error}&name={$new_name}&age={$new_age}&work={$new_work}");
        exit();
    }
}

show_top('社員情報の更新');

$error = get_error();
if ($error && strpos($error, '既に使用されているIDです') !== false) {
    // エラーメッセージとともにリダイレクトされた場合、すべてのデータを保持
    show_update(['id' => $id, 'name' => $_GET['name'], 'age' => $_GET['age'], 'work' => $_GET['work']]);
} else {
    show_update($member);
}

show_down(true);
?>

<!-- <?php
require_once('common.php');

$id = $_GET['id'];
$member = $db->getsyain($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_id = $_POST["id"];
    $new_name = $_POST["name"];
    $new_age = $_POST["age"];
    $new_work = $_POST["work"];

    // 既に使用されているIDかどうかチェック
    if ($new_id != $id && $db->idexist($new_id)) {
        $error = "既に使用されているIDです";
        // エラーメッセージとともにリダイレクト（ID以外の項目をリセット）
        header("Location: syain_update.php?id={$id}&error={$error}&name=&age=&work=");
        exit();
    }

    // エラーチェック
    if (check_input($new_id, $new_name, $new_age, $new_work, $error) == false) {
        // エラーメッセージとともにリダイレクト（他の項目を保持）
        header("Location: syain_update.php?id={$id}&error={$error}&name={$new_name}&age={$new_age}&work={$new_work}");
        exit();
    }

    // データベース更新処理
    if ($db->updatesyain($id, $new_id, $new_name, $new_age, $new_work)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "DBエラー";
        // エラーメッセージとともにリダイレクト（他の項目を保持）
        header("Location: syain_update.php?id={$id}&error={$error}&name={$new_name}&age={$new_age}&work={$new_work}");
        exit();
    }
}

show_top('社員情報の更新');

$error = get_error();
if ($error && strpos($error, '既に使用されているIDです') !== false) {
    // エラーメッセージとともにリダイレクトされた場合、ID以外の項目をリセット
    show_update(['id' => '', 'name' => $_GET['name'], 'age' => $_GET['age'], 'work' => $_GET['work']]);
} else {
    show_update($member);
}

show_down(true);
?> -->







