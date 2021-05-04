<?php
/* Smarty version 3.1.39, created on 2021-05-04 06:32:17
  from '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090ea71a58f16_39580481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13afe80dc639812cacd6d63d51ad9766a9873bb3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl',
      1 => 1620096073,
      2 => 'file',
    ),
    '06a62cca6f1875b93194fc324a0bc5100bb0ea5a' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/board/inc/head.php',
      1 => 1619399078,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6090ea71a58f16_39580481 (Smarty_Internal_Template $_smarty_tpl) {
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
          <dt>大阪さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5"><br />
<b>Notice</b>:  Undefined index: message in <b>/Applications/MAMP/htdocs/mini_bbs/templates_c/13afe80dc639812cacd6d63d51ad9766a9873bb3_0.file.index.tpl.cache.php</b> on line <b>44</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>/Applications/MAMP/htdocs/mini_bbs/templates_c/13afe80dc639812cacd6d63d51ad9766a9873bb3_0.file.index.tpl.cache.php</b> on line <b>44</b><br />
</textarea>
            <input type="hidden" name="reply_post_id" value="<br />
<b>Notice</b>:  Undefined index: res in <b>/Applications/MAMP/htdocs/mini_bbs/templates_c/13afe80dc639812cacd6d63d51ad9766a9873bb3_0.file.index.tpl.cache.php</b> on line <b>46</b><br />
<br />
<b>Notice</b>:  Trying to get property 'value' of non-object in <b>/Applications/MAMP/htdocs/mini_bbs/templates_c/13afe80dc639812cacd6d63d51ad9766a9873bb3_0.file.index.tpl.cache.php</b> on line <b>46</b><br />
" />
            <input type="hidden" name="member_id" value="4" />
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
                          <li><a href="index.php?page=2">次のページへ</a></li>
              </ul>
      
    </div>
  </div>
</body>

</html><?php }
}
