<?php
session_start();
require('libs/dbconnect.php');
include 'inc/functions.php';

if (empty($_REQUEST['id'])) {
  header('Location: index.php');
  exit;
}

// if (!preg_match('/\A\d{1,11}+\z/u/', $_GET['id'])) {
//   header('Location: index.php');
//   exit;
// }

$member_id = $_REQUEST['id'];

$posts = $db->prepare('SELECT m.name, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
$posts->execute(array($member_id));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>編集</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
    <h2>編集</h2>
      <?php if ($post = $posts->fetch()) : ?>
        <form action="update.php" method="post">
          <dl>
            <dt><?php print(h($post['name'])); ?>さんの投稿</dt>
            <dd>
              <textarea name="msg" cols="50" rows="5"><?php print(h($post['message'])); ?></textarea>
              <input type="hidden" name="post_id" value="<?php print(h($post['id'])); ?>" />
              <input type="hidden" name="id" value="<?php print(h($post['member_id'])); ?>" />
            </dd>
          </dl>
          <div>
            <p>
            <a href="view.php?id=<?php print($post['id']); ?>">&laquo;&nbsp;戻る</a> ｜ <input type="submit" value="入力内容を確認" />
            </p>
          </div>
        </form>
      <?php else : ?>
        <p>その投稿は削除されたか、URLが間違えています</p>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>