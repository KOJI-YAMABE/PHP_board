<?php
session_start();
require('libs/dbconnect.php');

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES);
}

if (empty($_REQUEST['id'])) {
  header('Location: index.php');
  exit();
}

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
$posts->execute(array($_REQUEST['id']));

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>削除確認</title>

	<link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="wrap">
  <div id="head">
    <h1>オリジナル掲示板</h1>
  </div>
  <div id="content">

<?php if ($post = $posts->fetch()): ?>
    <div class="check_del">
      <form action="delete.php" method="post">
        <h2>本当にこの投稿を削除してもよろしいですか？</h2>
        <input type="hidden" name="id" value="<?php print(h($_REQUEST['id'])); ?>">
        <input type="submit" name="submit" value="削除">
      </form>
    </div>
<?php else: ?>
	<p>その投稿は削除されたか、URLが間違えています</p>
<?php endif; ?>
  </div>
</div>
</body>
</html>