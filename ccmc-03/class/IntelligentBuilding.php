<?php
require_once "Building.php";
require_once "Iintelligence.php";

class IntelligentBuilding extends Building implements Iintelligence {
	function isAutoLocked():string {
		$message = "オートロック機能完備です。";
		return $message;
	}

	function accessWiFi():string {
		$message = "無線LAN常時接続できます。";
		return $message;
	}
} 
?>