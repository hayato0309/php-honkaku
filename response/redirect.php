<?php
header('HTTP/1.1 307 Temporary Redirect');
header('Location: http://example.com/redirected');
// header('Location: http://example.com/redirected', true, 307);
?>

<body>
    別のサイトにリダイレクトします。
</body>