<!DOCTYPE html>
<html lang="ja">
{include file='inc/head.php'}

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
    <h2>編集</h2>
      {if $post}
        <form action="update.php" method="post">
          <dl>
            <dt>{$post.name}さんの投稿</dt>
            <dd>
              <textarea name="msg" cols="50" rows="5">{$post.message}</textarea>
              <input type="hidden" name="post_id" value="{$post.id}" />
              <input type="hidden" name="id" value="{$post.member_id}" />
            </dd>
          </dl>
          <div>
            <p>
            <a href="view.php?id={$post.id}">&laquo;&nbsp;戻る</a> ｜ <input type="submit" value="入力内容を確認" />
            </p>
          </div>
        </form>
      {else}
        <p>その投稿は削除されたか、URLが間違えています</p>
      {/if}
    </div>
  </div>
</body>

</html>