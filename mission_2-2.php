<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_2-2</title>
</head>
<body>
    <form action=""method="post">
        <input type="text" name="str"value="コメント">
        <input type="submit" name="submit"value="送信する">
    </form>
    <?php
    for($i=1;$i<=100;$i=$i+1){
  //空欄ならば、forループに閉じ込め、コメントを送信しない      
    if($_POST["str"]=="完成"){
            $_POST="おめでとう". PHP_EOL;
            $i=200;
    }else{
        if($_POST["str"]!=null){
            $_POST="残念". PHP_EOL;
        $i=200;
        }
    }
}
    $filename="mission_2-2.txt";
    $fp = fopen($filename,"w");
    fwrite($fp,$_POST);
    fclose($fp);
    if($i==201){
    echo "送信完了<br>";
    }
?>
    
</body>
</html>