<!DOCTYPE html>
<html>
<head>
    <title>Sắp xếp mảng</title>
</head>
<body>

    <form method="post">
        Nhập mảng: <br>
        <input type="text" name="mang" value="<?php echo $_POST['mang'] ?? ''; ?>"> <br><br>
        <input type="submit" value="Sắp xếp mảng"> <br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $chuoiso = $_POST['mang'];

            $mangso = explode(",", $chuoiso);
            sapxepmang($mangso);            
            
            if (empty($_POST['mang'])) {
                echo "Bạn chưa nhập mảng <br/>";
            }elseif (count($mangso) < 2) {
                echo "Vui lòng nhập ít nhất 2 số, cách nhau bằng dấu ',' <br/>";
            }else {

                echo "Mảng ban đầu: <br>";
                echo implode(", ", $mangso);

                sort($mangso);
                echo "<br><br>Mảng tăng dần: <br>";
                echo implode(", ", $mangso);

                rsort($mangso);
                echo "<br><br>Mảng giảm dần: <br>";
                echo implode(", ", $mangso);
            }
        }

        function sapxepmang($mangso) {
            for ($i = 0; $i < count($mangso); $i++) {
                $mangso[$i] = trim($mangso[$i]);
            }
        }
    ?>
</body>
</html>
