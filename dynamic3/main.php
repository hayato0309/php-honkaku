<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/TaxCalculatorTakeOut.php';
    require_once dirname(__FILE__) . 'TaxCalculatorDining.php';

    // お弁当の注文データ
    $orders = [
        [
            'name' => '唐揚げ弁当',
            'price' => 800,
            'type' => 'Dining'
        ],
        [
            'name' => 'お好み焼き弁当',
            'price' => 500,
            'type' => 'TakeOut'
        ],
        [
            'name' => '唐揚げ弁当',
            'price' => 800,
            'type' => 'TakeOut'
        ]
    ];

    foreach ($orders as $order) {
        $taxClassName = 'TaxCalculator' . $order['type'];
        if (!class_exists($taxClassName)) {
            continue;
        }
        $taxInstance = new $taxClassName();
        echo $order['name'], '(', $order['type'], ')の税込価格：', $taxInstance->calculate($order['price']), '円', PHP_EOL;
    }

    ?>
</body>