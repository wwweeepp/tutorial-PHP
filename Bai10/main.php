<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày sinh</title>
</head>
<body>
    <form method="post">
        Ngày sinh: <input type="number" name="ngaysinh" min="1" max="31" required><br><br>
        Tháng sinh: <input type="number" name="thangsinh" min="1" max="12" required><br><br>
        Năm sinh: <input type="number" name="namsinh" min="1900" max="<?php echo date('Y'); ?>" required><br><br>
        <input type="submit" value="Xem">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ngaysinh = $_POST['ngaysinh'];
            $thangsinh = $_POST['thangsinh'];
            $namsinh = $_POST['namsinh'];

            $namhientai = date("Y");
            $tuoi = $namhientai - $namsinh;

            echo "Bạn hiện tại $tuoi tuổi<br>";

            $ngayhientai = date("d");
            $thanghientai = date("m");

            $sinhnhatnamnay = mktime(0, 0, 0, $thangsinh, $ngaysinh, $namhientai);
            $homnay = time();

            if ($ngaysinh == $ngayhientai && $thangsinh == $thanghientai){
                echo "<br> Chúc mừng sinh nhật<br>";
            }elseif ($sinhnhatnamnay < $homnay) {
                $songayqua = floor(($hom_nay - $sinhnhatnamnay) / (60 * 60 * 24));
                echo "<br>Sinh nhật của bạn đã qua $songayqua ngày<br>";
            }else {
                $songayconlai = floor(($sinhnhatnamnay - $homnay) / (60 * 60 * 24));
                echo "$songayconlai ngày nữa đến sinh nhật";
            }
        }
    ?>
</body>
</html>