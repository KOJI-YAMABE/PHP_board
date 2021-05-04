
<!DOCTYPE html>
<html lang="ja">
{include file='inc/head.php'}

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <p>&laquo;<a href="index.php">一覧にもどる</a></p>

      {if $post}
        <div class="msg">
          <img src="../images/member_picture/{$post.picture}" width="100" height="100" />
          <p>
            {$post.message}
            <span class="name">（{$post.name}）</span>
          </p>
          <p class="day">
            {$post.created}
            <!-- ログインユーザーと投稿したユーザーが一致してたら -->
            {if $post_id == $post.member_id}
              [<a href="del_check.php?id={$post.id}" style="color: #F33;">削除</a>]
              [<a href="edit.php?id={$post.id}" style="color: green;">編集</a>]
            {/if}
          </p>
        </div>
      {else}
        <p>その投稿は削除されたか、URLが間違えています</p>
      {/if}
    </div>
  </div>
</body>

</html>