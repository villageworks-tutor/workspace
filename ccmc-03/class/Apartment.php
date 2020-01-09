<?php
/** 外部ファイルを読み込む */
require_once "Building.php";
require_once "Iintelligence.php";
?>
<?php
/**
 * Apartmentクラス：アパートを管理するクラス
 */
class Apartment extends Building implements Iintelligence {
	/**
	 * 属性
	 * @var int $rentalFee 賃料
	 */
	private $rentalFee;

	/**
	 * コンストラクタ
	 */
	function __construct(string $name, int $height, int $rentalFee) {
		parent::__construct($name, $height);
		$this->rentalFee = $rentalFee;
	}

	/**
	 * アクセサメソッド
	 */
	function setRentalFee(int $fee):void {
		$this->rentalFee = $fee;
	}

	function getRentalFee():string {
		return number_format($this->rentalFee);
	}

	/**
	 * @override
	 * オートロック機能を表す文字列を取得する。
	 * @return string オートロック機能を表す文字列「安心のオートロックがあります。」
	 */
	function isAutoLocked():string {
		$message = "安心のオートロックがあります。";
		return $message;
	}

	/**
	 * @override
	 * 無線LAN常時接続機能を表す文字列を取得する。
	 * @return string 無線LAN常時接続機能を表す文字列「無線LAN常時接続できます。」
	 */
	function accessWiFi():string {
		$message = "インターネット使い放題です。";
		return $message;
	}

	/**
	 * エアコン完備機能を表す文字列を取得する。
	 * @return string エアコン完備機能を表す文字列「エアコン完備しています。」
	 */
	function isAirConditioned():string {
		$message = "エアコン完備のアパートです。";
		return $message;
	}

	/**
	 * アパートの情報を取得する。
	 * @return string 諸元文字列「〈建物名〉の賃料は〈賃料〉円／月です。」
	 */
	function getProfile():string {
		$profile = "{$this->name} の賃料は {$this->getRentalFee()} 円／月です。";
		return $profile;
	}


}
?>