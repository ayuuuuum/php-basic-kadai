<?php
//POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>社員情報入力フォームを作成しよう</title>
    </head>
    <body>
        <h2>入力内容をご確認ください。</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
        <!--入力フォームで入力された3つの入力項目を表形式で表示-->
        <table border="1">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $department; ?></td>
            </tr>
        </table>
        <p>
        <!--確定ボタン・キャンセルボタンを設置-->
        <!--確定ボタン：完了画面を表示する-->
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <!--キャンセルボタン：元の入力フォームに戻る-->
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
        </p>
    </body>
</html>