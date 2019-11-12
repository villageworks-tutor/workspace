<?php
require_once("class/Tower.php");
?>
<?php
$skyTree = new Tower("東京スカイツリー", 634, 2012);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Towerクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Towerクラスを利用する</h1>
	<dl>
		<dt>東京タワー</dt>
		<dd>東京タワー の高さは 333 mで 1958 年に開業しました。</dd>
	</dl>
	<dl>
		<dt><?= $skyTree->getName() ?>東京スカイツリー</dt>
		<dd><?= $skyTree->getProfile() ?></dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html







