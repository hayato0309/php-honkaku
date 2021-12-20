<?php

declare(strict_types=1); ?>

<body>
    <?php
    // アサーションを有効にし、アサーション違反時に例外がスローされるようにする
    // 本来は、ini_setで設定せず、php.iniを直接書き換えることで設定します
    ini_set('zend.assertions', '1');
    ini_set('assert.exception', '1');

    function dropPin(int $positionX, int $positionY, string $color): string
    {
        assert(in_array($color, ['red', 'blue', 'gray']));

        // 地図画像にピン画像を合成する何らかの処理がここに入る

        // 合成後画像のファイル名を返す
        return 'map-' . date('YmdHis') . '.png';
    }

    // これはアサーション違反にならない
    $mapFileName = dropPin(100, 200, 'red');

    // これはアサーション違反になる
    $mapFileName = dropPin(90, 260, 'yellow');
    ?>
</body>