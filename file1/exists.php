<?php

declare(strict_types=1); ?>

<body>
    <?php
    var_dump(file_exists('files/note.txt'));
    var_dump(file_exists('files/ghost.txt'));
    var_dump(file_exists('files/dir1'));
    var_dump(file_exists('files/ghost-dir'));
    ?>
</body>