<?php
session_start();
require('../libs/dbconnect.php');

if (isset($_SESSION['id'])) {
  $post_id = $_REQUEST['id'];
  $messages = $db->prepare('SELECT * FROM posts WHERE id=?');
  $messages->execute(array($post_id));
  $message = $messages->fetch();
  // ログインしてるユーザと投稿したユーザーの一致チェック
  if ($message['member_id'] == $_SESSION['id']) {
    $del = $db->prepare('UPDATE posts SET enabled=1 WHERE id=?');
    $del->execute(array($post_id));
  } 
  else {
    header('Location: index.php');
    exit();
  }
}
?>