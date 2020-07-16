<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-1</title>
</head>
<body>
    <form action=""method="post">
        <input type="text" name="str1"value="name">
        <input type="text" name="str2"value="コメント">
        <input type="submit" name="submit"value="送信する">
    </form>
    <?php
    $_POST1=$_POST["str1"];
    $_POST2=$_POST["str2"];
    if($_POST1!=""&&$_POST2!=""){
    $datafile ="mission_3-1.txt";
    $time = date('Y')."年".date("m月d日 H:i:s");
    $count = count(file($datafile)); //ファイルのデータの行数を数えて$numに代入
    $count1=$count+1;
    $newdata = $count1."<>".$_POST1."<>".$_POST2."<>".$time. PHP_EOL;
    $fp = fopen($datafile,"a"); 
    fwrite($fp, $newdata);
    fclose($fp); 
    $ret_array = file($datafile);
    $items = $ret_array;
    foreach($items as $item){
     echo $item."<br>" ;
    }
    }
    
?>
    
</body>
</html>