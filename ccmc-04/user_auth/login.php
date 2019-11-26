<?php
// セッションを開始
session_start();

// 正規ユーザの情報
$id_ok = "user01";
$password_ok = "pass01";

// リクエストパラメータを取得
$id = "";
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
$password = "";
if (isset($_REQUEST["password"])) {
    $password = $_REQUEST["password"];
}


// 認証処理
$isLogined = false;
if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
    $isLogined = true;
}

print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<?php if ($isLogined === true) { ?>
	<p>ようこそ、<?= $id ?> さん</p>
	<p><a href="logout.php">ログアウトする</a></p>
	<?php } else { ?>
	<p>ログインに失敗しました</p>
	<p><a href="entry.html">ログインページへ</a></p>
	<?php } ?>
</body>
</html>