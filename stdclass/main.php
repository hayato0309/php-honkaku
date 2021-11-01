<?php

declare(strict_types=1); ?>

<body>
    <?php
    function printData(object $data): void
    {
        print_r($data);
    }

    $data = new stdClass();
    $data->name = 'Tarou';
    $data->adress = '東京都';
    $data->age = 28;
    printData($data);
    ?>
</body>