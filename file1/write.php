<?php

declare(strict_types=1); ?>

<body>
    <?php
    $log = <<< LOG
    ■2019-01-01 12:34:56 [ERROR] 画像ファイルが見つかりません。
    ■2019-01-02 12:34:56 [INFO] ユーザがログインしました。

    LOG;
    file_put_contents('files/log.txt', $log);

    $log = <<< LOG
    ■2019-01-03 12:34:56 [INFO] フリーワード検索されました。
    ■2019-01-02 12:34:56 [INFO] PDファイルがアップロードされました。

    LOG;
    file_put_contents('files/log.txt', $log, FILE_APPEND);

    echo '●log.txtの内容は以下の通りです。', PHP_EOL;
    readfile('files/log.txt');
    ?>
</body>