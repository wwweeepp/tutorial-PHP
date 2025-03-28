<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập tuổi của bạn: <input type="number" name="tuoi" min="0" max="100" required><br><br>
        <input type="submit" value="Kiểm tra"><br><br>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $tuoi = $_POST['tuoi'];

            if($tuoi >= 15) {
                echo "Bạn được xem phim Thế giới lập trình";
            } else {
                echo "Bạn không được xem phim Thế giới lập trình";
            }
        }
    ?>
</body>
</html>