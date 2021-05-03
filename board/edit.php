<?php
session_start();
require('libs/dbconnect.php');
require_once('../setup.tpl');
include 'inc/functions.php';

$smarty = new Smarty_mini_bbs();

if (empty($_REQUEST['id'])) {
  header('Location: index.php');
  exit;
}

$member_id = $_REQUEST['id'];

$posts = $db->prepare('SELECT m.name, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
$posts->execute(array($member_id));
$post = $posts->fetch();
$smarty->assgin('post', $post);

$smarty->display('edit.tpl');
?>