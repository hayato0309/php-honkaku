<?php

declare(strict_types=1); ?>

<body>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    $date = new DateTime('2019-02-25 17:12:34');

    echo $date->format('Y.m.d H:i:s'), PHP_EOL; // 2019.02.25 17:12:34
    echo $date->format('y/m/d H:i'), PHP_EOL; // 2019/02/25 17:12
    echo $date->format('Y年m月d日(D) H時i分'), PHP_EOL; // 2019年02月25日(Mon) 17時12分
    echo $date->format('Y.m.t'), PHP_EOL; // 2019.02.25
    echo $date->format('U');

    echo $date->format(DateTime::ATOM), PHP_EOL; // 2019-02-25T17
    echo $date->format(DAteTime::COOKIE), PHP_EOL; // Monday, 25-Feb-2019 17:12:34 JST

    $date->setTimezone(new DateTimeZone('UTC'));
    echo $date->format('Y.m.d H:i:s'), PHP_EOL;
    ?>
</body>