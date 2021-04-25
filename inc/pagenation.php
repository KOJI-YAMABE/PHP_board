<?php

$page = $_REQUEST['page'];
$page = max($page, 1);
// 投稿数をDBからcntとして参照
$counts = $db->query('SELECT COUNT(*) AS cnt FROM posts');
$cnt = $counts->fetch();
$maxPage = ceil($cnt['cnt'] / 5);
$page = min($page, $maxPage);
$start = ($page - 1) * 5;
$smarty->assign('page', $page);
$smarty->assign('maxPage', $maxPage);

?>