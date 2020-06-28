<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
try {
      $db = new PDO ('mysql:dbname=mydb2;host=127.0.0.1;charset=utf8','root','');
} catch (PDOException $e) {
      echo 'DB接続エラー：'.$e->getMessage();
}

// 【レッスン56】データ挿入
// $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="件詰,ピンク,甘い"');
// echo $count. '件のデータを挿入しました';

// 【レッスン57】データ閲覧
$records = $db->query('SELECT * FROM my_items');
while($record = $records->fetch()) {
  print($record['item_name']. "\n");

  $recordの中の型とカラム名などの確認（独自）
  while($record = $records->fetch()) {
    var_dump($record);
    echo('■■■■■■■■■■■■');
  }
  
}

?>
</pre>
</main>
</body>    
</html>