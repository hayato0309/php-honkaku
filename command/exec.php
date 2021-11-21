<?php

declare(strict_types=1); ?>

<body>
    <?php
    $command = 'ls -la /tmp';

    $output = [];
    $returnVar = null;
    exec($comand, $output, $returnVar);

    echo '●コマンドの出力結果は以下の通りです。', PHP_EOL;
    mb_convert_variables('UTF-8', 'SJIS-win', $output);
    foreach ($output as $line) {
        echo htmlspecialchars($line, ENT_QUOTES), PHP_EOL;
    }

    echo '●コマンドの戻り値は以下の通りです。', PHP_EOL;
    print_r($returnVar);
    ?>
</body>