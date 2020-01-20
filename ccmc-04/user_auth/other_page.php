
<?php
/** セッションを開始 */
session_start();

/** セッションを取得 */
$loginedId = "";
$times = -1;
if (isset($_SESSION["login_id"])) {
	$loginedId = $_SESSION["login_id"];
	$times = $_SESSION["times"] + 1;
	$_SESSION["times"] = $times;
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
	<?php if (!empty($loginedId)) { ?>
		<p><?= $loginedId ?>さん！<?= $times ?>回目の訪問ですね。</p>
		<p><a href="other_page.php">他のページへ</a></p>
		<p><a href="logout.php">ログアウトする</a></p>
	<?php } else { ?>
		<p>あなたはログインしていないユーザです。</p>
		<p><a href="entry.php">トップページへ</a></p>
	<?php } ?>
</body>
</html>