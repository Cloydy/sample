<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_1-27</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="str">
        <input type="submit" name="submit">
    </form>
    <?php
    $filename="mission_1-27.txt";
    $str = $_POST["str"];
    if($str%3==0){
                if($str%5==0){
                    $str2="FizBizz". PHP_EOL;
                }
                    else{
                    $str2="Fizz". PHP_EOL;
                    }
                }else{
                    if($str%5==0){
                    $str2="Bizz". PHP_EOL;
                    }
                else{
                    $str2=$str. PHP_EOL;
                }
            }
    $fp = fopen($filename,"a");
    fwrite($fp,$str2);
    fclose($fp);
    

?>
    
</body>
</html>