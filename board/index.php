<?php
session_start();
require('libs/dbconnect.php');
require_once('../setup.php');
include 'inc/functions.php';

$smarty = new Smarty_mini_bbs();

include 'inc/session.php';
include 'inc/pagenation.php';

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m,posts p WHERE m.id=p.member_id AND enabled=0 ORDER BY p.created DESC LIMIT ?,5');
$posts->bindParam(1, $start, PDO::PARAM_INT);
$posts->execute();
$smarty->assign('posts', $posts);

// 「返信」が押されたら
if (isset($_REQUEST['res'])) {
  $response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m,posts p WHERE m.id=p.member_id AND p.id=?');
  $response->execute(array($_REQUEST['res']));

  $res = $response->fetch();
  $message = '@' . $res['name'] . ' ' . $res['message'];
  $smarty->assign('res', $_REQUEST['res']);
  $smarty->assign('message', $message);
}

if ($_REQUEST['action'] == 'rewrite' && isset($_POST['message'])) {
  $_POST = $_POST['message'];
}

$smarty->assign('member_id', $member['id']);
$smarty->assign('name', $member['name']);

$smarty->display('index.tpl');
?>