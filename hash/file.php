<?php

declare(strict_types=1); ?>

<body>
    <?php
    // with mb5
    echo 'flower1.pngのハッシュ値', hash_file('md5', 'files/flower1.png'), PHP_EOL;
    echo 'flower2.pngのハッシュ値', hash_file('md5', 'files/flower2.png'), PHP_EOL;
    echo 'flower3.pngのハッシュ値', hash_file('md5', 'files/flower3.png'), PHP_EOL;

    // with sha256
    echo 'flower1.pngのハッシュ値', hash_file('sha256', 'files/flower1.png'), PHP_EOL;
    echo 'flower2.pngのハッシュ値', hash_file('sha256', 'files/flower2.png'), PHP_EOL;
    echo 'flower3.pngのハッシュ値', hash_file('sha256', 'files/flower3.png'), PHP_EOL;
    ?>
</body>