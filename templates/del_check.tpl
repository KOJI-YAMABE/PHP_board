<!DOCTYPE html>
<html lang="ja">
{include file='../inc/head.php'}

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      {if $post}
        <div class="check_del">
          <form action="delete.php" method="post">
            <h2>本当にこの投稿を削除してもよろしいですか？</h2>
            <input type="hidden" name="id" value="{$member_id}">
            <input type="submit" name="submit" value="削除">
          </form>
        </div>
      {else}
        <p>その投稿は削除されたか、URLが間違えています</p>
      {/if}
    </div>
  </div>
</body>

</html>