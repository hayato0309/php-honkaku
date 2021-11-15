<?php

declare(strict_types=1); ?>

<body>
    <?php
    $a = 'a';
    var_dump(isset($a)); // true
    var_dump(isset($b)); // false

    $z = null;
    var_dump(isset($z)); // false

    $chars = ['a', 'i', 'u'];
    var_dump(isset($chars)); // true
    var_dump(isset($chars[0])); // true
    var_dump(isset($chars[1])); // true
    var_dump(isset($chars[2])); // true
    var_dump(isset($chars[3])); // false
    var_dump(array_key_exists(0, $chars)); // true
    var_dump(array_key_exists(3, $chars)); // false

    $chars = [
        'a' => 'あ',
        'i' => 'い',
        'u' => 'う',
        'e' => null,
        'o' => 'お'
    ];
    var_dump(isset($chars['a'])); // true
    var_dump(isset($chars['e'])); // false
    var_dump(isset($chars[0])); // false
    var_dump(array_key_exists('a', $chars)); // true
    var_dump(array_key_exists('e', $chars)); // true（値がnullでもtrue）。キーが存在しているかを確認しているため。
    ?>
</body>