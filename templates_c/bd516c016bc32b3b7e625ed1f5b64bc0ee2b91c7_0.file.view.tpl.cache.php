<?php
/* Smarty version 3.1.39, created on 2021-04-28 01:19:09
  from '/Applications/MAMP/htdocs/mini_bbs/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6088b80d567125_80386803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd516c016bc32b3b7e625ed1f5b64bc0ee2b91c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/view.tpl',
      1 => 1619336544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../inc/head.php' => 1,
  ),
),false)) {
function content_6088b80d567125_80386803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '699716266088b80d4b0199_82530778';
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
      <p>&laquo;<a href="index.php">一覧にもどる</a></p>

      <?php if ($_smarty_tpl->tpl_vars['post']->value) {?>
        <div class="msg">
          <img src="../images/member_picture/<?php echo $_smarty_tpl->tpl_vars['post']->value['picture'];?>
" width="100" height="100" />
          <p>
            <?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>

            <span class="name">（<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
）</span>
          </p>
          <p class="day">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['created'];?>

            <!-- ログインユーザーと投稿したユーザーが一致してたら -->
            <?php if ($_smarty_tpl->tpl_vars['post_id']->value == $_smarty_tpl->tpl_vars['post']->value['member_id']) {?>
              [<a href="del_check.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" style="color: #F33;">削除</a>]
              [<a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" style="color: green;">編集</a>]
            <?php }?>
          </p>
        </div>
      <?php } else { ?>
        <p>その投稿は削除されたか、URLが間違えています</p>
      <?php }?>
    </div>
  </div>
</body>

</html><?php }
}
