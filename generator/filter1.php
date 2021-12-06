<?php

declare(strict_types=1); ?>

<body>
    <?php
    $files = new DirectoryIterator(dirname(__FILE__) . '/uploaded');
    foreach ($files as $file) {
        // ファイルが通常のファイルでない（ディレクトリ名やシンボリックリンクである）場合は処理をスキップ
        if (!$file->isFile()) {
            continue;
        }
        // ファイルが画像ファイル以外の場合は処理をスキップ
        if (!in_array($file->getExtension(), ['jpg', 'jpeg', 'gif', 'png', 'svg', 'bmp'])) {
            continue;
        }
        // ファイルが1MB未満の場合は処理をスキップ
        if ($file->getSize() < 1 * 1024 * 1024) {
            continue;
        }
        // スキップされなかった画像ファイルのみを対象に、リサイズ処理を行う
        echo $file->getFilename(), 'をリサイズ処理しました。', PHP_EOL;
    }
    ?>
</body>