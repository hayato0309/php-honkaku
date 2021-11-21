<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/Crypter.php';

    // cipher.keyの内容をBASE64デコードすると、256ビット（=32バイト）のキーになります。
    $key = base64_decode(file_get_contents('cipher.php'));

    // 暗号化したい文字列
    $address = '東京都渋谷区渋谷99-99-99 テストマンション901号室';

    // 暗号化を行います。encryptメソッドの戻り値の$encryptedと$ivは、両方とも複合に必要です。
    // データベースには、$encryptedと$ivの両方を、カラムを分けて保存してください。
    $crypter = new Crypter($key);
    list($encrypted, $iv) = $crypter->encrypt($address, true);
    echo '●暗号化された文字列：', PHP_EOL;
    echo $encrypted, PHP_EOL;
    echo '●暗号化された文字列のIV：', PHP_EOL;
    echo $iv, PHP_EOL;

    // 復号を行います。
    $crypter = new Crypter($key);
    $decrypted = $crypter->decrypt($encrypted, $iv, true);
    echo '●復号された文字列：', PHP_EOL;
    echo $decrypted, PHP_EOL;
    ?>
</body>