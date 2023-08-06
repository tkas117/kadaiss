<!-- <?php
require_once('common.php');

// GET パラメータからデータを取得（利用可能な場合）
$error = isset($_GET['error']) ? $_GET['error'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$work = isset($_GET['work']) ? $_GET['work'] : '';

show_top('社員情報の追加');
show_create($id, $name, $age, $work, $error); // フォームにデータを渡す
show_down(true);
?> -->

<?php
require_once('common.php');

// GET パラメータからデータを取得（利用可能な場合）
$error = isset($_GET['error']) ? $_GET['error'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$work = isset($_GET['work']) ? $_GET['work'] : '';

show_top('社員情報の追加');

if ($error && strpos($error, '既に使用されているIDです') !== false) {
    // IDが重複しているエラーの場合は、ID以外のデータを保持せず、IDだけリセット
    show_create('', $name, $age, $work, $error);
} else {
    show_create($id, $name, $age, $work, $error);
}

show_down(true);
?>
