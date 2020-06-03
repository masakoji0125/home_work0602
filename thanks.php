<?php

var_dump($_POST);
require_once('form.php');

$name = $_POST['name'];
$comment = $_POST['comment'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>お問い合わせありがとうございました</h1>
    <p>お名前：<?= h ($name); ?> </p>
    <p>お問い合わせ内容：<?= h ($comment); ?> </p>
    
</body>
</html>