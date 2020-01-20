<?php
/**
 * Iintelligenceインタフェース：建物クラスの拡張機能としてオートロック機能と無線LAN常時接続機能を追加する。
 */
interface Iintelligence {
	/**
	 * 抽象メソッド群：処理内容（具体的な実装）は実装クラスに記述する。
	 */
	function isAutoLocked():string;
	function AccessWiFi():string;
}
?>