<?

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/MemoryGame.php';
    require_once dirname(__FILE__) . '/PlayingCards.php';
    require_once dirname(__FILE__) . '/AnimalCards.php';

    $cardType = 'AnimalCards'; // 動物カードを使う
    if ($cardType === 'playingCards') {
        $playingCards = new PlayingCards();
    } elseif ($cardType = 'AnimalCards') {
        $playingCards = new AnimalCards();
    }
    $memoryGame = new MemoryGame($playingCards);

    // 2番目のカードと6番目のカードが同じ値なら「HIT!」を表示
    if ($memoryGame->isHit(2, 6) === true) {
        echo 'HIT!', PHP_EOL;
    } else {
        echo 'NOT HIT!', PHP_EOL;
    }
    ?>
</body>