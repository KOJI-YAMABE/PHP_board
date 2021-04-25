<!DOCTYPE html>
<html lang="ja">
{include file='../inc/head.php'}
<!-- <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>オリジナル掲示板</title>
  <link rel="stylesheet" href="../style.css" />
</head> -->

<body>
  <div id="wrap">
    <div id="head">
      <h1>会員登録</h1>
    </div>

    <div id="content">
      <p>記入した内容を確認して、「登録する」ボタンをクリックしてください</p>
      <form action="" method="post">
        <input type="hidden" name="action" value="submit" />
        <dl>
          <dt>ニックネーム</dt>
          <dd>
            <?php print(h($_SESSION['join']['name'])); ?>
          </dd>
          <dt>メールアドレス</dt>
          <dd>
            <?php print(h($_SESSION['join']['email'])); ?>
          </dd>
          <dt>パスワード</dt>
          <dd>
            【表示されません】
          </dd>
          <dt>プロフィール画像</dt>
          <dd>
            <?php if ($_SESSION['join']['image'] !== ''): ?>
            <img src="../member_picture/<?php print(h($_SESSION['join']['image'])); ?>">
            <?php endif; ?>
          </dd>
        </dl>
        <div><a href="index.php?action=rewrite">&laquo;&nbsp;戻る</a> | <input type="submit" value="登録" /></div>
      </form>
    </div>

  </div>
</body>

</html>