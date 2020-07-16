<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_2-1</title>
</head>
<body>
    <form action="mission_2-1.php" method="post">
        <input type="text" name="str"value="コメント">
        <input type="submit" name="submit"value="送信する" >
    </form>
    <?php
    $str = $_POST["str"];
    echo $str."を表示しました";
?>
    
</body>
</html>