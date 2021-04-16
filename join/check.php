<?php
session_start();
require('../libs/dbconnect.php');
include '../inc/functions.php';

// セッションのjoinに変数が入っていなかったら登録画面に返す
if (!isset($_SESSION['join'])) {
	header('Location: index.php');
	exit();
}
// データが空ではなければDBに登録する
if (!empty($_POST)) {
	$statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
	// sha1()：ハッシュ関数、DBに登録されたパスワードは非可逆暗号化される
	$statement->execute(array(
		$_SESSION['join']['name'],
		$_SESSION['join']['email'],
		sha1($_SESSION['join']['password']),
		$_SESSION['join']['image']
	));
	
	// unset：変数を削除する
	// 使い終わった不要なセッション変数をすぐに削除する。重複防止
	unset($_SESSION['join']);

	// 登録完了ページに遷移
	header('Location: thanks.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<?php include 'inc/head.php'; ?>

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