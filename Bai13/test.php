<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tìm Phần Tử Khác Nhau</title>
</head>
<body>

<form method="post">
    Nhập mảng 1:<br>
    <input type="text" name="mang1" required><br><br>

    Nhập mảng 2:<br>
    <input type="text" name="mang2" required><br><br>

    <input type="submit" value="So Sánh"><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mang1 = $_POST["mang1"];
    $mang2 = $_POST["mang2"];

    function tachMang($chuoi) {
        return explode(",", str_replace(" ", "", $chuoi)); 
    }

    function xuatMang($mang) {
        return empty($mang) ? "Không có" : implode(", ", $mang);
    }

    function timPhanTuKhacNhau($mang1, $mang2) {
        return array_diff($mang1, $mang2);
    }

    $array1 = tachMang($mang1);
    $array2 = tachMang($mang2);

    $khacMang1 = timPhanTuKhacNhau($array1, $array2);
    $khacMang2 = timPhanTuKhacNhau($array2, $array1);

    echo "<br>";
    echo "Mảng 1: " . xuatMang($array1) . "<br><br>";
    echo "Mảng 2: " . xuatMang($array2) . "<br><br>";
    echo "Phần tử chỉ có trong Mảng 1: " . xuatMang($khacMang1) . "<br><br>";
    echo "Phần tử chỉ có trong Mảng 2: " . xuatMang($khacMang2);
}
?>

</body>
</html>
