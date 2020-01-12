<?php
/**
 * 外部ファイルの読み込み
 */
require_once "../database.php";
require_once "../classes.php";
?>
<?php
/* STEP-1. データベース接続オブジェクトを取得する */
$pdo = connectDatabase();
/* STEP-2. 実行するSQLを設定する */
$sql = "select * from areas";
/* STEP-3. SQL実行オブジェクト（PDOStatementオブジェクト）を取得する */
$pstmt = $pdo->prepare($sql);
/* STEP-4. SQLを実行する */
$pstmt->execute();
/* STEP-5. 結果セットを取得する */
$rs = $pstmt->fetchAll();
/* STEP-6. 結果セットを配列に格納する */
$areas = [];
foreach ($rs as $record) {
	$area = new Area(intval($record["id"]), $record["name"]);
	$areas[] = $area;
}
/* STEP-7. データベース接続オブジェクトを破棄する */
disconnectDatabase($pdo);

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<title>PDOを使ってみる</title>
	</head>
	<body>
		<h1>PDOを使ってみる</h1>
		<h2>地域を選択する</h2>
		<form action="restaurants.php" method="get">
		<select name="area">
			<option value="0">-- 選択してください --</option>
			<?php foreach ($areas as $area) { ?>
			<option value="<?= $area->getId() ?>"><?= $area->getName() ?></option>
			<?php } ?>
			<!--
			<option value="1">福岡</option>
			<option value="2">神戸</option>
			<option value="3">伊豆</option>
			-->
		</select>
		<input type="submit" value="選択" />
		</form>
	</body>
</html>
