<?php

declare(strict_types=1); ?>

<body>
    <a href="to.php?message=あ&い&う&え&お">URLエンコードしないリンク</a>
    <a href="to.php?message=<?= urlencode('あ&い&う&え&お') ?>">URLエンコードしたリンク</a>
</body>