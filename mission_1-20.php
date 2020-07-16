<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-20</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="str">
        <input type="submit" name="submit">
    </form>
    <?php
            $str = $_POST["str"];//なくても実装可能
            echo $str;
            $str = $_POST["submit"];//なくても実装可能
            echo $submit;
    ?>
</body>
</html>