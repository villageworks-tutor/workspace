<?php
<<<<<<< HEAD
// 正規ユーザのIDとパスワード
$id_ok = "user01";
$password_ok = "pass01";

// セッションを開始
session_start();

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

// セッションの確認
print_r($_SESSION);

=======
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
>>>>>>> 97aa60d72d1773041d0d722c6da86b61053761ac
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
<<<<<<< HEAD
	<p>ようこそ、usr01さん</p>
	<p><a href="logout.php">ログアウトする</a></p>
	<p><a href="other.php">to other page</a></p>
	<?php } else { ?>
	<p>ログインに失敗しました。</p>
	<p><a href="entry.html">ログインページへ</a></p>
=======
		<!-- ログインに成功した場合 -->
		<p>ようこそ、usr01さん</p>
		<p><a href="other_page.php">他のページへ</a></p>
		<p><a href="logout.php">ログアウトする</a></p>
	<?php } else { ?>
		<!-- ログインに失敗した場合 -->
		<p>ログインに失敗しました。</p>
		<p><a href="entry.php">トップページへ</a></p>
>>>>>>> 97aa60d72d1773041d0d722c6da86b61053761ac
	<?php } ?>
</body>
</html>