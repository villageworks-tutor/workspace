
<?php
/** 外部ファイルの読込み */
require_once "class/Apartment.php";
/** Apartmentクラスのインスタンスを生成 */
$apartment = new Apartment("同潤会表参道アパート", 17, 120000);
/*
echo "<pre>";
var_dump($apartment);
echo "<pre>";
exit(0);
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Apartmentクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Apartmentクラスを利用する</h1>
	<dl>
		<dt>同潤会表参道アパート</dt>
		<dd>
			<?= $apartment->getProfile() ?><br />
			<?= $apartment->isAutoLocked() ?><br />
			<?= $apartment->isAirConditioned() ?><br />
			<?= $apartment->accessWiFi() ?><br />
		</dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>