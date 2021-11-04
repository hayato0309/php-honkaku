<?php

declare(strict_types=1); ?>

<body>
    <?php
    $sentence = '今日は、良い日です';
    var_dump(mb_strpos($sentence, '日'));
    var_dump(mb_strpos($sentence, '無'));
    var_dump(mb_strpos($sentence, 'いい日'));
    var_dump(mb_strrpos($sentence, '日'));

    if (mb_strpos($sentence, '日')) {
        echo '引数$sentenseの中に「日」が見つかりました。', PHP_EOL;
    } else {
        echo '引数$sentenceの中に「日」は見つかりませんでした。', PHP_EOL;
    }
    ?>
</body>