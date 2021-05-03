<ul class="paging">
  <!-- {if $page > 1} -->
    <!-- <li><a href="index.php?page={$page - 1}">前のページへ</a></li> -->
  {if $last != null}
    <li><a href="index.php?page={$last}">前のページへ</a></li>
  {/if}

  <!-- {if $page < $maxPage} -->
    <!-- <li><a href="index.php?page={$page - 1}">前のページへ</a></li> -->
  {if $next != null}
    <li><a href="index.php?page={$next}">次のページへ</a></li>
  {/if}
</ul>