<?php

declare(strict_types=1); ?>

<body>
    <?php
    $novels =
        [
            [
                'title' => '斜陽',
                'auther' => '太宰治'
            ],
            [
                'title' => 'The Catcher in the Rye',
                'auther' => 'Jerome David Salinger'
            ]
        ];
    echo json_encode($novels);
    ?>
</body>