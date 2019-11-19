<?php
require_once("funx.php");
// セッション開始
session_start();

// セッションから取得
$cart = null;
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}
// リクエストパラメータを取得
$id = -1;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}

// 選択された商品を取得
$items = createItems();
$item = $items[$id];

// 商品をカートに追加
$cart[] = $item;

// セッションに追加
$_SESSION["cart"] = $cart;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04 - ショップシステム</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />	
</head>

<body>
	<h1>ショップシステム</h1>
	<p><a href="shop.html">買い物を続ける</a>　<a href="cart.html?mode=clear">カートをクリアする</a></p>
	<table>
		<tr>
			<th>楽器名</th>
			<th>価格</th>
			<th></th>
		</tr>
				<tr>
			<td>アコースティックギター</td>
			<td>200,000円</td>
		</tr>
				<tr>
			<td>アコースティックギター</td>
			<td>200,000円</td>
		</tr>
				<tr>
			<td>ローズピアノ</td>
			<td>280,000円</td>
		</tr>
			</table>
</body>

</html>
