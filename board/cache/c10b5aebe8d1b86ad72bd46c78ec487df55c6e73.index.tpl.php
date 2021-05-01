<?php
/* Smarty version 3.1.39, created on 2021-05-01 05:20:04
  from '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608ce504af2c08_27113409',
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
function content_608ce504af2c08_27113409 (Smarty_Internal_Template $_smarty_tpl) {
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
          <dt>本田さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5"></textarea>
            <input type="hidden" name="reply_post_id" value="" />
            <input type="hidden" name="member_id" value="7" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="入力内容を確認" />
          </p>
        </div>
      </form>

      <!-- 投稿記事を取得する -->
              <div class="msg">
          <img src="../images/member_picture/20210409064310男１.png" width="48" height="48" alt="本田" />
          <p>
            ssss<span class="name">（本田）</span>[<a href="index.php?res=49">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=49">2021-04-25 14:26:52</a>
            <!-- 返信投稿のみ表示 -->
                      </p>
        </div>
              <div class="msg">
          <img src="../images/member_picture/20210409064310男１.png" width="48" height="48" alt="本田" />
          <p>
            ssss<span class="name">（本田）</span>[<a href="index.php?res=48">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=48">2021-04-25 14:05:16</a>
            <!-- 返信投稿のみ表示 -->
                      </p>
        </div>
              <div class="msg">
          <img src="../images/member_picture/20210409064230Alex.jpg" width="48" height="48" alt="Alex" />
          <p>
            てすと<span class="name">（Alex）</span>[<a href="index.php?res=47">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=47">2021-04-24 17:07:43</a>
            <!-- 返信投稿のみ表示 -->
                      </p>
        </div>
              <div class="msg">
          <img src="../images/member_picture/20210404065616女２.png" width="48" height="48" alt="koji" />
          <p>
            @大阪 プログラミング難しいよ。。。お疲れさまです
<span class="name">（koji）</span>[<a href="index.php?res=46">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=46">2021-04-16 16:03:21</a>
            <!-- 返信投稿のみ表示 -->
                          <a href="view.php?id=37">
                返信元のメッセージ</a>
                      </p>
        </div>
              <div class="msg">
          <img src="../images/member_picture/20210404065616女２.png" width="48" height="48" alt="koji" />
          <p>
            @koji PHP練習中　返信確認<span class="name">（koji）</span>[<a href="index.php?res=45">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=45">2021-04-16 16:03:00</a>
            <!-- 返信投稿のみ表示 -->
                          <a href="view.php?id=43">
                返信元のメッセージ</a>
                      </p>
        </div>
      
      <ul class="paging">
        
                  <li><a href="index.php?page=2">次のページへ</a></li>
              </ul>
    </div>
  </div>
</body>

</html><?php }
}
