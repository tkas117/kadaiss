<?php
  ini_set('display_errors', 1);

  // 親クラス
  class Staff {
    protected static $counter = 1;
    protected $name;
    protected $age;
    protected $sex;
    protected $id;

    public function __construct($name, $age, $sex) {
      $this->name = $name;
      $this->age = $age;
      $this->sex = $sex;
    }

    public function number() {
      $this->id = sprintf('S%04d', self::$counter++);
      return $this->id;
    }

    public function show() {
      printf('(%s) %s %s %s<br>', $this->id, $this->name, $this->age, $this->sex);
    }
  }

  // 子クラス
  class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
      parent::__construct($name, $age, $sex);
      $this->jikyu = $jikyu;
    }

    public function number() {
      $this->id = sprintf('P%04d', self::$counter++);
      return $this->id;
    }

    public function show() {
      printf('(%s) %s %s %s %s<br>', $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
    }
  }

  $staffs = [];
  $staffs[0] = new Staff('佐藤 一郎', '31歳', '男性');
  $staffs[1] = new Staff('山田 花子', '25歳', '女性');
  $staffs[2] = new Staff('鈴木 次郎', '27歳', '男性');
  $staffs[3] = new PartStaff('田中 友子', '24歳', '女性', '時給：900円');
  $staffs[4] = new Staff('中村 三郎', '27歳', '男性');

  foreach ($staffs as $staff) {
    $id = $staff->number();
    $staff->show();
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題14 PHP基礎7-2</title>
</head>
<body>
  
</body>
</html>