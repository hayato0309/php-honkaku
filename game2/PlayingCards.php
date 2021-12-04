<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/Cards.php';

// トランプクラス
class PlayingCards implements Cards
{
    // カードの配列
    private $cards;

    // コンストラクタ
    public function __construct()
    {
    }

    // カードをシャッフルする
    public function shuffle(): void
    {
        // 省略
    }

    // 指定された位置のカードの数字を返す
    public function getValue(int $position): string
    {
        // 省略
    }
}
