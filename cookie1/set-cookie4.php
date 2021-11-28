<?php

declare(strict_types=1);
// setcookie関数で同じ名前のクッキーを2回以上送出することで、新しい方の値で上書きすることができる。
setcookie('name1', 'value1', time() + 60 * 60, '/', '', false, true);
setcookie('name1', 'value2', time() + 60 * 20, '/', '', false, true);
?>

<body>
    <p>PHPからクッキーを送出しました。</p>
</body>