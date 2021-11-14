<?php

declare(strict_types=1); ?>

<body>
    <?php
    $finfo = finfo_open(FILEINFO_MIME_TYPE);

    echo finfo_file($info, 'files/flower.png'), PHP_EOL; // 結果：image/png

    // 本当はテキスト形式なのに、拡張子がpdfに偽装されているファイルのMIMEタイプを取得する
    echo finfo_file($info, 'files/dummy.pdf'), PHP_EOL; // 結果：text/plain

    finfo_close($finfo);
    ?>
</body>