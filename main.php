<?php
  // fruits_class.phpを読み込む
    require 'fruits_class.php';

  // fruits_class.phpのクラスを使う
    $peach = new Fruits("桃",300,200,15);
    $peach->printStatistics();

    $strawberry = new Fruits("イチゴ",400,500,15);
    $strawberry->printStatistics();
?>