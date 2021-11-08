<?php

declare(strict_types=1); ?>

<body>
    <?php
    $number = 987.654;

    echo round($number), PHP_EOL;
    echo round($number, 1), PHP_EOL;
    echo round($number, 2), PHP_EOL;
    echo round($number, 3), PHP_EOL;
    echo round($number, 4), PHP_EOL;
    echo round($number, -1), PHP_EOL;
    echo round($number, -2), PHP_EOL;

    echo ceil($number), PHP_EOL;

    echo floor($number), PHP_EOL;
    ?>
</body>