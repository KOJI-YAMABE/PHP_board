<?php 
session_start();
require('../libs/dbconnect.php');
include '../inc/functions.php';
include 'check_error.php';

if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])) {
	$_POST = $_SESSION['join'];
}

<!DOCTYPE html>
<html lang="ja">
<?php include 'inc/head.php'; ?>

<body>
<div id="wrap">
<div id="head">
<h1>会員登録</h1>
</div>

<div id="content">
<p>次のフォームに必要事項をご記入ください。</p>
<form action="" method="post" enctype="multipart/form-data">
	<dl>
		<dt>ニックネーム<span class="required">必須</span></dt>
		<dd>
		<input type="text" name="name" size="35" maxlength="50" value="<?php if (isset($_POST['name'])) { echo h($_POST['name']); } ?>"/>
			<?php if ($error['name'] === 'blank'): ?>
				<p class="error">*ニックネームを入力してください</p>
		  <?php endif; ?>
		</dd>
		<dt>メールアドレス<span class="required">必須</span></dt>
		<dd>
			<input type="text" name="email" size="35" maxlength="255" value="<?php if (isset($_POST['email'])) { echo h($_POST['email']); } ?>" />
					<?php if ($error['email'] === 'email'): ?>
				    <p class="error">*正しいメールアドレスを指定してください</p>
			    <?php endif; ?>
					<?php if ($error['email'] === 'duplicate'): ?>
				    <p class="error">*指定されたメールアドレスは既に登録されています</p>
			    <?php endif; ?>
		  <dt>パスワード<span class="required">必須</span></dt>
		</dd>
		<dd>
      <input type="password" name="password" size="10" value="<?php if (isset($_POST['password'])) { echo h($_POST['password']); } ?>" />
		    	<?php if ($error['password'] === 'password'): ?>
						<p class="error">*半角英数字の４文字以上で入力してください</p>
					<?php endif; ?>
        </dd>
		  <dt>プロフィール画像</dt>
		</dd>
		<dd>
			<input type="file" name="image" size="35" value="test"  />
			<?php if ($error['image'] === 'type'): ?>
				<p class="error">*画像を指定してください</p>
			<?php endif; ?>
			<?php if (!empty($error)): ?>
				<p class="error">*画像を改めて指定してください</p>
			<?php endif; ?>

		</dd>
	</dl>
	<div><input type="submit" value="入力内容を確認する" /></div>
</form>
</div>
</body>
</html>
