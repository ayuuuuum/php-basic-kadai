<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        /*
        関数名	sort_2way	
        引数	$array：ソート対象の配列  $order：ソート方向 （TRUE：昇順／FALSE：降順）
        戻り値	　なし
        機能　　第2引数に指定したソート方向（昇順／降順）で、第1引数の配列をソートする。　*/
        function sort_2way($array, $order) {
            //引数$oderがture(昇順)か？
            if ($order ) {
                //メッセージを表示　昇順にソートします。
                echo '昇順にソートします。<br>';
                //引数$arrayを昇順にソート
                sort($array);
            } else {
                //メッセージを表示　降順にソートします。
                echo '降順にソートします。<br>';
                //引数$arrayを降順にソート
                rsort($array);
            }
            
            // ソートされた配列を表示
            foreach ($array as $num) {
                //配列の中身を一行ずつ表示
                echo "{$num}<br>";
            }
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        //昇順にソートする
        sort_2way($nums, TRUE);
        //降順にソートする
        sort_2way($nums, FALSE);
        ?>

    </p>
</body>

</html>



