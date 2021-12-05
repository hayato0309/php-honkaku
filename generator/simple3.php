<?php

declare(strict_types=1); ?>

<body>
    <?php
    // ジェネレーター
    function greetings()
    {
        $greetings = [
            'morning' => 'おはよう',
            'afternoon' => 'こんにちは',
            'evening' => 'こんばんは',
            'night' => 'おやすみ'
        ];
        foreach ($greetings as $time => $greeting) {
            yield $time => $greeting;
        }
    }

    foreach (greetings() as $time => $greeting) {
        echo "{$time}のあいさつ：{$greeting}", PHP_EOL;
    }
    ?>
</body>