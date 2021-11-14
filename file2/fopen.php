<?php

declare(strict_types=1); ?>

<body>
    <?php
    $handle = fopen('files/sample.txt', 'r');
    while ($line = fgets($handle)) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        echo $line, PHP_EOL;
    }
    fclose($handle);
    ?>
</body>