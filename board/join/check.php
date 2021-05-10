<?php
session_start();
require('../../libs/dbconnect.php');
require_once('../../setup.php');

$smarty = new Smarty_mini_bbs();

// セッションのjoinに変数が入っていなかったら登録画面に返す
if (!isset($_SESSION['join'])) {
	header('Location: index.php');
	exit();
}
// データが空ではなければtoken確認
if (!empty($_POST)) {
	if (!$_POST['join']['token'] || !$_SESSION['join']['token']) {
		$_SESSION = array();
		header('Location: index.php');
		exit();
	} elseif ($_POST['join']['token'] != $_SESSION['join']['token']) {
		$_SESSION = array();
		header('Location: index.php');
		exit();
	}
// tokenの確認が取れたらDBに登録する
	$statement = $db->prepare('INSERT INTO members SET name=?, email=?, password=?, picture=?, created=NOW()');
	// sha1()：ハッシュ関数、DBに登録されたパスワードは非可逆暗号化される
	$statement->execute(array(
		$_SESSION['join']['name'],
		$_SESSION['join']['email'],
		sha1($_SESSION['join']['password']),
		$_SESSION['join']['image']
	));
	$smarty->assgin('name', $_SESSION['join']['name']);
	$smarty->assgin('email', $_SESSION['join']['email']);
	$smarty->assgin('image', $_SESSION['join']['image']);
	
	// unset：変数を削除する
	// 使い終わった不要なセッション変数をすぐに削除する。重複防止
	unset($_SESSION['join'], $_SESSION['join']['token']);

	// 登録完了ページに遷移
	header('Location: thanks.php');
	exit();
}

$smarty->display('join/check.tpl');
?>