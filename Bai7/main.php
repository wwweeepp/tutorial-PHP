<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>So sánh chuỗi</title>
    <script>
        function clearForm() {
            document.getElementById("replaceForm").reset();
            window.location.href = window.location.pathname;
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" id="replaceForm">
        Chuỗi thứ nhất: <input type="text" name="chuoi1">
        Chuỗi thứ hai: <input type="text" name="chuoi2">
        <input type="submit" value="So sánh">
        
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $chuoi_1 = isset($_POST['chuoi1']) ? $_POST['chuoi1'] : '';
            $chuoi_2 = isset($_POST['chuoi2']) ? $_POST['chuoi2'] : '';

            echo "Kết quả:";
            echo "<br/>";

            if ($chuoi_1 === $chuoi_2) {
                echo " Hai chuỗi giống nhau (có phân biệt chữ hoa/thường) <br>";
            } else {
                echo " Hai chuỗi khác nhau (có phân biệt chữ hoa/thường) <br>";
            }

            if (strcasecmp($chuoi_1, $chuoi_2) == 0) {
                echo "Hai chuỗi giống nhau (không phân biệt chữ hoa/thường)<br>";
            } else {
                echo " Hai chuỗi khác nhau (không phân biệt chữ hoa/thường)<br>";
            }
        }
    ?>
</body>
</html>
