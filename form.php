
<?php

$name = $_POST['name'];
echo $name;

$comment = $_POST['comment'];
echo $comment;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力内容確認</h1>

    <p>お名前：<?= $name; ?></p>
    <p>お問い合わせ内容：<?= $comment; ?> </p>
</body>
</html>