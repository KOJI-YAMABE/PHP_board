<?php
session_start();
require('../libs/dbconnect.php');

if (!empty($_POST['post_id'])) {
  $post_id = $_POST['post_id'];
  $updateMessage =  $_POST['msg'];

  $messages = $db->prepare('SELECT * FROM posts WHERE id=?');
  $messages->execute(array($post_id));
  $message = $messages->fetch();

  if ($message['member_id'] == $_POST['id']) {
    $update = $db->prepare('UPDATE posts SET message=? WHERE id=?');
    $update->execute(array(
      $updateMessage,
      $post_id
    ));
  }
  header('Location: thanks.php');
  exit();
} 
else {
  // この行を追加
    header('Location: index.php');
    exit;
  }

?>