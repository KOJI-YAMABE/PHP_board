<!DOCTYPE html>
<html lang="ja">
{include file='../inc/head.php'}

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div class="msg">
        <form action="insert.php" method="post">
          <input type="hidden" name="message" value="{$message}" />
          <input type="hidden" name="member_id" value="{$member_id}" />
          <input type="hidden" name="reply_post_id" value="{$reply_post_id}" />
          投稿内容：
          {$message}
          <br><br>
          <a href="index.php">&laquo;&nbsp;入力に戻る</a> | <input type="submit" value="投稿" />
        </form>
      </div>
    </div>
  </div>
</body>

</html>