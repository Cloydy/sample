<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-21</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="str">
        <input type="submit" name="submit">
    </form>
    <?php
            $str = $_POST["str"];
            echo $submit;
            if($str%3==0){
                if($str%5==0){
                    echo "FizBizz";
                }
                    else{
                    echo "Fizz";
                    }
                }else{
                    if($str%5==0){
                    echo "Bizz";
                    }
                else{
                    echo $str;
                }
            }
            
            
    ?>
</body>
</html>