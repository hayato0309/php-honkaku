<?php

declare(strict_types=1); ?>

<body>
    <?php
    // URL上問題ない文字列はencodeしてもそのまま
    echo '●「TestString」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('TestString');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;

    // 日本語はURLに含めることができません。
    echo '●「東京都杉並区」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('東京都杉並区');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;

    // 一部の半角記号もURLに含めることができません
    echo '●「Mark of !?(^^)」をURLエンコードします。', PHP_EOL;
    $encoded = urlencode('Mark of !?(^^)');
    echo $encoded, PHP_EOL;
    $decoded = urldecode($encoded);
    echo $decoded, PHP_EOL;
    ?>
</body>