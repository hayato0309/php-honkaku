<?php

declare(strict_types=1); ?>

<body>
    <?php
    $command = 'ls -la /tmp';

    $output = shell_exec($command);
    $output = htmlspecialchars(mb_convert_encoding($output, 'UTF-8', 'SJIS-win'), ENT_QUOTES);
    echo '●コマンドの出力結果は以下の通りです。', PHP_EOL;
    print_r($output);
    ?>
</body>