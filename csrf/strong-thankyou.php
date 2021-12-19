<?php
session_start();
if (!isset($_SESSION['token']) || !isset($_POST['token']) || $_SESSION['token'] !== $_POST['token']) {
    die('不正なリクエストです。処理を中断します..');
}

unset($_SESSION['token']);
function escape($val)
{
    return htmlspecialchars($val, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
?>

<body>
    <h3>投稿完了しました</h3>
    ●投稿内容：<br>
    <?= escape($_POST["message"]) ?>
</body>