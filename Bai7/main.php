<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>So sánh chuỗi</title>
</head>
<body>
    <form method="post">
        Chuỗi thứ nhất: <input type="text" name="chuoi1" required><br><br>
        Chuỗi thứ hai: <input type="text" name="chuoi2" required><br><br>
        <input type="submit" value="So sánh">
        
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $chuoi_1 = $_POST['chuoi1'];
            $chuoi_2 = $_POST['chuoi2'];

            echo "Kết quả:";
            echo "<br/>";

            // Có phân biệt hoa thường
            if ($chuoi_1 === $chuoi_2) {
                echo " Hai chuỗi giống nhau (có phân biệt chữ hoa/thường) <br>";
            } else {
                echo " Hai chuỗi khác nhau (có phân biệt chữ hoa/thường) <br>";
            }

            // Không phân biệt hoa thường
             if (strcasecmp($chuoi_1, $chuoi_2) == 0) {
                echo "Hai chuỗi giống nhau (không phân biệt chữ hoa/thường)<br>";
            } else {
                echo " Hai chuỗi KHÁC nhau (không phân biệt chữ hoa/thường)<br>";
            }
        }
    ?>

</body>
</html>
