<!-- DB接続の設定 -->
<?php
try {
  $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8','koji','koji0127');
} catch(PDOException $e) {
  echo 'Db接続エラー:　' . $e->getMessage();
}
?>