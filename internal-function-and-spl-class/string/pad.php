<?php

declare(strict_types=1); ?>

<body>
    <?php
    $sequence = 1234;
    $code = str_pad($sequence, 7, '0', STR_PAD_LEFT);
    var_dump($code);

    $price = 920;
    $priceField = str_pad($price, 8, ' ');
    var_dump($priceField);
    ?>
</body>