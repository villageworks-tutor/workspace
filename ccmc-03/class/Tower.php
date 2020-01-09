<?php
/** 外部ファイルを読み込む */
require_once "Building.php";
?>
<?php
/**
 * Towerクラス：タワーを管理するクラス
 */
class Tower extends Building {
	/**
	 * 属性：このクラスに特化した属性のみを宣言する。
	 * @var int $builtYear 開業年
	 */
	private $builtYear;

	/**
	 * コンストラクタ
	 * 基底クラス（継承元クラス）と重複する属性については、基底クラスのコンストラクタを呼び出す。
	 * このクラス（継承クラス）に特化した属性だけを初期化する。
	 */
	function __construct(string $name, int $height, int $builtYear) {
		parent::__construct($name, $height);
		$this->builtYear = $builtYear;
	}

	/**
	 * アクセサメソッド
	 * 基底クラスと重複する属性のアクセサメソッドは定義しない（基底クラスのアクセサメソッドがそのまま利用できる）。
	 * このクラスに特化した属性のアクセッサメソッドを定義する。
	 */
	function setBuiltYear(int $year): void {
		$this->builtYear = $year;
	}

	function getBuiltYear():int {
		return $this->builtYear;
	}

	/**
	 * タワーの情報を取得する。
	 * @return string 諸元文字列「〈建物名〉の高さは〈建物の高さ〉mで、〈開業年〉年に開業しました。」
	 */
	function getProfile():string {
		$profile = "{$this->name} の高さは {$this->height} mで、{$this->builtYear} 年に開業しました。";
		return $profile;
	}

}
?>