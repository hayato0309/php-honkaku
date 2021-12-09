<?php

declare(strict_types=1); ?>

<body>
    <?php
    $jsonValue = <<< VALUE
        [
            {
                "title": "\659c\u967d",
                "auther": "\u592a\u5bb0\u6cbb"
            },
            {
                "title": "こころ",
                "auther": "夏目漱石"
            },
            {
                "title": "The Cather in the Rye",
                "auther": "Jerome David Salinger"
            }
        ]
    VALUE;
    $decoded = json_decode($jsonValue, true);
    print_r($decoded);
    ?>
</body>