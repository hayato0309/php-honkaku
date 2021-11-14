<?php

declare(strict_types=1); ?>

<body>
    <?php
    // sample.txtを読み込みます。
    $file = new SplFileObject('files/sample.txt');
    $file->setFlags(SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

    // sample.txtを1行ずつループ処理します。
    $lineNumber = 0;
    foreach ($file as $line) {
        $lineNumber++;
        echo "{$lineNumber}行目：『{$line}』", PHP_EOL;
    }

    $file = null;
    ?>
</body>