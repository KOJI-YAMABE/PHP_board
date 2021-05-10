<?php
session_start();
require('../libs/dbconnect.php');
require_once('../setup.php');

$smarty = new Smarty_mini_bbs();

if (empty($_REQUEST['id'])) {
  header('Location: index.php');
  exit();
}
$smarty->assign('post_id', $_REQUEST['id']);

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
$posts->execute(array($_REQUEST['id']));
$post = $posts->fetch();
$smarty->assign('post', $post);

$smarty->display('view.tpl');
?>