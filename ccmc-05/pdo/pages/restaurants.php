<?php
// 外部ファイルの読込み
require_once("../database.php");
require_once("../classes.php");
// リクエストパラメータを取得
$area = -1;
if (isset($_REQUEST["area"])) {
  $area = $_REQUEST["area"];
}
// データベースに接続
$pdo = connectDatabase();
// 実行するSQLを設定（SQLはプレースホルダ付き）
$sql = "select * from restaurants where area=?";
// SQL実行オブジェクトを取得
$pstmt = $pdo->prepare($sql);
// プレースホルダにリクエストラメータを設定
$pstmt->bindValue(1, $area);
// SQLを実行
$pstmt->execute();
// 結果セットを取得
$rs = $pstmt->fetchAll();
// 結果セットを配列に格納
$restaurants = [];
foreach ($rs as $record) {
  $id = intval($record["id"]);
  $name = $record["name"];
  $detail = $record["detail"];
  $image = $record["image"];
  $restaurant = new Restaurant($id, $name, $detail, $image, $area);
  $restaurants[] = $restaurant;
}
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