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
	<p>ようこそ、usr01さん</p>
	<p><a href="logout.php">ログアウトする</a></p>
	<p><a href="other.php">to other page</a></p>
	<?php } else { ?>
	<p>ログインに失敗しました。</p>
	<p><a href="entry.html">ログインページへ</a></p>
	<?php } ?>
>>>>>>> class/2S
</body>
</html>