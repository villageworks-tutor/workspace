<?php
require_once("Building.php");
?>
<?php
class Tower extends Building {
    // 属性
    private $builtYear;
    // コンストラクタ
    function __construct($name, $height, $builtYear) {
        parent::__construct($name, $height);
        $this->builtYear = $builtYear;
    }
    // アクセッサメソッド
    function setBuiltYear($year) {
        $this->builtYear = $year;
    }
    function getBuiltYear() {
        return $this->builtYear;
    }
    // メソッド
    function getProfile():string {
        $profile = "{$this->name} の高さは {$this->height} mで、{$this->builtYear} 年に開業しました。";
        return $profile;
    }
}
?>