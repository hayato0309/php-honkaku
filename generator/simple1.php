<?php

declare(strict_types=1); ?>

<body>
    <?php
    // ジェネレーター
    function numbers()
    {
        yield 1;
        yield 2;
        yield 3;
        yield 4;
        // このコメントアウトを外すと1~4のみが返ります
        // return;
        yield 5;
    }

    foreach (numbers() as $number) {
        echo $number, PHP_EOL;
    }

    $generator = numbers();
    var_dump($generator);
    ?>
</body>