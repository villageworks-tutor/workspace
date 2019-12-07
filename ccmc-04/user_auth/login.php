<?php
/** セッションを開始 */
session_start();

/** 正規ユーザの認証情報 */
$registered_id = "user01";	// 正規のユーザID
$registered_pw = "pass01";	// 正規のパスワード

/** リクエストパラメータを取得 */
$id = "";
if (isset($_REQUEST["id"])) {
	$id = $_REQUEST["id"];
}
$password = "";
if (isset($_REQUEST["password"])) {
	$password = $_REQUEST["password"];
}

/** 認証処理：IDとパスワードがともに正規ユーザの情報と一致していることを確認する */
$isLogined = false;
if (($id === $registered_id) and ($password === $registered_pw)) {
	$isLogined = true;
	$_SESSION["login_id"] = $id;
	$_SESSION["times"] = 1;
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
	<?php if ($isLogined === true) { ?>
		<!-- ログインに成功した場合 -->
		<p>ようこそ、usr01さん</p>
		<p><a href="other_page.php">他のページへ</a></p>
		<p><a href="logout.php">ログアウトする</a></p>
	<?php } else { ?>
		<!-- ログインに失敗した場合 -->
		<p>ログインに失敗しました。</p>
		<p><a href="entry.php">トップページへ</a></p>
	<?php } ?>
</body>
</html>