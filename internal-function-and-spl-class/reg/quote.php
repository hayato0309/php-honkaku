<?php

declare(strict_types=1); ?>

<body>
    <?php
    $freeword = 'A.T.';

    $books = [
        'A.T.車の運転マナー',
        'OAuthによるWebサービス認証入門',
        '睡眠は枕で変わる'
    ];

    echo '●エスケープなしで本を検索する例', PHP_EOL;
    foreach ($books as $book) {
        if (preg_match("/{$freeword}/ui", $book)) {
            echo '・ヒットした本のタイトル：', $book, PHP_EOL;
        }
    }

    echo '●エスケープして本を検索する例', PHP_EOL;
    foreach ($books as $book) {
        if (preg_match('/', preg_quote($freeword, '/') . '/ui', $book)) {
            echo '・ヒットした本のタイトル：', $book, PHP_EOL;
        }
    }
    ?>
</body>