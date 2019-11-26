<?php
// session開始
session_start();

// 正規ユーザの情報
$user_ok = "user01";
$password_ok = "pass01";
// リクエストパラメータの取得
$id = "";
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
$password = "";
if (isset($_REQUEST["password"])) {
    $password = $_REQUEST["password"];
}

// ユーザ認証処理
if (($id === $user_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
}


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
	<p>ようこそ、usr01さん</p>
	<p><a href="logout.html">ログアウトする</a></p>
</body>
</html>