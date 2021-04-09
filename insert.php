<?php
session_start();
require('libs/dbconnect.php');

if (!empty($_POST)) {
    $message = $db->prepare('INSERT INTO posts SET member_id=?, message=?, reply_message_id=?, created=NOW()');
    $message->execute(array(
      $_POST['member_id'],
      $_POST['message'],
      $_POST['reply_post_id']
    ));

    header('Location: thanks.php');
    exit();

    // 原因究明中
    // $sql = "ISERT INTO posts (member_id, message, created) VALUES (member_id, message, NOW())"; 
    // $stmt = $dbh->prepare($sql);
    // $params = array(
    //   $_POST['member_id'],
    //   $_POST['message']
    //   // 'reply_message_id' => $_POST['reply_message_id']
    // );
    // $stmt->execute($params);
}

?>