<!DOCTYPE html>
<html>
<head>
    <title>Sắp xếp mảng</title>
    <meta charset="UTF-8">
</head>
<body>

    <?php
        $error = "";
        $input = "";
        $cleanArray = [];
        $sortedArrayAsc = [];
        $sortedArrayDesc = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['mang'] ?? '';
        
            if (empty($input)) {
                $error = "Bạn chưa nhập mảng.";
            } else {
                $array = explode(",", $input);
                foreach ($array as &$value) {
                    $value = trim($value);
                }
                unset($value);

                if (in_array("", $array, true)) {
                    $error = "Mảng không hợp lệ, có thể bạn nhập 2 dấu ',' liên tiếp hoặc có thể dư. Kiểm tra lại";
                } elseif (count($array) < 2) {
                    $error = "Nhập ít nhất 2 phần tử, cách nhau bằng dấu ','.";
                } else {
                    $cleanArray = $array;
                    $sortedArrayAsc = $array;
                    sort($sortedArrayAsc);
        
                    $sortedArrayDesc = $array;
                    rsort($sortedArrayDesc);
                }
            }
        }
    ?>

    <form method="post">
        <table cellspacing="0" cellpadding="5">
            <tr>
                <td>Nhập mảng</td>
                <td>
                    <input type="text" name="mang" value="<?php echo $input; ?>"/>
                    <span><?php echo $error; ?></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Sắp xếp mảng"/></td>
            </tr>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
            echo "Kết quả:";
            echo "<p>Mảng ban đầu: " . implode(", ", $cleanArray) . "</p>";
            echo "<p> Mảng tăng dần: " . implode(", ", $sortedArrayAsc) . "</p>";
            echo "<p>Mảng giảm dần: " . implode(", ", $sortedArrayDesc) . "</p>";
        }
    ?>

</body>
</html>
