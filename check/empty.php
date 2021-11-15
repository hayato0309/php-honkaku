<?php

declare(strict_types=1); ?>

<body>
    <?php
    var_dump(empty(0)); // true
    var_dump(empty('0')); // true
    var_dump(empty('a')); // false
    var_dump(empty(0.1)); // false
    var_dump(empty(0.0)); // true
    var_dump(empty('')); // true
    var_dump(empty(null)); // true
    var_dump(empty([])); // true
    var_dump(empty(true)); // false
    var_dump(empty(false)); // true
    ?>
</body>