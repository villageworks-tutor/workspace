<?php
<<<<<<< HEAD
// セッションを開始
session_start();
// セッションに「id」キーが登録されているかどうかを検査
if (isset($_SESSION["id"])) {
    $_SESSION = [];
    session_destroy();
}

// セッションの確認
print_r($_SESSION);
=======
/** セッションを開始 */
session_start();

/** セッションを破棄 */
if (isset($_SESSION["login_id"])) {
	$_SESSION = [];
	session_destroy();
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
	<p>ログアウトしました。</p>
<<<<<<< HEAD
	<p><a href="entry.html">ログインページへ</a></p>
=======
	<p><a href="entry.php">ログインページへ</a></p>
>>>>>>> 97aa60d72d1773041d0d722c6da86b61053761ac
</body>
</html>