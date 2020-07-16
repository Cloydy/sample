<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-3</title>
</head>
<body>
    <form action=""method="post">
        <input type="text" name="str1"value="name">
        <input type="text" name="str2"value="コメント">
        <input type="submit" name="submit"value="送信する">
        <input type="number" name="str3"value="削除番号">
        <input type="submit" name="submit"value="削除します">
    </form>
    <?php
    $_POST1=$_POST["str1"];
    $_POST2=$_POST["str2"];
    $_POST3=$_POST["str3"];
    $datafile ="mission_3-3.txt";
    $ret_array = file($datafile);
    
    
    if($_POST3!=null){
    unset($ret_array[$_POST3-1]);
    $items = $ret_array;
    unlink($datafile);
    foreach($items as $item){
    $fp = fopen($datafile,"a"); 
    echo $item."<br>" ;
    fwrite($fp, $item);
    fclose($fp); 
    }        
        }else{
    if($_POST1!=""&&$_POST2!=""){
    $time = date('Y')."年".date("m月d日 H:i:s");
    $count = count(file($datafile)); //ファイルのデータの行数を数えて$numに代入
    $count1=$count+1;
    $newdata = $count1."<>".$_POST1."<>".$_POST2."<>".$time. PHP_EOL;
    $fp = fopen($datafile,"a"); 
    fwrite($fp, $newdata);
    fclose($fp); 
    $items = $ret_array;
    foreach($items as $item){
     echo $item."<br>" ;
                }
    }
        }


        
?>
    
</body>
</html>