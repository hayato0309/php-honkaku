<?php

declare(strict_types=1); ?>

<body>
    <?php
    require_once dirname(__FILE__) . '/InsecureHttpRequestException.php';
    require_once dirname(__FILE__) . '/InsecureLoginSessionException.php';
    require_once dirname(__FILE__) . '/SecurityException.php';

    // ログインセッションに不正な値が含まれていないかをチェックする
    function checkLoginSession()
    {
        // ここでは、必ず例外をスローします
        throw new InsecureLoginSessionException('ログインセッションに不正な値が含まれています。');
    }

    function writeSecurityLog(string $message)
    {
        file_put_contents('security.log', $message . PHP_EOL, FILE_APPEND);
    }

    // メインルーチン
    try {
        checkLoginSession();
    } catch (SecurityException $se) {
        echo 'セキュリティ例外が発生しました。[', $se->getMessage(), ']';
        writeSecurityLog($se->getMessage());
    } catch (Exception $e) {
        echo '例外が発生しました。', $e->getMessage();
    }
    ?>
</body>