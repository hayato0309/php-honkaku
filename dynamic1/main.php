<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/Item.php';

    $items = [];
    $items[] = new Item('圧力鍋', 6500);
    $items[] = new Item('電気ケトル', 3000);

    // Itemクラスが持つプロパティ名と、その意味を対応づけした連想配列
    $properties = [
        'name' => '商品名',
        'price' => '金額'
    ];

    // 動的アクセスを使って、プロパティ値を出力します。
    foreach ($items as $item) {
        foreach ($properties as $property => $label) {
            echo $label, ': ', $item->{$property}, PHP_EOL;
        }
    }
    ?>
</body>