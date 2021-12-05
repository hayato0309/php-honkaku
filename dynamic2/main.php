<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/Validator.php';

    // 商品データの配列
    $items = [
        [
            // 商品名
            'name' =>
            [
                'value' => '圧力鍋',
                'value-type' => 'String'
            ],
            // 価格
            'price' =>
            [
                'value' => 6000,
                'value-type' => 'Price'
            ],
            // 商品No（英字3桁-数字4桁）
            'itemNumber' =>
            [
                'value' => 'ABC-9212',
                'value-type' => 'ItemNumber'
            ]
        ],
        [
            // 商品名
            'name' =>
            [
                'value' => '電気ケトル',
                'value-type' => 'String'
            ],
            // 価格
            'price' =>
            [
                'value' => '3000',
                'value-type' => 'Price'
            ],
            // 商品No（英字3桁-数字4桁）
            'itemNumber' =>
            [
                'value' => 'Z0I-8219Z', // この商品Noはわざと間違えています
                'value-type' => 'ItemNumber'
            ]
        ]
    ];

    $validator = new Validator();
    foreach ($items as $item) {
        echo '●', $item['name']['value'], 'の商品データをチェックします...', PHP_EOL;
        foreach ($item as $property => $values) {
            // $validatorMethodの値は「checkPrice」や「checkItemNumber」の様な文字列値となります。
            $validatorMethod = 'check' . $values['value-type'];
            if ($values['value-type'] === null || !method_exists($validator, $validatorMethod)) {
                continue;
            }
            // ここでメソッドを動的にコールしています
            // 例えば $result = $validator->checkPrice(6000); の様な命令文と評価されます
            $result = $validator->{$validatorMethod}($values['value']);
            echo $property, 'のチェック結果：', $result === true ? '成功' : '失敗', PHP_EOL;
        }
    }
    ?>
</body>