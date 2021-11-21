<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ完了</title>
</head>

<body>
    <?php
    function escape($val)
    {
        return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    if (!isset($_POST['operation'])) {
        echo 'この画面への直接アクセスは許可されていません。';
        return;
    }
    ?>

    <h2>お問い合わせを受け付けました。入力内容は以下の通りです。</h2>
    <table border="1">
        <tr>
            <th>お名前</th>
            <td><?= escape($_POST['simei']) ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?= escape($_POST['email']) ?></td>
        </tr>
        <tr>
            <th>地域</th>
            <td><?= escape($_POST['area']) ?></td>
        </tr>
        <tr>
            <th>お問い合わせ種別</th>
            <td><?= escape(implode($_POST['type'], '・')) ?></td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td><?= escape($_POST['inquiry']) ?></td>
        </tr>
        <tr>
            <th>お得な情報をEメールで受け取りますか</th>
            <td><?= escape($_POST['news_type']) ?></td>
        </tr>
    </table>
</body>

</html>