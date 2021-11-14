<?php

declare(strict_types=1); ?>

<body>
    <?php
    function convertEncoding(string $fromFile, string $toFile, string $fromEncoding, string $toEncoding): void
    {
        file_put_contents(
            $toFile,
            mb_convert_encoding(
                file_get_contents($fromFile),
                $toEncoding,
                $fromEncoding
            )
        );
    }

    function utf2sjis(string $fromFile, string $toFile): void
    {
        convertEncoding($fromFile, $toFile, 'UTF-8', 'SJIS-win');
    }

    function sjis2utf(string $fromFile, string $toFile): void
    {
        convertEncoding($fromFile, $toFile, 'SJIS-win', 'UTF-8');
    }
    ?>
</body>