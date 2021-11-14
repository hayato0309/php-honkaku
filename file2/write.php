<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/functions.php';

    // テキストファイルへの書き込み
    $file = new SplFileObject('files/generated.txt', 'w');
    $text = <<< TEXT
    いろはにほへと　ちりぬるを
    わかよたれそ　つねならむ
    ういのおくやま　けふこえて
    あさきゆめみし　えひもせす
    TEXT;
    $bites = $file->fwrite($text);
    echo '●generated.txtに', $bites, 'バイトを書き込みました。', PHP_EOL;

    // CSVファイルへの書き込み
    $csv = new SplFileObject('files/temp/genearted-utf.csv', 'w');
    $items = [
        ['商品名', '価格'],
        ['掃除機', '15,000'],
        ['エアコン', '60,000'],
        ['アイロン高性能', '20,000'],
        ["１行目\n\"2行目\"\n3行目", '30,000']
    ];
    foreach ($items as $item) {
        $csv->fputcsv($item);
    }

    // generated-utf.csvの文字コードをShift-JISに変換し、generated.csvとして保存します。
    utf2sjis('files/temp/generated-utf.csv', 'files/generated.csv');
    echo '●generated.csvに書き込みました。', PHP_EOL;
    $csv = null;
    ?>
</body>