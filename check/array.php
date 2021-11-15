<?php

declare(strict_types=1); ?>

<body>
    <?php
    $chars = ['a', 'i', 'u', 'e', 'o'];
    var_dump(in_array('u', $chars, true)); // true
    var_dump(in_array('U', $chars, true)); // false（大文字・小文字は区別）
    var_dump(in_array('n', $chars, true)); // false
    var_dump(in_array(0, $chars, true)); // false

    $chars = [
        'a' => 'あ',
        'i' => 'い',
        'u' => 'う',
        'e' => 'え',
        'o' => 'お'
    ];
    var_dump(in_array('a', $chars, true)); // false（キーは見ない）
    var_dump(in_array('n', $chars, true)); // false（キーは見ない）
    var_dump(in_array('あ', $chars, true)); // true
    var_dump(in_array('ん', $chars, true)); // false
    ?>
</body>