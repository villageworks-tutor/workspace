<?php
require_once "database.php";
require_once "classes.php";
?>
<?php
/**
 * 指定された地域のレストランを取得する。
 * @param  int  $area 地域ID
 * @param  bool $placeholderWithname 名前付きプレースホルダを利用する場合はtreu、それ以外はfalse
 *                                  省略された場合はtrueとする。
 * @return array レストランクラスのインスタンスの配列
 */
function findRestaurantsByArea(int $area, bool $placeholderWithName = true):array {
    
    // データベース接続オブジェクトを取得
    $pdo = connectDatabase();

    // SQLの基本形
    $sql = "select * from restaurants";
    // SQL実行オブジェクトの初期化
    $pstrmt = null;
    $params = null;
    if ($placeholderWithName) {
        $sql .= " where area = :area";
        $pstmt = $pdo->prepare($sql);
        // プレースホルダに設定するリクエストパラメータの連想配列
        $params = [];
        $params[":area"] = $area;
    } else {
        $sql .= " where area = ?";
        $pstmt = $pdo->prepare($sql);
        // プレースホルダにリクエストパラメータを設定
        $pstmt->bindValue(1, $area);
    }
    
    // SQLの実行
    $pstmt->execute($params);
    
    // 結果セットを取得
    $rs = $pstmt->fetchAll();
    
    // 結果セットを配列に格納
    $restaurants = [];
    foreach ($rs as $record) {
    	$id = intval($record["id"]);
    	$name = $record["name"];
    	$detail = $record["detail"];
    	$image = $record["image"];
    	$restaurant = new Restaurant($id, $name, $detail, $image, $area);
    	$restaurants[] = $restaurant;
    }

    // データベース接続オブジェクトを破棄
    disconnectDatabase($pdo);
    
    // 結果セットを返却
    return $restaurants;
    
}
?>