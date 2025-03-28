<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
</head>
<body>

<form method="post">
    Toán: <input type="number" name="toan" step="0.01" min = "0" max ="10"  required><br><br>
    Lý: <input type="number" name="ly" step="0.01" min = "0" max ="10"  required><br><br>
    Hóa: <input type="number" name="hoa" step="0.01" min = "0" max ="10"  required><br><br>
    Điểm chuẩn: <input type="number" name="diemchuan" step="0.1" min = "0" max ="30"  required><br><br>
    <input type="submit" name="" value="Xem kết quả">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Toan = floatval($_POST['toan']);
        $Ly = floatval($_POST['ly']);
        $Hoa = floatval($_POST['hoa']);
        $Diemchuan = floatval($_POST['diemchuan']);
        $Tongdiem = $Toan + $Ly + $Hoa;

        echo "Tổng điểm: $Tongdiem <br>";
        echo "Kết quả: ";

        if ($Toan > 0 && $Ly > 0 && $Hoa > 0 && $Tongdiem >= $Diemchuan) {
            echo "Đậu";
        }else{
            echo "Rớt";
        }
    }
?>
</body>
</html>
