<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/MemoryGame.php';
    $memoryGame = new MemoryGame('animalCards');

    // 2番目と6番目のカードが同じ値なら「HIT!」を表示
    if ($memoryGame->isHit(2, 6) === true) {
        echo 'HIT!', PHP_EOL;
    } else {
        echo 'NOT HIT!', PHP_EOL;
    }
    ?>
</body>