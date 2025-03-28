<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chuyển nghịch hoa thường</title>
</head>
<body>
    <form method="post">
        Nhập chuỗi: <input type="text" name="chuoi" required><br><br>
        <input type="submit" value="Chuyển đổi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST["chuoi"];
        $ketqua = "";

        for ($i = 0; $i < strlen($chuoi); $i++) {
            $kyTu = $chuoi[$i];
            if ($kyTu >= 'a' && $kyTu <= 'z') {
                $ketqua .= strtoupper($kyTu);
            } else if ($kyTu >= 'A' && $kyTu <= 'Z') {
                $ketqua .= strtolower($kyTu);
            } else {
                $ketqua .= $kyTu;
            }
        }

        echo "<br>Chuỗi sau khi chuyển: " . $ketqua;
    }
    ?>
</body>
</html>
