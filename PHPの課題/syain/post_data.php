<?php
require_once('common.php');

if (isset($_POST["status"])) {
  if ($_POST["status"] == "create") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $work = $_POST["work"];
    
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db->idexist($id) == true) {
      $error = "既に使用されているIDです";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db->createsyain($id, $name, $age, $work) == false) {
      $error = "DBエラー";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    header("Location: index.php");
    exit();
  } elseif ($_POST["status"] == "update") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $work = $_POST["work"];
    
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("Location: syain_update.php?error={$error}&id={$id}");
      exit();
    }
    if ($db->idexist($id) == false) {
      $error = "IDが存在しません";
      header("Location: syain_update.php?error={$error}&id={$id}");
      exit();
    }
    if ($db->updatesyain($id, $id, $name, $age, $work) == false) {
      $error = "DBエラー";
      header("Location: syain_update.php?error={$error}&id={$id}");
      exit();
    }
    header("Location: index.php");
    exit();
  }

  function deletesyain($id) {
    try {
        $this->connect();
        $stmt = $this->pdo->prepare("DELETE FROM syain WHERE id = ?;");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage() . '<br>';
        return false;
    }
}
}
?>

