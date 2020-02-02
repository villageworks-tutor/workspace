<?php
/** 外部ファイルの読み込み */
require_once "../classes.php";
require_once "../funx.php";
?>
<?php
/* STEP-1. リクエストパラメータを取得する */
$area = -1;
if (isset($_REQUEST["area"])) {
	$area = $_REQUEST["area"];
}

// レストランを取得
$restaurants = findRestaurantsByArea($area, false);

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<title>PDOを使ってみる</title>
	</head>
	<body>
		<h1>PDOを使ってみる</h1>
		<h2>選択された地域のレストラン一覧</h2>
		<table border="1">
			<tr>
				<th>レストランID</th>
				<th>レストラン名</th>
				<th>詳細</th>
				<th>画像ファイル名</th>
				<th>地域ID</th>
			</tr>
			<?php foreach ($restaurants as $restaurant) { ?>
			<tr>
				<td><?= $restaurant->getId() ?></td>
				<td><?= $restaurant->getName() ?></td>
				<td><?= $restaurant->getDetail() ?></td>
				<td><?= $restaurant->getImage() ?></td>
				<td><?= $restaurant->getArea() ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>