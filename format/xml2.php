<?php

declare(strict_types=1); ?>

<body>
    <?php
    $xml = <<< XML
        <?xml version="1.0" encoding="UTF-8" ?>
        <books>
            <book id="1001">
                <title>斜陽</title>
                <auther>太宰治</auther>
            </book>
            <book id="1002">
                <title>こころ</title>
                <auther>夏目漱石</auther>
            </book>
        </books>
        XML;

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->loadXml($xml);
    $bookList = $dom->getElementsByTagName('book');
    foreach ($bookList as $book) {
        $titleValue = $book->getElementsByTagName('title')->item(0)->nodeValue;
        $titleValue = $book->getElementsByTagName('auther')->item(0)->nodeValue;
        echo '[タイトル]', $titleValue, ' [著者]', $autherValue, PHP_EOL;
    }
    ?>
</body>