<?php
/* Smarty version 3.1.39, created on 2021-04-26 01:50:52
  from '/Applications/MAMP/htdocs/mini_bbs/templates/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60861c7c342f26_13560721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508a7fe4fc008940e7cface272412be82e39b6be' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/confirm.tpl',
      1 => 1619336265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../inc/head.php' => 1,
  ),
),false)) {
function content_60861c7c342f26_13560721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '206633985660861c7c2f0282_05558314';
?>
<!DOCTYPE html>
<html lang="ja">
<?php $_smarty_tpl->_subTemplateRender('file:../inc/head.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div class="msg">
        <form action="insert.php" method="post">
          <input type="hidden" name="message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
" />
          <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />
          <input type="hidden" name="reply_post_id" value="<?php echo $_smarty_tpl->tpl_vars['reply_post_id']->value;?>
" />
          投稿内容：
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          <br><br>
          <a href="index.php">&laquo;&nbsp;入力に戻る</a> | <input type="submit" value="投稿" />
        </form>
      </div>
    </div>
  </div>
</body>

</html><?php }
}
