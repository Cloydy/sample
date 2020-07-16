<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-23</title>
</head>
<body>
    <?php
    $numbers = array(1,2,3,4,5);
    foreach($numbers as $number){
        if($number%4==0){
            echo "4の倍数<br>";
        }else{
            echo "4の倍数ではない<br>";
        }
    }
?>
    
</body>
</html>