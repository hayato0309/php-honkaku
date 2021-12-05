<?php

declare(strict_types=1); ?>

<body>
    <?php
    // ジェネレーター
    function excelColumnNames()
    {
        // 列名「A~Z」をyieldで返す
        foreach (range('A', 'Z') as $columnName) {
            yield $columnName;
        }

        // 列名「AA~ZZ」をyieldで返す
        foreach (range('A', 'Z') as $columnName1) {
            foreach (range('A', 'Z') as $columnName2) {
                yield $columnName1 . $columnName2;
            }
        }
    }

    // メインルーチン
    foreach (excelColumnNames() as $excelColumnName) {
        echo $excelColumnName, PHP_EOL;
    }
    ?>
</body>