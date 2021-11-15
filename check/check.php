<?php

declare(strict_types=1); ?>

<body>
    <?php
    var_dump(is_bool('true')); // false
    var_dump(is_bool(true)); // true
    var_dump(is_bool(false)); // true

    var_dump(is_int(123)); // true
    var_dump(is_int('123')); // false
    var_dump(is_int(123.456)); // false

    var_dump(is_numeric(123)); // true
    var_dump(is_numeric('123')); // true
    var_dump(is_numeric('123.456')); // true
    var_dump(is_numeric('string')); // false

    var_dump(is_object('object')); // false
    var_dump(is_object(new stdClass())); // true

    var_dump(is_null(null)); // true
    var_dump(is_null('')); // false
    var_dump(is_null(0)); // false
    ?>
</body>