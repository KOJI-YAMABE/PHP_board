<?php
session_start();
require('libs/dbconnect.php');
require_once('../setup.php');
include 'inc/functions.php';

$smarty = new Smarty_mini_bbs();

if (empty($_POST['msg'])) {
  header('Location: index.php');
  exit();
}

$member_id = $_POST['member_id'];
$smarty->assign('member_id', $member_id);

$msg = $_POST['msg'];
$smarty->assign('message', $msg);

$reply_post_id = $_POST['reply_post_id'];
$smarty->assign('reply_post_id', $reply_post_id);


$smarty->display('confirm.tpl');
?>