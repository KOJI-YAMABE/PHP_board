<?php
session_start();
require('libs/dbconnect.php');
require_once('setup.tpl');
include 'inc/functions.php';

$smarty = new Smarty_mini_bbs();

if (empty($_REQUEST['id'])) {
  header('Location: index.php');
  exit();
}

$member_id = $_REQUEST['id'];
$smarty->assgin('member_id', $member_id);

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=?');
$posts->execute(array($member_id));
$post->$posts->fetch();
$smarty->assgin('post', $post);

$smarty->display('del_check.tpl');
?>