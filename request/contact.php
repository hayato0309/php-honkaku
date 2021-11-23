<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ画面</title>
</head>

<body>
    <h2>お問い合わせ画面</h2>
    <form name="inquiry" action="thankyou.php?area=2" method="post">
        <table border=1>
            <tr>
                <th>地域</th>
                <td>
                    <select name="area">
                        <option value=""></option>
                        <option value="1">北海道</option>
                        <option value="2">東北</option>
                        <option value="3">関東</option>
                        <option value="4">中部</option>
                        <option value="5">近畿</option>
                        <option value="6">中国</option>
                        <option value="7">四国</option>
                        <option value="8">九州</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="operation" value="send">送信する</button>
    </form>
</body>

</html>