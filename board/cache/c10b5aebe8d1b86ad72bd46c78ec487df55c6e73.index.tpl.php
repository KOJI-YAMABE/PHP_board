<?php
/* Smarty version 3.1.39, created on 2021-04-26 01:30:45
  from '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608617c5626429_89610101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13afe80dc639812cacd6d63d51ad9766a9873bb3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl',
      1 => 1619336421,
      2 => 'file',
    ),
    '7294ebf4d07f567c71bd477e2456182febe7108b' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/inc/head.php',
      1 => 1619399078,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_608617c5626429_89610101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>オリジナル掲示板</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
      <form action="confirm.php" method="post">
        <dl>
          <dt>さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5"></textarea>
            <input type="hidden" name="reply_post_id" value="" />
            <input type="hidden" name="member_id" value="" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="入力内容を確認" />
          </p>
        </div>
      </form>

      <!-- 投稿記事を取得する -->
      
      <ul class="paging">
        
              </ul>
    </div>
  </div>
</body>

</html><?php }
}
