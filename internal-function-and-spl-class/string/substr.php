<?php

declare(strict_types=1); ?>

<body>
    <?php
    $sentence = '今日は、いい日です';
    var_dump(mb_substr($sentence, 4, 3));
    var_dump(mb_substr($sentence, -5, 3));
    var_dump(mb_substr($sentence, 4));

    var_dump(mb_strstr($sentence, '良', false));
    var_dump(mb_strstr($sentence, '日', false));
    var_dump(mb_strstr($sentence, '日', true));
    ?>
</body>