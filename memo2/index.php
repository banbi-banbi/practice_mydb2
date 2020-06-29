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

$memos = $db->query('SELECT * FROM memos ORDER BY id DESC');


// $records = $db->query('SELECT * FROM my_items');
// while($record = $records->fetch()) {
  //   print($record['item_name']. "\n");
  
  //   $recordの中の型とカラム名などの確認（独自）
  //   while($record = $records->fetch()) {
    //     var_dump($record);
    //     echo('■■■■■■■■■■■■');
    //   }
    // }
    
    ?>
    <article>
      <?php while ($memo = $memos->fetch()): ?>
        <!-- 文字数制限無し -->
        <!-- <p><a href="#"><?php print($memo['memo']); ?></a></p> -->
        <!-- 文字数制限あり -->
        <!-- <p><a href="#"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p> -->
        <!-- 【61】リンク設定 -->
        <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 50)); ?></a></p>


        <time><?php print($memo['created_at']); ?></time>
        <hr>
      <?php endwhile; ?>
    </article>
    
</main>
</body>    
</html>