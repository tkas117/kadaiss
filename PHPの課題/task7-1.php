<?php
  ini_set('display_errors',1);
  // クラス
  // ①Staffクラスに静的変数 $counter を使用。この変数は次に割り当てる社員番号を示すため。$counter の初期値を1に設定することで、最初のスタッフの社員番号を "S0001" として割り当てる。
  class Staff{
    private static $counter = 1;
    private $name;
    private $age;
    private $sex;
    private $id;

    // ②idに書式化された文字列を生成するための関数であるsprintf関数を使用。
    public function __construct($name,$age,$sex){
      $this -> name = $name; 
      $this -> age = $age;
      $this -> sex = $sex;
      $this -> id = sprintf('S%04d', self::$counter++);
    }
  
    public function show(){
      printf('(%s) %s %s %s<br>',$this -> id,$this -> name,$this -> age,$this -> sex);
    }
  }

  $staffs = [];
  $staffs[0] = new Staff ('佐藤　一郎','31歳','男性');
  $staffs[1] = new Staff ('山田　花子','25歳','女性');
  $staffs[2] = new Staff ('鈴木　次郎','27歳','男性');

  $staffs[0]->show();
  $staffs[1]->show();
  $staffs[2]->show();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題13 PHP基礎7-1
</title>
</head>
<body>
</body>
</html>
