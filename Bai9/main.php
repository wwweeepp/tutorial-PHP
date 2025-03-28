<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế từ trong chuỗi</title>
</head>
<body>
    <form method="post">
        Chuỗi: <input type="text" name="chuoigoc" required><br><br>
        Từ gốc: <input type="text" name="tugoc" required><br><br>
        Từ thay thế: <input type="text" name="tuthaythe" required><br><br>
        <input type="submit" value="Thay thế"><br><br>
    </form>
        
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $chuoigoc = $_POST['chuoigoc'];
            $tugoc = $_POST['tugoc'];
            $tuthaythe = $_POST['tuthaythe'];

            $chuoithaythe = str_replace($tugoc, $tuthaythe, $chuoigoc);

            echo "Kết quả:";
            echo "<br> Chuỗi ban đầu: $chuoigoc <br>";
            echo "Chuỗi sau thay thế: $chuoithaythe";
        }
    ?>
</body>
</html>