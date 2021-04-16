<?php
session_start();
require('libs/dbconnect.php');
include 'inc/session.php';
include 'inc/functions.php';

// ページネーションの設定(31~43)
$page = $_REQUEST['page'];
$page = max($page, 1);
// 投稿数をDBから参照cntとして
$counts = $db->query('SELECT COUNT(*) AS cnt FROM posts');
$cnt = $counts->fetch();
$maxPage = ceil($cnt['cnt'] / 5);
$page = min($page, $maxPage);
$start = ($page - 1) * 5;

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m,posts p WHERE m.id=p.member_id AND enabled=0 ORDER BY p.created DESC LIMIT ?,5');
$posts->bindParam(1, $start, PDO::PARAM_INT);
$posts->execute();

// 「返信」が押されたら
if (isset($_REQUEST['res'])) {
  // 返信の処理
  $response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m,posts p WHERE m.id=p.member_id AND p.id=?');
  $response->execute(array($_REQUEST['res']));

  $res = $response->fetch();
  $message = '@' . $res['name'] . ' ' . $res['message'];
}

if ($_REQUEST['action'] == 'rewrite' && isset($_POST['message'])) {
  $_POST = $_POST['message'];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>オリジナル掲示板</title>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
      <form action="confirm.php" method="post">
        <dl>
          <dt><?php print(h($member['name'])); ?>さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5"><?php print(h($message)); ?></textarea>
            <input type="hidden" name="reply_post_id" value="<?php print(h($_REQUEST['res'])); ?>" />
            <input type="hidden" name="member_id" value="<?php print(h($member['id'])); ?>" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="入力内容を確認" />
          </p>
        </div>
      </form>

      <!-- 投稿記事を取得する -->
      <?php foreach ($posts as $post) : ?>
        <div class="msg">
          <img src="member_picture/<?php print(h($post['picture'])); ?>" width="48" height="48" alt="<?php print(h($post['name'])); ?>" />
          <p>
            <?php print(h($post['message'])); ?><span class="name">（<?php print(h($post['name'])); ?>）</span>[<a href="index.php?res=<?php print(h($post['id'])); ?>">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=<?php print($post['id']); ?>"><?php print($post['created']); ?></a>
            <!-- 返信投稿のみ表示 -->
            <?php if ($post['reply_message_id'] > 0) : ?>
              <a href="view.php?id=<?php print(h($post['reply_message_id'])); ?>">
                返信元のメッセージ</a>
            <?php endif; ?>
          </p>
        </div>
      <?php endforeach; ?>

      <ul class="paging">
        <?php if ($page > 1) : ?>
          <li><a href="index.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
        <?php endif; ?>

        <?php if ($page < $maxPage) : ?>
          <li><a href="index.php?page=<?php print($page + 1); ?>">次のページへ</a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</body>

</html>