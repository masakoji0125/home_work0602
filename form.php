
<?php

function h ($str) {
   
    $result = htmlspecialchars($str, ENT_QUOTES, 'UTF-8');

    return $result;
}

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
    
    <p>お名前：<?= h ($name); ?></p>
    <p>お問い合わせ内容：<?= h ($comment); ?> </p>

    <form action="thanks.php" method ="POST">
    <input type="hidden" name="name" value="<?=  h ($name); ?>">
    <input type="hidden" name="comment" value="<?= h($comment); ?>">

    <button type ="button" onclick="history.back()">戻る</button>

    <?php if ($name != '' && $comment != '') { ?>
    <button type="submit">確定</button>
    <?php } ?>
    </form>
</body>
</html>