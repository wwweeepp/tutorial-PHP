<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tách họ và tên</title>
</head>
<body>
    <form method="post">
        Họ và tên: <input type="text" name="hoten">
        <input type="submit" value="Tách">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $hoten = trim($_POST['hoten']);
        
            $mangten = explode(" ", $hoten);
            $sotu = count($mangten);

            if ($sotu >= 2) {
                $ho = $mangten[0];
                $ten = $mangten[$sotu - 1];

                //toán tử gán chuỗi
                $tendem = "";
                for ($i = 1; $i < $sotu - 1; $i++) {
                    $tendem .= $mangten[$i] . " ";
                }
                $tendem = trim($tendem);

                echo "Kết quả sau khi tách: <br/>";
                echo "Họ $ho <br/>";
                echo "Tên đệm: $tendem <br/>";
                echo "Tên: $ten"; 
            } else {
                echo "Nhập họ và tên (ít nhất là 2 chữ)";
            }
        }

        function ($sotu, $mangten) {
            if ($sotu >= 2) {
                $ho = $mangten[0];
                $ten = $mangten[$sotu - 1];

                //toán tử gán chuỗi
                $tendem = "";
                for ($i = 1; $i < $sotu - 1; $i++) {
                    $tendem .= $mangten[$i] . " ";
                }
                $tendem = trim($tendem);
            }
        }
    ?>
</body>
</html>