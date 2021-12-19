<?php
session_start();
function generateToken()
{
    $bytes = openssl_random_pseudo_bytes(16);
    return bin2hex($bytes);
}
$token = generateToken();
$_SESSION['token'] = $token;
?>

<body>
    <h3>投稿画面</h3>
    <form name="input" method="post" action="strong-thankyou.php">
        <input type="hidden" name="token" value="<?= $token ?>">
        ●投稿内容
        <textarea name="message" cols="50" rows="4"></textarea><br>
        <button type="submit" name="operation" value="send">送信</button>
    </form>
</body>