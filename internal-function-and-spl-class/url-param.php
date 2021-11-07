<?php

declare(strict_types=1); ?>

<body>
    <?php
    // 本プログラムの処理は、変数$urlから「debug=1」のクエリ文字列を除去した新しいURLを生成します。

    // 対象となるURL
    $url = 'https://example.com/dir1/dir2/search.php?freeword=cooking&categories[0]=books&categories[1]=dvd&debug=1';

    // 手順1. parse_url関数で、URLを要素に分解します。
    $urlElements = parse_url($url);
    echo '●URLのパース結果：', PHP_EOL;
    print_r($urlElements);

    // 手順2. parse_str間すで、クエリ文字列を解析します。
    $queries = [];
    parse_str($urlElements['query'], $queries);
    echo '●クエリ文字列のパース結果：', PHP_EOL;
    print_r($queries);

    // 手順3. クエリ文字列から、debug=1を除去し、http_build_query関数でクエリ文字列を生成しなおします。
    unset($queries['debug']);
    $newQuery = http_build_query($queries);
    echo '●新しく生成されたクエリ文字列：', PHP_EOL;
    print_r(urldecode($newQuery));
    echo PHP_EOL;

    // 手順4. 新たしいクエリ文字列を元に、新しいURLを組み立てます。
    echo '●亜tらしく生成されたURL：', PHP_EOL;
    $newUrl = $urlElements["scheme"] . '://' . $urlElements['host'] . $urlElements['path'] . '?' . $newQuery;
    print_r(urldecode($newUrl));
    ?>
</body>