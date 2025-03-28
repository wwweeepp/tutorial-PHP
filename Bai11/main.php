<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập chuỗi: <input type="text" name="chuoi" required><br><br>
        <input type="submit" value="Lọc"><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST['chuoi'];
        $sodienthoai = " ";

        for ($i = 0; $i < strlen($chuoi); $i++) {
            $kytu = $chuoi[$i];
            if ($kytu >= '0' && $kytu <= '9') {
                $sodienthoai .= $kytu;
            }
        }

        
        //ko sd vòng lặp
        /*
        Kiểm tra xem chuỗi đó có đủ 10 số hay không
        Kiểm tra đầu số xem có phải bắt đầu từ 0 hay không
        Kiểm tra đầu số của nhà mạng trong nước
        Lọc tất cả các kí tự không liên quan đến sđt khi người dùng nhập vào
        
        */
        echo "Số điện thoại lọc được: " . $sodienthoai;

    }
    ?>
</body>
</html>