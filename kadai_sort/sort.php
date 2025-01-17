<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($nums, $orderBy = 'asc') {
            if ($orderBy === 'asc') {
                sort($nums);
                echo '昇順にソートします。<br>';
            } elseif ($orderBy === 'desc') {
                rsort($nums);
                echo '降順にソートします。<br>';
            } else {
                echo '無効なソート順が指定されました。<br>';
                return $nums;
            }
            
            // ソートされた配列を表示
            foreach ($nums as $num) {
                echo "{$num}<br>";
            }
        
            return $nums; // ソート後の配列を返す
        }
        
        // 使用例
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums, 'asc');
        sort_2way($nums, 'desc');
        ?>
    </p>
</body>

</html>
