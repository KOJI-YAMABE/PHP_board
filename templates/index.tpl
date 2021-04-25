<!DOCTYPE html>
<html lang="ja">
{include file='../inc/head.php'}

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
      <form action="confirm.php" method="post">
        <dl>
          <dt>{$name}さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5">{$message}</textarea>
            <input type="hidden" name="reply_post_id" value="{$res}" />
            <input type="hidden" name="member_id" value="{$member_id}" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="入力内容を確認" />
          </p>
        </div>
      </form>

      <!-- 投稿記事を取得する -->
      {foreach $posts as $post}
        <div class="msg">
          <img src="../images/member_picture/{$post.picture}" width="48" height="48" alt="{$post.name}" />
          <p>
            {$post.message}<span class="name">（{$post.name}）</span>[<a href="index.php?res={$post.id}">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id={$post.id}">{$post.created}</a>
            <!-- 返信投稿のみ表示 -->
            {if $post.reply_message_id > 0}
              <a href="view.php?id={$post.reply_message_id}">
                返信元のメッセージ</a>
            {/if}
          </p>
        </div>
      {/foreach}

      <ul class="paging">
        {if $page > 1}
          <li><a href="index.php?page={$page - 1}">前のページへ</a></li>
        {/if}

        {if $page < $maxPage}
          <li><a href="index.php?page={$page + 1}">次のページへ</a></li>
        {/if}
      </ul>
    </div>
  </div>
</body>

</html>