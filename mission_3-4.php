<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_3-4</title>

</head>
<body>
    <form action=""method="post">
        <input type="text" name="str1"value="name">
        <input type="text" name="str2"value="コメント">
        <input type="submit" name="submit"value="送信する">
        <input type="number" name="str3" value=0>
        <input type="submit" name="submit111"value="削除します">
        <input type="text" name="str11"value="編集name">
        <input type="text" name="str22"value="編集コメント">
        <input type="number" name="str33" value=0>
        <input type="submit" name="submit222"value="編集します">
    </form>
    <?php
    $_POST1=$_POST["str1"];
    $_POST2=$_POST["str2"];
    $_POST3=$_POST["str3"];
    $_POST11=$_POST["str11"];
    $_POST22=$_POST["str22"];
    $_POST33=$_POST["str33"];
    $datafile ="mission_3-4.txt";
    $ret_array = file($datafile);
    
    
    if($_POST3!=null&&$_POST3!=0&&$_POST['submit111']!=null){ //削除
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
            if($_POST33!=null&&$_POST33!=0&&$_POST['submit222']!=null){  
                $time = date('Y')."年".date("m月d日 H:i:s");
                $newdata = $_POST33."<>".$_POST11."<>".$_POST22."<>".$time. PHP_EOL;
                array_splice($ret_array, $_POST33-1, 0, $newdata);
                unset($ret_array[$_POST33]);
                $items = $ret_array;
                unlink($datafile);
                foreach($items as $item){
                $fp = fopen($datafile,"a"); 
                echo $item."<br>" ;
                fwrite($fp, $item);
                fclose($fp);
                    }
            }
            else{
    if($_POST1!=""&&$_POST2!=""&&$_POST['submit']!=null){
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
     echo $newdata;
                }
            }
        }
        

        
?>
    
</body>
</html>