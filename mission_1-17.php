<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-17</title>
</head>
<body>
    <?php
        $x=90;
        if($x%3==0){
            if($x%5==0){
                echo "FizzBiz<br>";
            }else{
                echo "Biz<br>";
            };
        }else{
            if($x%5==0){
                echo "Biz";
            }
        }
    ?>
</body>
</html>