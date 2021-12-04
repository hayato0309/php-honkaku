<?php

declare(strict_types=1);

// 神経衰弱ゲームクラス
class MemoryGame
{
    // カードを表す
    private $cards;

    public function __construct(Cards $cards)
    {
        // カードの正体が何なのかは、神経衰弱ゲームは知らなくていい
        $this->cards = $cards;
        // カードをシャッフルしてランダムに並び替える
        $this->cards->shuffle();
    }

    // 2枚のカードが同じ数字であれば真。引数$position1, 2は、めくられたカードの位置を表す
    public function isHit(int $position1, int $position2): bool
    {
        // 省略
    }
}
