<!-- <?php
require_once('common.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $member = $db->getsyain($id);

    if ($member) {
        if (isset($_POST['delete'])) {
            $db->deletesyain($id);
            header("Location: index.php"); 
            exit();
        }

        show_top('社員情報の削除確認');
        echo "<p>以下の社員情報を削除しますか？</p>";
        show_syain($member);

        echo '<form method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<button type="submit" name="delete">削除する</button>';
        echo '</form>';

        show_down(true);
    } else {
        echo "エラー: 社員情報が見つかりません。";
    }
} else {
    echo "エラー: 削除する社員のIDが指定されていません。";
}
?> -->


<?php
require_once('common.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    if ($db->deletesyain($id)) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "削除に失敗しました。";
    }
} else {
    echo "エラー: 削除する社員のIDが指定されていません。";
}
?>
