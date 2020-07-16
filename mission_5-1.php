<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_5-1</title>

</head>
<body>
    <form action=""method="post">
        <input type="text" name="str1"value="name">
        <input type="text" name="str2"value="コメント">
        <label>password:
        <input type="password" name="str5"value="">
        </label>
        <input type="submit" name="submit"value="送信する">
        <label>番号
        <input type="number" name="str3" value=0>
        </label>
        <label>password:
        <input type="password" name="str55"value="">
        </label>
        <input type="submit" name="submit111"value="削除します">
        <input type="text" name="str11"value="編集name">
        <input type="text" name="str22"value="編集コメント">
        <label>番号
        <input type="number" name="str33" value=0>
        </label>
        <label>password:
        <input type="password" name="str555"value="">
        </label>
        <input type="submit" name="submit222"value="編集します">
    </form>
    <?php
    $_POST1=$_POST["str1"];
    $_POST2=$_POST["str2"];
    $_POST3=$_POST["str3"];
    $_POST11=$_POST["str11"];
    $_POST22=$_POST["str22"];
    $_POST33=$_POST["str33"];
    $_POST5=$_POST["str5"];
    $_POST55=$_POST["str55"];
    $_POST555=$_POST["str555"];
    $dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
	$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    
    if($_POST5==1234 or $_POST55==1234 or$_POST555==1234){
    
    if($_POST3!=null&&$_POST3!=0&&$_POST['submit111']!=null){ //削除
    $id = $_POST3;
	$sql = 'delete from tbtest where id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
    }        
        else{
            if($_POST33!=null&&$_POST33!=0&&$_POST['submit222']!=null){  //編集
    $id = $_POST33; //変更する投稿番号
	$name = $_POST11;
	$comment = $_POST22; //変更したい名前、変更したいコメントは自分で決めること
	$time = date('Y')."年".date("m月d日 H:i:s");
	$sql = 'UPDATE tbtest SET name=:name,comment=:comment,time=:time WHERE id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
	$stmt->bindParam(':time', $time, PDO::PARAM_STR);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
            }
            else{
    if($_POST1!=""&&$_POST2!=""&&$_POST['submit']!=null){
    $sql = $pdo -> prepare("INSERT INTO tbtest (name, comment, time) VALUES (:name, :comment, :time)");
	$sql -> bindParam(':name', $name, PDO::PARAM_STR);
	$sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
	$sql -> bindParam(':time', $time, PDO::PARAM_STR);
	$name = $_POST1;
	$comment = $_POST2; //好きな名前、好きな言葉は自分で決めること
	$time = date('Y')."年".date("m月d日 H:i:s");
	$sql -> execute();
                }
            }
        }
    }
    $sql = 'SELECT * FROM tbtest';
	$stmt = $pdo->query($sql);
	$results = $stmt->fetchAll();
	foreach ($results as $row){
		//$rowの中にはテーブルのカラム名が入る
		echo $row['id'].',';
		echo $row['name'].',';
		echo $row['comment'].',';
		echo $row['time'].'<br>';
	echo "<hr>";
	}
        
?>
    
</body>
</html>