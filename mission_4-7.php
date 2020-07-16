<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_4-7</title>
</head>
<body>
    <?php
    // 【サンプル】
	// ・データベース名：tb220146
	// ・ユーザー名：tb-220146
	// ・パスワード：vL8JThsb8u
	// の学生の場合：

	// DB接続設定
	$dsn = 'データベース名';
	$user = 'ユーザー名';
	$password = 'パスワード';
	$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $id = 1; //変更する投稿番号
	$name = "宮川大輔";
	$comment = "わっしょい"; //変更したい名前、変更したいコメントは自分で決めること
	$sql = 'UPDATE tbtest SET name=:name,comment=:comment WHERE id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
    ?>
</body>
</html>