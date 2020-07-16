<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_2-4</title>
</head>
<body>
    <form action=""method="post">
        <input type="text" name="str"value="コメント">
        <input type="submit" name="submit"value="送信する">
    </form>
    <?php
    for($i=1;$i<=100;$i=$i+1){
    if($_POST["str"]!=null){
            $_POST1=$_POST["str"]. PHP_EOL;
            $i=200;
    }
}
    $filename="mission_2-4.txt";
    $fp = fopen($filename,"a");
    fwrite($fp,$_POST1);
    fclose($fp);
    $ret_array = file( $filename );
    $items = $ret_array;
    foreach($items as $item){
     echo $item."<br>" ;
    }
    
?>
    
</body>
</html>