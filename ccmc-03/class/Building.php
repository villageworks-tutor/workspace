<?php
/**
 * Buildingクラス：建物（ビル）を管理するクラス
 */
class Building {
	/**
	 * 属性（properties）
	 * @var string $name   建物名
	 * @var int    $height 建物の高さ
	 */
	private $name;
	private $height;

	/**
	 * コンストラクタ（constructor）：インスタンス化されるときに最初に呼ばれるメソッド
	 * @param string $name   建物名
	 * @param int    $height 建物の高さ
	 */
	function __construct(string $name, int $height) {
		$this->name = $name;
		$this->height = $height;
	}

	/**
	 * アクセサメソッド：属性にアクセスするためのメソッド
	 */
	function setName(string $name):void {
		$this->name = $name;
	}
	function getName():string {
		return $this->name;
	}

	function setHeight(int $height):void {
		$this->height = $height;
	}
	function getHeight():int {
		return $this->height;
	}

	/**
	 * 建物の情報を取得する。
	 * @return string 諸元文字列「〈建物名〉の高さは〈建物の高さ〉mです。」
	 */
	function getProfile():string {
		$profile = "{$this->name} の高さは {$this->height} mです。";
		return $profile;
	}
}
?>