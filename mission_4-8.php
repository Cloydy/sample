<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_4-8</title>
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
    $id = 2;
	$sql = 'delete from tbtest where id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
    ?>
</body>
</html>