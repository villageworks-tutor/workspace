<?php
// セッションを開始
session_start();
// セッションからログインユーザのIDを取得
$id = "";
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
}

// セッションの確認
print_r($_SESSION);

?>
<html>
    <body>
        <p><?= $id ?>さんはログインしています。</p>
    </body>
</html>