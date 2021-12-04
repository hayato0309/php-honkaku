<?php

/**
 * MemoryGameクラスがPlayingCardsクラスに依存している悪い例のプログラム
 */

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . 'MemoryGame.php';
    $memoryGame = new MemoryGame();

    // 10番目のカードと25番目のカードが同じ値なら「HIT!」を表示。
    if ($memoryGame->isHit(10, 25) === true) {
        echo 'HIT!', PHP_EOL;
    } else {
        echo 'NOT HIT!', PHP_EOL;
    }
    ?>
</body>