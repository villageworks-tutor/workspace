<?php
require_once "Building.php";
require_once "Iintelligence.php";
?>
<?php
/**
 * IntelligentBuildingクラス：インテリジェントビルを管理するクラス
 */
class IntelligentBuilding extends Building implements Iintelligence {

	/** 抽象メソッドの実装 */

	/**
	 * @override
	 * オートロック機能を表す文字列を取得する。
	 * @return string オートロック機能を表す文字列「オートロック完備しています。」
	 */
	function isAutoLOcked():string {
		$message = "オートロック完備しています。";
		return $message;
	}

	/**
	 * @override
	 * 無線LAN常時接続機能を表す文字列を取得する。
	 * @return string 無線LAN常時接続機能を表す文字列「無線LAN常時接続できます。」
	 */
	function accessWiFi():string {
		$message = "無線LAN常時接続できます。";
		return $message;
	}

} 
?>