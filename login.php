<?php
session_start();
require('libs/dbconnect.php');
include 'inc/functions.php';

// メールアドレスが入力されてたらクッキーに保存
if ($_POST['email'] !== '') {
  $email = $_COOKIE['email'];
}
// ログインを押してフォームが空でなければ
if (!empty($_POST)) {
  $email = $_POST['email'];
  if ($email !== '' && $_POST['password'] !== '') {
    $login = $db->prepare('SELECT * FROM members WHERE email=? AND password=?');
    $login->execute(array(
      $_POST['email'],
      sha1($_POST['password'])
    ));
    $member = $login->fetch();
    // ログインに成功すると
    if ($member) {
      // パスはセキュリティ面でセッションに保存しない
      $_SESSION['id'] = $member['id'];
      $_SESSION['time'] = time();
      //自動ログインにチェックがあれば１４日間クッキーに保存
      if ($_POST['save'] === 'on') {
        setcookie('email', $_POST['email'], time() + 60 * 60 * 24 * 14);
      }
      // 一覧画面に遷移する
      header('Location: index.php');
      exit();
    } else {
      $error['login'] = 'failed';
    }
  } else {
    $error['login'] = 'blank';
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'inc/head.php'; ?>

<body>
  <div id="wrap">
    <div id="head">
      <h1>ログイン</h1>
    </div>
    <div id="content">
      <div id="lead">
        <p>メールアドレスとパスワードを記入してログインしてください。</p>
        <p>入会手続きがまだの方はこちらからどうぞ。</p>
        <p>&raquo;<a href="join/">入会手続きをする</a></p>
      </div>
      <form action="" method="post">
        <dl>
          <dt>メールアドレス</dt>
          <dd>
            <input type="text" name="email" size="35" maxlength="255" value="<?php print(h($email)); ?>" />
            <?php if ($error['login'] === 'blank') : ?>
              <p class="error">*メールアドレスが正しくありません</p>
            <?php endif; ?>
            <?php if ($error['login'] === 'failed') : ?>
              <p class="error">*ログインに失敗しました。正しくご記入ください。</p>
            <?php endif; ?>
          </dd>
          <dt>パスワード</dt>
          <dd>
            <input type="password" name="password" size="35" maxlength="255" value="<?php print(h($_POST['password'])); ?>" />
          </dd>
          <dt>ログイン情報の記録</dt>
          <dd>
            <input id="save" type="checkbox" name="save" value="on">
            <?php if ($error['login'] === 'blank') : ?>
              <p class="error">*パスワードが正しくありません</p>
            <?php endif; ?>
            <label for="save">次回からは自動的にログインする</label>
          </dd>
        </dl>
        <div>
          <input type="submit" value="ログインする" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>