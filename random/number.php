<?php

declare(strict_types=1); ?>

<body>
    <?php
    // 単純にランダムな数値を生成する例
    echo 'ランダムな番号：', random_int(1, 99999), PHP_EOL;

    // ランダムな顧客コードを生成する例
    $code = 'cunstomer-' . str_pad(strval(random_int(1, 99999)), 5, '0', STR_PAD_LEFT);
    echo '顧客コードは：', $code, PHP_EOL;

    // ランダムな配列要素を選択する例
    $colors = ['red', 'blue', 'green', 'yellow', 'black'];
    echo 'ラッキーカラーは：', $colors[random_int(0, 4)], PHP_EOL;

    // ランダムなURLを生成する例
    function generateRandom($minLength, $maxLength)
    {
        $length = random_int($minLength, $maxLength);
        $chars = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= $chars[random_int(0, count($chars) - 1)];
        }
        return $random;
    }

    echo 'このURLをクリックして、ユーザ登録を完了してください：http://example.com/user?key=', generateRandom(16, 32), PHP_EOL;
    ?>
</body>