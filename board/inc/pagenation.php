<?php

$p = (int) $_GET["p"]; //現在のページ番号
    $items_count = 51; // 表示したいアイテム数
    $items_limit = 10; // 1ページの上限

    // 最初のページ番号
    $min = 1;
    // 最後のページ番号
    $max = (int) ceil($items_count / $items_limit);

    $page = pagenation($p, $min, $max);

    smartyBindValue(
        $smarty,
        [
            "last" => $page["last"],
            "next" => $page["next"],
            "status" => sprintf("%s/%s ページ", $p, $max),
        ]
    );

    function smartyBindValue(&$smarty, $items)
{
    foreach ($items as $key => $value) {
        $smarty->assign($key, $value);
    }
}

/**
 * ページ数計算
 * 
 * @param int $p 現在のページ番号
 * @param int $min 最初のページ番号 
 * @param int $max 最後のページ番号
 */
function pagenation($p, $min, $max)
{
    $last = null;
    $next = null;

    // 範囲外か
    if (!($min <= $p && $p <= $max)) {
        $p = 1; //強制的に1ページ目へ
    }

    // 最初のページか ?
    if ($p === $min) {
        return [
            "next" => $min + 1,
            "last" => null,
        ];
    }

    // 最後のページか ?
    if ($p === $max) {
        return [
            "next" => null,
            "last" => $max - 1,
        ];
    }

    return [
        "next" => $p + 1,
        "last" => $p - 1,
    ];
}

?>