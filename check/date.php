<?php

declare(strict_types=1); ?>

<body>
    <?php
    var_dump(checkdate(12, 31, 2018)); // true
    var_dump(checkdate(8, 99, 2018)); // false
    var_dump(checkdate(2, 29, 2020)); // true
    var_dump(checkdate(2, 29, 2019)); // false
    ?>
</body>