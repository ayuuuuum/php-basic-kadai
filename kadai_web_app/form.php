<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>社員情報入力フォームを作成しよう</title>
    </head>
    <body>
        <h2>社員情報入力フォーム</h2>
        <!--入力フォームを作成-->
        <form action="confirm.php" method="POST">
            <table>
                <tr>
                    <td>お名前</td>
                    <td>
                        <!--社員の氏名を入力するテキストボックス-->
                        <input type="text" name="employee_name" ><br>
                    </td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td>
                        <!--社員の年齢を入力するテキストボックス-->
                        <input type="text" name="employee_age"><br>
                    </td>
                </tr>
                <tr>
                    <td>所属部署</td>
                    <td>
                        <!--社員の所属部署を選択するセレクトボックス-->
                        <select name="department">
                            <option value="開発部">開発部</option>
                            <option value="営業部">営業部</option>
                            <option value="人事部">人事部</option>
                        </select><br>
                    </td>
                </tr>
            </table>
            <!--フォーム最下部には送信ボタンを設置  送信ボタンが押された場合、確認画面（confirm.php）に遷移-->
            <input type="submit" value="送信">
        </form>
    </body>
</html>