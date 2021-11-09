<?php

declare(strict_types=1); ?>

<body>
    <?php
    $expireDates = ['2020-01-03', '2021-12-11', '2019-08-10'];

    array_walk(
        $expireDates,

        function (&$date) {
            $date = (new DateTime($date))->modify('+ 3years')->format('Y-m-d');
        }
    );

    echo '●expireDatesの要素（内容が書き換わっています）', PHP_EOL;
    print_r($expireDates);
    ?>
</body>