<?php

declare(strict_types=1); ?>

<body>
    <?php
    $list = range(1, 15);
    print_r($list);

    $list = range(0, 100, 10);
    print_r($list);

    $list = range('a', 'e');
    print_r($list);

    $list = range('A', 'E');
    print_r($list);
    ?>
</body>