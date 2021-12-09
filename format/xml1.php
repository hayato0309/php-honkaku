<?php

declare(strict_types=1); ?>

<body>
    <?php
    $dom = new DOMDocument('1.0', 'UTF-8');
    $books = $dom->appendChild($dom->createElement('books'));

    // 1冊目の本を追加
    $book = $books->appendChild($dom->createElement('book'));
    $book->setAttribute('id', '1001');
    $book->appendChild($dom->createElement('title', '斜陽'));
    $book->appendChild($dom->createElement('auther', '太宰治'));

    // 2冊目の本を追加
    $book = $books->appendChild($dom->createElement('book'));
    $book->setAttribute('id', '1002');
    $book->appendChild($dom->createElement('title', 'こころ'));
    $book->appendChild($dom->createElement('auther', '夏目漱石'));

    // formatOutput = trueに設定しておくと、改行や字下げを入れて見やすく出力してくれます。
    $dom->formatOutput = true;

    // XMLを出力する
    echo htmlspecialchars($dom->saveXML(), ENT_QUOTES);
    ?>
</body>