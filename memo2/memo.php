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

<?php
try {
      $db = new PDO ('mysql:dbname=mydb2;host=127.0.0.1;charset=utf8','root','');
} catch (PDOException $e) {
      echo 'DB接続エラー：'.$e->getMessage();
}

// パラメーターを数字だけに限定にする
$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0) {
  print('1以上の数字で指定してください');
  exit();
}

$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
$memos->execute(array($id));
$memo = $memos->fetch();
?>

<artical>
  <pre><?php print($memo['memo']); ?></pre>
  <a href="index.php">戻る</a>
</artical>
</main>
</body>    
</html>