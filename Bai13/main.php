<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm phần tử khác nhau giữa hai mảng</title>
</head>
<body>
    <form method="post">
        Mảng chuỗi thứ nhất: <input type="text" name="chuoi1" required><br><br>
        Mảng chuỗi thứ hai: <input type="text" name="chuoi2" required><br><br>
        <input type="submit" value="Phân tích"><br><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $chuoi1 = $_POST['chuoi1'];
            $chuoi2 = $_POST['chuoi2'];

            function tachChuoi($chuoi1) {
                return explode(",", $chuoi1);
            }






            echo "Phần tử chỉ có trong mảng thứ nhất: ";

            echo "Phần tử chỉ có trong mảng thứ hai: ";

        }
    ?>
</body>
</html>