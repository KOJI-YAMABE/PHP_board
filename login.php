<?php
session_start();
require('libs/dbconnect.php');
require_once('setup.php');
include 'inc/functions.php';

$smarty = new Smarty_mini_bbs();

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
      $smarty->assign('failed', $error['login']);
    }
  } else {
    $error['login'] = 'blank';
    $smarty->assign('blank', $error['login']);
  }
}

$smarty->assign('email', $email);
$smarty->assign('password', $_POST['password']);

$smarty->display('login.tpl');
?>