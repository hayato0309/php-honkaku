<?php

declare(strict_types=1); ?>

<body>
    <?php
    $dir = new DirectoryIterator('./files');

    foreach ($dir as $file) {
        if ($file->isDot()) {
            continue;
        }

        $type = '';
        if ($file->isFile()) {
            $type = 'ファイル';
        } elseif ($file->isDir()) {
            $type = 'ディレクトリ';
        }
        if ($file->isLink()) {
            $type .= '(シンボリックリンク)';
        }
        echo $type, ':', $file->getFileName(), PHP_EOL;
    }
    $dir = null;
    ?>
</body>