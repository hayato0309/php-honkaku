<?php

declare(strict_types=1); ?>

<body>
    <?php
    echo bcadd('0.123', '0.234', 3), PHP_EOL; // 0.357
    echo bcadd('0.123', '0.234', 5), PHP_EOL; // 0.35700

    echo bcpow('1.2', '3', 3), PHP_EOL; // 1.728

    echo bcsqrt('2', 10), PHP_EOL;

    echo bccomp('0.12345', '0.12346', 3), PHP_EOL; // 0
    echo bccomp('0.12345', '0.12346', 4), PHP_EOL; // 0
    echo bccomp('0.12345', '0.12346', 5), PHP_EOL; // -1
    ?>
</body>