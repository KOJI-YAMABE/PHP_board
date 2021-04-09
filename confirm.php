<?php
session_start();
require('libs/dbconnect.php');

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES);
}

if (!isset($_POST['msg'])) {
  header('Location: index.php');
  exit();
}

$member_id = $_POST['member_id'];
$msg = $_POST['msg'];
$reply_post_id = $_POST['reply_post_id'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>投稿確認</title>

	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="wrap">
  <div id="head">
    <h1>オリジナル掲示板</h1>
  </div>
  <div id="content">
    <div class="msg">
      <form action="insert.php" method="post">
        <input type="hidden" name="message" value="<?php print(h($msg)); ?>" />
        <input type="hidden" name="member_id" value="<?php print(h($member_id)); ?>" />
        <input type="hidden" name="reply_post_id" value="<?php print(h($reply_post_id)); ?>" />
        投稿内容：
        <?php print(h($_POST['msg'])); ?>
        <br><br>
        <a href="index.php">&laquo;&nbsp;入力に戻る</a> | <input type="submit" value="投稿" />
      </form> 
    </div>
  </div>
</div>
</body>
</html>